<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::withCategory()->get();
        return view('posts.index', compact('posts'));
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        // Redirect or return response
    }
}

/*
class PostController extends Controller
{
    public function show($postId)
    {
        // Retrieve the post
        $post = Post::findOrFail($postId);

        // Retrieve the category associated with the post
        $category = $post->category;

        // Return the post and category to the view
        return view('posts.show', compact('post', 'category'));
    }

    public function index()
    {
        $posts = Post::with('category')->get();

        return view('posts.index', compact('posts'));
    }
}
 */
