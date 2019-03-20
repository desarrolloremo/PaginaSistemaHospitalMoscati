<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\PhotosBlog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PhotosBlogController extends Controller
{

    public function store(Blog $post)
    {

        $this->validate(request(), [
            'photo' => 'required|image|max:3064'
        ]);

        $photo = request()->file('photo')->store('public');


        PhotosBlog::create([
            'url' => Storage::url($photo),
            'blog_id' => $post->id
        ]);
    }
}
