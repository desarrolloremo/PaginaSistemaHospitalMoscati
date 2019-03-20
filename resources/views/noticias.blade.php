@extends('header') 
@section('contenido')
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="editContent">
        <h5>Proximos eventos</h5>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 ">
                <table class="table table-action">
                    @foreach ($posts as $post)
                    <tr>
                        <td><time class="icon">
                            <em>{{ $post->fechaevento->format('D')}}</em>
                            <strong>{{ $post->fechaevento->format('m')}}</strong>
                            <span>{{ $post->fechaevento->format('d')}}</span>
                          </time>
                        </td>
                        <td>
                            {{ $post->tipoevento}}<br> Duración:
                        </td>
                    </tr>
                </table>

                @endforeach


            </div>

        </div>
    </div>

    <div class="editContent">
        <h5>Proximos eventos</h5>
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 ">
                <table class="table table-action">
                    <tr>
                        <td><time datetime="2014-09-20" class="icon">
                            <em>Saturday</em>
                            <strong>September</strong>
                            <span>20</span>
                          </time>
                        </td>
                        <td>
                            <span>
                                <span><b>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </b></span><br>
                            <span>Duración:</span>
                            </span>
                        </td>
                    </tr>
                </table>




            </div>

        </div>
    </div>
</div>
@endsection