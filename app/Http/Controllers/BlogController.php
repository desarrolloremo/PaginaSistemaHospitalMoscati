<?php

namespace App\Http\Controllers;

use App\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;


class BlogController extends Controller
{
  public function home()
  {

    $posts = Blog::publicados()->get();

    $posts = Blog::paginate(5);
    return view('blog', compact('posts'));
  }


  public function show(Blog $posts)
  {

    return view('blog/plantillablog', compact('posts'));
  }


}
