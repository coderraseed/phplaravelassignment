<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //Answer of question no 2
    public function postsRetrives() {
        $posts = DB::table('posts')
            ->select('excerpt', 'description')
            ->get();

        return $posts;
    }
    //Answer of question no 3

    public function postDistinct() {
        $uniqueTitle = DB::table('posts')
                ->select('title')
                ->distinct()
                ->get();

        return $uniqueTitle;
    }
    //Answer of question no 4

    public function firstRecord() {
        $posts = DB::table('posts')
            ->where('id', 2)
            ->first();

        print_r($posts->description);

    }

    //Answer of question no 5
    public function postDescription() {
        $posts = DB::table('posts')
            ->where('id', 2)
            ->pluck('description');

        print_r($posts);
    }

    //Answer of question no 6
    public function postTitle() {
        $posts = DB::table('posts')
            ->pluck('title');

        return $posts;

    }

    //Answer of question no 8
    public function postInsert() {
        $result = DB::table('posts')
            ->insert([
                'title' => 'X',
                'slug' => 'X',
                'excerpt' => 'excerpt',
                'description' => 'description',
                'is_published' => true,
                'min_to_read' => 2,
            ]);

        print_r($result);


    }
    //Answer of question no 9
    public function updateRows() {
        $affectedRows = DB::table('posts')
                ->where('id', 2)
                ->update([
                    'excerpt' => 'Laravel 10',
                    'description' => 'Laravel 10',
                ]);

        return $affectedRows;
    }
    //Answer of question no 10
    public function deleteRows() {
        $deleteRows = DB::table('posts')
                ->where('id', 3)
                ->delete();

        print_r($deleteRows);

    }

    //Answer of question no 11
    public function aggreGatesCount(){
        $result =DB::table('products')->count();
        return $result;
    }
    public function aggreGatesMax(){
        $result =DB::table('products')->max('price');
        return $result;

    }
    public function aggreGatesMin(){
        $result =DB::table('products')->min('price');
        return $result;

    }
    public function aggreGatesAvg(){
        $result =DB::table('products')->avg('price');
        return $result;

    }
    public function aggreGatesSum(){
        $result =DB::table('products')->sum('price');
        return $result;

    }


    //Answer of question no 12
    public function postWhereNot() {
        $users = DB::table('products')
            ->whereNot('price','=',2000)
            ->get();
        return $users;

    }
    //Answer of question no 13
    public function postExists() {
        $hasPosts = DB::table('posts')
             ->where('slug', 'Lorem')
             ->exists();
        return $hasPosts;

    }
    public function postDoesntExist() {
        $hasPosts = DB::table('posts')
             ->where('slug', 'Lorem')
             ->doesntExist();
        return $hasPosts;

    }

    //Answer of question no 13
    public function postmin_to_read() {
        $posts = DB::table('posts')
            ->whereBetween('min_to_read', [1, 5])
            ->get();
        return $posts;
    }

    //Answer of question no 13
    public function postmintoRead() {
        $posts = DB::table('posts')
                ->where('id', 3)
                ->increment('min_to_read');
        return $posts;
    }



}
