<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

/* class categoryController extends Controller
{
    public function show($categoryId)
    {
        // Retrieve the category
        $category = Category::findOrFail($categoryId);

        // Retrieve the posts associated with the category
        $posts = $category->posts;

        // Return the category and posts to the view
        return view('categories.show', compact('category', 'posts'));
    }
}
 */
class CategoryController extends Controller
{
    public function getPosts($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts;
        return view('categories.posts', compact('posts'));
    }
}
