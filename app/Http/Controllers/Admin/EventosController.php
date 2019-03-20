<?php

namespace App\Http\Controllers\Admin;
use App\Eventos;
use Carbon\Carbon;
use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
      
         $posts = Eventos::get();
          $posts = Eventos::orderBy('fechaevento', 'DESC')->paginate(10);
        return view('eventos', compact('posts'));
    }

    public function index()
    {
        $posts = Eventos::all();
     
        return view('admin.eventos.vereventos', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Eventos::all();

        return view('admin.eventos.creareventos', compact('posts'));
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
            'tipoevento' => 'required',
            'duracion' => 'required',
            'lugar' => 'required',
            'fechaevento' => 'required',
            'body' => 'required',

        ]);
        $post = Eventos::create([
            'nombre' => $request->get('nombre'),
            'tipoevento' => $request->get('tipoevento'),
            'duracion' => $request->get('duracion'),
            'lugar' => $request->get('lugar'),
            'duracion' => $request->get('duracion'),
            'body' => $request->get('body'),
            'fechaevento' =>  Carbon::parse($request->get('fechaevento'))
        ]);

       

        Alert::success('Evento guardado', 'Se ha realizado correctamente');
        return redirect()->route('admin.eventos.vereventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
  public function show(Eventos $posts)
  {

    return view('eventos/plantillaevento', compact('posts'));
  }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventos $post)
    {
        return view('admin.eventos.editareventos', compact('post'));

    }

   
    public function update(Request $request, $id)
    {
    }

 
    public function destroy($id)
    {
        Eventos::destroy($id);
        alert()->success('Evento eliminado correctamente');
        return redirect('/admin/eventos');
    }
}
