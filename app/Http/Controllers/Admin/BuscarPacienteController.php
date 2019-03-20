<?php

namespace App\Http\Controllers\Admin;

use App\BuscarPaciente;
use Carbon\Carbon;
use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuscarPacienteController extends Controller
{

    public function home()
    {
        return view('buscarpaciente');
    }
    public function obtenerFormulario(BuscarPaciente $post, Request $request)
    {

        $nombre = $request->get('nombre');
        $apepaterno = $request->get('apepaterno');
        $apematerno = $request->get('apematerno');

        $posts = BuscarPaciente::orderBy('fechaingreso', 'desc')
            ->nombre($nombre)
            ->apepaterno($apepaterno)
            ->apematerno($apematerno)
            ->get();


        return view('buscarpaciente.resultados', compact('posts'));
    }
   

    public function index()
    {
        $posts = BuscarPaciente::all();

        return view('admin.buscarpacientes.verpacientes', compact('posts'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = BuscarPaciente::all();

        return view('admin.buscarpacientes.createpacientes', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = BuscarPaciente::create([
            'nombre' => $request->get('nombre'),
            'apellidoP' => $request->get('apellidoP'),
            'apellidoM' => $request->get('apellidoM'),
            'sexo' => $request->get('sexo'),
            'caracteristicas' => $request->get('caracteristicas'),
            'unidadingreso' => $request->get('unidadingreso'),
            'fechaingreso' => Carbon::now(),
        ]);


        Alert::success('Trabajo guardado', 'Se ha realizado correctamente');
        return redirect()->route('admin.buscarpacientes.verpacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BuscarPaciente $post)
    {
        return view('admin.buscarpacientes.editarpacientes', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BuscarPaciente $post, Request $request)
    {

        $post->nombre = $request->get('nombre');
        $post->apellidoP = $request->get('apellidoP');
        $post->apellidoM = $request->get('apellidoM');
        $post->sexo = $request->get('sexo');
        $post->caracteristicas = $request->get('caracteristicas');
        $post->unidadingreso = $request->get('unidadingreso');
        $post->fechaingreso = Carbon::now();

        $post->save();
        Alert::success('Paciente editado', 'Se ha realizado correctamente');
        return redirect()->route('admin.buscarpacientes.verpacientes', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BuscarPaciente::destroy($id);
        alert()->success('Paciente eliminada correctamente');
        return redirect('/admin/buscarpacientes');
    }
}
