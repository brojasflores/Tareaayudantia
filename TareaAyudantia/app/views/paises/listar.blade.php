@extends('layouts.master')

@section('inicio_vista')
   
@stop

@section('mostrar')
    <div>
        <!--<h2>Paises.</h2>-->
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Capital</th>
                        <th>Habitantes</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paises as $pais)
                    <form>
                    <tr>
                        <td>{{$pais->Nombre}}</td>
                        <td>{{$pais->Capital}}</td>
                        <td>{{$pais->Habitantes}}</td>
                        <td><button type="submit" class="btn btn-default" formaction="./editar{{$pais->id}}" >Modificar Datos</button></td>                        
                    </tr>
                    </form>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

<script onload="document">
    function prueba(){
        $("#lateral_inicio").class("inactive");
        $("#lateral_listar").class("active");
        $("#lateral_nuevo").class("inactive");
        $("#lateral_detalles").class("inactive");       
    };
</script>