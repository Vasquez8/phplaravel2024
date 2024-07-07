@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-container"> 
                <div class="card card-small">
                    <div class="card-header bg-danger text-white">
                        <h1 class="card-title mb-0 text-center">Eliminar Estudiante</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $estudiante->nombre }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $estudiante->apellido }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $estudiante->email }}" disabled>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger me-2">Eliminar</button>
                                    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
