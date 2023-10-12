<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category', 'author'])->paginate(10);
        return response()->json(['posts' => $posts])->header('Content-Type', 'application/json');
    }

    public function show($id)
    {
        $post = Post::with(['category', 'author'])->find($id);

        if(!$post)
        {
            return response()->json(['message' => 'Post not found'], 404)->header('Content-Type', 'application/json');
        }

        return response()->json(['post' => $post])->header('Content-Type', 'application/json');
    }

    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();

        return view('posts.create', ['categories' => $categories, 'authors' => $authors]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
           'title' => 'required|string|max:255',
           'content' =>'required',
           'category_id' =>  'required|exists:categories,id',
           'author_id' => 'required|exists:authors,id',
            ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400)->header('Content-Type', 'application/json');
        }

        $post = Post::create($request->all());

        return response()->json(['post' => $post], 201);
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $authors = Author::all();

        return view('posts.edit', compact('post', 'categories', 'authors'));
    }

    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|string|max:255',
            'content' =>'required',
            'category_id' =>  'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400)->header('Content-Type', 'application/json');
        }

        $post->update($request->all());

        return response()->json(['post' => $post])->header('Content-Type', 'application/json');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(null, 204)->header('Content-Type', 'application/json');
    }
}
