@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<br> @foreach ($posts as $post)
<div class="col-md-8 mx-auto">

  <article class="post w-image">
    @if ($post->photos->count())
    <img src="{{ $post->photos->first()->url}}" alt="Imagen blog" style="height: 400px; width: 100%"> @endif
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
        </div>

      </footer>
    </div>
  </article>
</div>
@endforeach
<div class="paginador">
  {!! $posts->render() !!}
  <br>
  <br>
  <br>
</div>

@endsection