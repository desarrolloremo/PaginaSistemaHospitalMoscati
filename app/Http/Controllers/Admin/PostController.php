<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\PhotosBlog;
use Carbon\Carbon;
use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    //protected $guarded=[];
    public function index()
    {
        $posts = Blog::all();

        return view('admin.blognoticias.verposts', compact('posts'));
    }
    public function create()
    {
        $posts = Blog::all();

        return view('admin.blognoticias.creaposts', compact('posts'));
    }

    public function edit(Blog $post)
    {
        return view('admin.blognoticias.editposts', compact('post'));
    }
    public function store(Request $request)
    {

        $this->validate($request, ['title' => 'required', ]);

        $post = Blog::create($request->only('title'));
        $post->url = str-slug($request->get('title') . "-$post->id");
        $post->save();

        return redirect()->route('admin.blognoticias.editposts', $post);
    }

    public function update(Blog $post, Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'categoria' => 'required',
        ]);
        $post->title = $request->get('title');
        $post->url = str_slug($request->get('title'));
        $post->body = $request->get('body');
        $post->iframe = $request->get('iframe');
        $post->excerpt = $request->get('excerpt');
        $post->published_at = Carbon::parse($request->get('published_at'));
        $post->categoria = $request->get('categoria');
        $post->save();
        Alert::success('Publicacion guardado', 'Se ha realizado correctamente');
        return redirect()->route('admin.blognoticias.verposts', $post);
    }

    public function destroy(Blog $post)
    {

        $post->photos()->delete();

        $post->delete();

        alert()->success('Elemento eliminado correctamente');
        return redirect('/admin/posts');
    }

}
