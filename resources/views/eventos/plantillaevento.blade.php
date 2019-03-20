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

                <div class="content-post">
                    <header class="container-flex space-between">
                    </header>
                    <h1 style="color: #1B3E7A">{{$posts->nombre}}</h1>
                    <div class="divider"></div>
                    <div class="col-sm-12">
                        <div style="background: #7aa127; color:whitesmoke; text-align:center">Datos del evento</div>
                        <span>
                            Fecha del evento: {{$posts->duracion}}
                            <br>
                            Ubicacion:  {{$posts->lugar}}
                        </span>
                    </div>
                    <p>
                        {!! $posts->body !!}

                    </p>
                </div>
            </article>



        </div>
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
                    <a href="https://plus.google.com/share?url={{ request()->fullUrl()}}&text={{$posts->body}}&hl={language_code}"
                        target="_blank" class="social-btn-flip">
                        <div class="social-btn-cube">
                            <i class="social-btn-face default fab fa-google-plus google"></i>
                            <i class="social-btn-face active fab fa-google-plus google"></i>
                        </div>
                    </a>
                </li>
        
        
                <li>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url='.{{ request()->fullUrl()}}.'&amp;title='.{{$posts->body}};"   target="_blank" class="social-btn-flip">
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
@endsection