<?php

namespace App\Http\Controllers\Admin;

use App\DirectorioDoctor;
use Carbon\Carbon;
use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DirectorioDoctorControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function home(Request $request)
    {
        $nombre = $request->get('data');
        $especialidad = $request->get('data');
        $subespecialidad = $request->get('data');

        $posts = DirectorioDoctor::nombre($nombre)
            ->especialidad($especialidad)
            ->subespecialidad($subespecialidad)
            ->get();

        // return $posts;
        return view('directorio', compact('posts'));

    }

    public function index()
    {
        $posts = DirectorioDoctor::all();

        return view('admin.directoriomedico.verdirectorio', compact('posts'));
    }
    public function create()
    {
        $posts = DirectorioDoctor::all();

        return view('admin.directoriomedico.createdirectorio', compact('posts'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'nombre' => 'required',
            'especialidad' => 'required',

        ]);

        $post = DirectorioDoctor::create([
            'nombre' => $request->get('nombre'),
            'especialidad' => $request->get('especialidad'),
            'subespecialidad' => $request->get('subespecialidad'),
            'telefono' => $request->get('telefono'),
            'consultorio' => $request->get('consultorio'),
        ]);



        Alert::success('Medico guardado', 'Se ha realizado correctamente');
        return redirect()->route('admin.directoriomedico.verdirectorio');
    }

    public function show($id)
    {

    }

    public function edit(DirectorioDoctor $post)
    {
        return view('admin.directoriomedico.editdirectorio', compact('post'));
    }

    public function update(DirectorioDoctor $post, Request $request)
    {


        $this->validate($request, [
            'nombre' => 'required',
            'especialidad' => 'required',

        ]);
        $post->nombre = $request->get('nombre');
        $post->especialidad = $request->get('especialidad');
        $post->subespecialidad = $request->get('subespecialidad');
        $post->telefono = $request->get('telefono');
        $post->consultorio = $request->get('consultorio');
        $post->save();
        Alert::success('Medico editado', 'Se ha realizado correctamente');
        return redirect()->route('admin.directoriomedico.verdirectorio', $post);
    }
    public function destroy($id)
    {
        DirectorioDoctor::destroy($id);
        alert()->success('Doctor eliminado correctamente');
        return redirect('/admin/directorio');
    }


}
