<?php

namespace App\Http\Controllers;




class PostsController extends Controller
{
    public function index()
    {
      $posts = \App\Post::all();
      return view('posts.index', compact('posts'));
    }
}
