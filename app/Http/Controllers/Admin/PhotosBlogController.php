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

  
        $photo = request()->file('photo')->store('posts','public');

        PhotosBlog::create([
            'url' => Storage::url($photo),
            'blog_id' => $post->id
     
        ]); 
    }

    public function destroy(PhotosBlog $photo){

        $photo->delete();
        $photoPath = str_replace('storage','public',$photo->url);
        Storage::delete ($photoPath);

        alert()->success('Imagen eliminado correctamente');
        return back()->withInput();
    }
}
