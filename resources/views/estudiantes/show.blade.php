@extends('layouts.app')

@section('content')
<div class="card-header text-center" style="max-width: 600px; margin: 0 auto;">
    <h1>Ver Estudiante</h1>
</div>
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="{{ $estudiante->nombre }}" disabled>
        </div>
    </div>
    <div class="row">
            <div class="col-md-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" value="{{ $estudiante->apellido }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="email" class="form-label">Correo Electonico</label>
                <input type="email" class="form-control" id="email" value="{{ $estudiante->email }}" disabled>
            </div>
        </div>
    <br>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">Retornar</a>
        </div>
    </div>
@endsection