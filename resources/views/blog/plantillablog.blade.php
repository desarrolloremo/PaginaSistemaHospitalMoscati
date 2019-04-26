@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<br>
<div class="row">
    <div class="container">
        <div class="col-lg-12">

            <article class="post w-image">
                @if ($posts->photos->count())
                <figure><img src="{{ $posts->photos->first()->url}}" alt="Imagen blog" style="height: 400px; width: 100%"></figure>
                @elseif($posts->iframe)
                <div class="video">
                    {!! $posts->iframe !!}
                </div>
                @endif
                <div class="content-post">
                    <header class="container-flex space-between">
                        <div class="date">
                            <span class="c-gray-1">{{ $posts->published_at->format('d F Y')}}</span>
                        </div>
                        <div class="post-category">
                            <span class="category text-capitalize">{{$posts->categoria}}</span>
                        </div>
                    </header>
                    <h1>{{$posts->title}}</h1>
                    <div class="divider"></div>

                    <article>
                        {!! $posts->body !!}
                    </article>

                </div>
            </article>
            <hr>
            <div class="section">
                <h1>Compartir:</h1>
                <ul class="social-btns">

                    <li>
                        <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl()}}&text={{$posts->title}}&via=HospitalMoscati&hashtags=HospitalMoscati"
                            target="_blank" class="social-btn-flip">
                            <div class="social-btn-cube">
                                <i class="social-btn-face default fab fa-twitter twitter"></i>
                                <i class="social-btn-face active fab fa-twitter twitter"></i>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl()}}&title={{$posts->title}}" target="_blank" class="social-btn-flip">
                            <div class="social-btn-cube">
                                <i class="social-btn-face default fab fa-facebook-f facebook"></i>
                                <i class="social-btn-face active fab fa-facebook-f facebook"></i>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="https://plus.google.com/share?url={{ request()->fullUrl()}}&text={{$posts->body}}&hl={language_code}" target="_blank"
                            class="social-btn-flip">
                            <div class="social-btn-cube">
                                <i class="social-btn-face default fab fa-google-plus google"></i>
                                <i class="social-btn-face active fab fa-google-plus google"></i>
                            </div>
                        </a>
                    </li>


                    <li>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url='.{{ request()->fullUrl()}}.'&amp;title='.{{$posts->body}};"
                            target="_blank" class="social-btn-flip">
                            <div class="social-btn-cube">
                                <i class="social-btn-face default fab fa-linkedin-in instagram"></i>
                                <i class="social-btn-face active fab fa-linkedin-in instagram"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

</div>
@endsection