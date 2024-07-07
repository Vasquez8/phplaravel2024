@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-danger text-white text-center">Eliminar Docente</div>

                <div class="card-body">
                    <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $docente->nombre }}" disabled>
                        </div>
                        
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $docente->apellido }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $docente->email }}" disabled>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-danger mx-2">Eliminar</button>
                            <a href="{{ route('docentes.index') }}" class="btn btn-secondary mx-2">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
