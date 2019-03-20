<?php

namespace App\Http\Controllers\Admin;

use App\BolsaTrabajo;
use Carbon\Carbon;
use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BolsaTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $posts = BolsaTrabajo::all();

        return view('bolsadetrabajo', compact('posts'));
    }

    public function index()
    {
        $posts = BolsaTrabajo::all();

        return view('admin.bolsadetrabajo.vertrabajo', compact('posts'));
    }

    public function create()
    {
        $posts = BolsaTrabajo::all();

        return view('admin.bolsadetrabajo.createtrabajo', compact('posts'));
    }

    public function show(BolsaTrabajo $posts)
    {

        return view('bolsatrabajo/plantillatrabajo', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'excerpt' => 'required',

        ]);
        $post = BolsaTrabajo::create([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'excerpt' => $request->get('excerpt'),
            'published_at' => Carbon::now(),
        ]);

        Alert::success('Trabajo guardado', 'Se ha realizado correctamente');
        return redirect()->route('admin.bolsadetrabajo.vertrabajo');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BolsaTrabajo $post)
    {
        return view('admin.bolsadetrabajo.edittrabajo', compact('post'));

    }


    public function update(BolsaTrabajo $post, Request $request)
    {

        $this->validate($request, [
            'nombre' => 'required',
            'excerpt' => 'required',
            'descripcion' => 'required',

        ]);
        $post->nombre = $request->get('nombre');
        $post->excerpt = $request->get('excerpt');
        $post->descripcion = $request->get('descripcion');
        $post->published_at = Carbon::now();
        $post->save();
        Alert::success('Medico editado', 'Se ha realizado correctamente');
        return redirect()->route('admin.bolsadetrabajo.vertrabajo', $post);
    }


    public function destroy($id)
    {
        BolsaTrabajo::destroy($id);
        alert()->success('Vacante eliminada correctamente');
        return redirect('/admin/bolsadetrabajo');
    }
}
