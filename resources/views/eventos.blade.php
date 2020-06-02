@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<br>
<div class="container" style="margin-top:7rem!important;margin-bottom: 3rem!important">
    <div class="container-fluid">
        <div class="row m-4 p-4 text-center">
            <div class="col-md-12 text-center">
                  <div class="blog_post p-4" style="opacity: .8;
                    background-color: white;">
                      <div class="blog_post_title mt-0"><a href="#" class="text-black p-4">Próximamente</a></div>
                  </div>
            </div>
            
        </div>
    </div>
    <div class="editContent">
        <h5>Proximos eventos</h5>

    </div>

    <div class="container-fluid">
        <div class="row">
            @foreach ($posts as $post) @if (Carbon\Carbon::parse($post->fechaevento)->format('d-m-Y')>=Carbon\Carbon::now()->format('d-m-Y'))

            <div class="col-md-2">
                <time class="icon">
                            <em>{{ $post->fechaevento->format('l')}}</em>
                            <strong>{{ $post->fechaevento->format('F')}}</strong>
                            <span>{{ $post->fechaevento->format('d')}}</span>
                          </time>
                <br>
            </div>
            <div class="col-md-10">
                <a href="eventos/{{ $post->nombre}}" style="color:black"><b>{{$post->nombre}}</b></a>
                <br> Duracion: {{$post->duracion}}
            </div>

            @endif @endforeach
        </div>
    </div>
    <hr>

    <div class="editContent">
        <h5>Eventos pasados</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            @foreach ($posts as $post) @if (Carbon\Carbon::parse($post->fechaevento)->format('d-m-Y')
            <Carbon\Carbon::now()->format('d-m-Y'))

                <div class="col-md-2">
                    <time class="icon">
                                <em>{{ $post->fechaevento->format('D')}}</em>
                                <strong>{{ $post->fechaevento->format('M')}}</strong>
                                <span>{{ $post->fechaevento->format('d')}}</span>
                              </time>
                    <br>
                </div>
                <div class="col-md-10">
                    <a href="eventos/{{ $post->nombre}}" style="color:black"><b>{{$post->nombre}}</b></a>
                    <br> Duracion: {{$post->duracion}}
                </div>

                @endif @endforeach
        </div>
    </div>
    <div class="paginador">
        {!! $posts->render() !!}
        <br>
        <br>
        <br>
    </div>

</div>
@endsection