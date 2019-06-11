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

        $post->photos()->create([
            'url' => Storage::url(request()->file('photo')->store('posts','public')),
        ]);

    }

    public function destroy(PhotosBlog $photo){

        $photo->delete();

        // Storage::disk('public')->delete($photo->url);
         $photoPath = str_replace('storage','public',$photo->url);
         Storage::delete ($photoPath);

        alert()->success('Imagen eliminado correctamente');
        return back()->withInput();
    }
}
