@extends('layouts.app')
@section('contenido')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">

        <div class="col-md-3">


        </div>

        <div class="col-md-6">
            <div class="card text">
                <div class="card-header">
                    Registrar Ticket
                </div>
                <div class="card-body ">
                    <form action="{{route('admin.index')}}">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="form-label">Afiliado</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId" value="afiliado 1" readonly>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Especialidad</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId" value="Especiliadad 1" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Medico</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId" value="Dr. asd asd" readonly>
                            </div>
                           
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Fecha</label>
                                <input type="date" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Hora</label>
                                <input type="time" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                           
                            <div class="col-md-6">
                                <input type="submit" value="Registrar" class="btn btn-success btn-block">
                           
                                <input type="submit" value="Cancelar" class="btn btn-danger btn-block">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">

                </div>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row">
    @endsection
