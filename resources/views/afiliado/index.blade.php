@extends('layouts.app')

@section('contenido')

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <label for="" class="form-label">Ingrese Numero de carnet</label>
                <input class="form-control" type="text" placeholder="Ingresar numero de carnet" >
                <br>
                <a href="{{route('especialidades.index')}}" class="btn btn-primary">Validar</a>
                <br>
                <br>
                <a href="{{route('especialidades.index')}}" class="btn btn-success">Ver Especialidades</a>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>

@endsection