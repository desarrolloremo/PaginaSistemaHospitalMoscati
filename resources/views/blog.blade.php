@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
<br> @foreach ($posts as $post)
<div class="col-md-8 mx-auto" style="margin-top:7rem!important">

  <article class="post w-image">
    @if ($post->photos->count())
    <img src="{{ url($post->photos->first()->url)}}" alt="Imagen blog" style="height: 400px; width: 100%"> 
    @elseif($post->iframe)
    <div class="video">
      {!! $post->iframe !!}
    </div>
    @endif
    <div class="content-post">
      <header class="container-flex space-between">
        <div class="date">
          <span class="c-gray-1">{{ $post->published_at->format('d M Y')}}</span>
        </div>
        <div class="post-category">
          <span class="category text-capitalize">{{ $post->categoria}}</span>
        </div>
      </header>
      <h1>{{ $post->title}}</h1>
      <div class="divider"></div>
      <cite class="cite">{{ $post->excerpt}} </cite>

      <footer class="container-flex space-between">
        <div class="read-more">
          <a href="blog/{{ $post->url}}" class="text-uppercase c-green">Leer mas ..</a>
          <h1>holaaaaaaaaaaaaaaaaaaaaa</h1>
        </div>

      </footer>
    </div>
  </article>
</div>
@endforeach
<div class="pagination mx-auto" style="width: 200px;">
  {!! $posts->render() !!}
  <br>
  <br>
  <br>
</div>
@endsection