@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h1>Editar Docente</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('docentes.update', $docente->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $docente->nombre }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $docente->apellido }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $docente->email }}" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mx-2">Modificar</button>
                            <a href="{{ route('docentes.index') }}" class="btn btn-secondary mx-2">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
