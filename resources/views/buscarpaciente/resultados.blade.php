@extends('header') 
@section('contenido')
<br><br><br><br><br><br>

<div class="container">

    <div class="alert alert-info" role="alert">Se muestran solo pacientes con hospitalizaciones vigentes a la fecha.</div>
    <table class="table table-striped table-bordered bs-table" cellspacing="0" rules="all" border="1" style="border-collapse:collapse;">
        <tbody>
            <tr style="color:White;background-color:#337AB7;font-weight:bold;">
                <th scope="col">Fecha de Ingreso</th>
                <th scope="col">Nombre Paciente</th>
                <th scope="col">&nbsp;</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td style="width:300px;">{{$post->fechaingreso}}</td>
                <td>{{$post->nombre." ".$post->apellidoP." ".$post->apellidoM}}</td>
                <td style="width:50px;">
                    <a class="pull-left" href="#PlaceModal-{{$post->id}}" data-toggle="modal">
                    <input type="image" src="img/SitioPrincipal/icons/busqueda.svg" data-toggle="modal" ></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @foreach ($posts as $post)
    <!-- Modal -->
    <div class="modal fade" id="PlaceModal-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$post->nombre." ".$post->apellidoP." ".$post->apellidoM}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered" style="width:100%;">
                        <tbody>
                            <tr>
                                <td>
                                    Nombre Paciente
                                </td>
                                <td>
                                    {{$post->nombre." ".$post->apellidoP." ".$post->apellidoM}}
                                </td>
                            </tr>
                            <tr>
                                <td>Sexo</td>
                                <td>
                                    {{$post->sexo}}
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha de Ingreso</td>
                                <td>
                                    {{$post->fechaingreso}}
                                </td>
                            </tr>
                            <tr>
                                <td>Unidad de Ingreso</td>
                                <td style="background-color:#AFD5F7;">
                                    {{$post->unidadingreso}}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div>
                                        <img src="img/SitioPrincipal/inicio/telefono.svg" style="height:30px"> Para consultas comuníquese a los teléfonos 22 576 2373 o al 22 576 5182
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <br><br><br><br><br><br><br><br><br><br><br><br>
</div>
@endsection