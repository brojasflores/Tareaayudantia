@extends('layouts.master')

@section('inicio_vista')

@stop

@section('mostrar')

    <div class="col-lg-6">
        @if(Session::has('mensaje'))      
        <h2 style="color: red;">{{ Session::get('mensaje') }}</h2>       
        @endif
        <form action="./guardarcambio" method="post">
            <div class="form-group">
                <label>Nombre de Pais</label>
                <input id="nuevo_nombre" name="nuevo_nombre" autocomplete="false" class="form-control" onkeypress="return validatext(event,'1')" required="true" value="{{$pais->Nombre}}">
         
            </div>
            <div class="form-group">
                <label>Capital de Pais</label>
                <input id="nuevo_capital" name="nuevo_capital" autocomplete="false" class="form-control" onkeypress="return validatext(event,'1')" required="true" value="{{$pais->Capital  }}">
      
            </div>
            <div class="form-group">
                <label>Habitantes</label>
                <input id="nuevo_habitantes" name="nuevo_habitantes" class="form-control" onkeypress="return validatext(event,'2')" required="true" value="{{$pais->Habitantes}}">
      
            </div>
            <div class="form-group" hidden='true'>
                <input hidden="true" id="id" name="id" class="form-control" onkeypress="return validatext(event,'2')" required="true" value="{{$pais->id}}">
            </div>

            <button type="submit" class="btn btn-default" formaction="./guardarcambio" method="POST">Modificar Datos</button>
        </form>        
    </div>
@stop
