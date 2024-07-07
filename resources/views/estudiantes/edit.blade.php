@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2 class="card-title mb-0 text-center">Editar Estudiante</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="nombre" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $estudiante->nombre }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="apellido" class="col-md-2 col-form-label">Apellido</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $estudiante->apellido }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-md-2 col-form-label">Correo Electrónico</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $estudiante->email }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary me-2">Modificar</button>
                        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
