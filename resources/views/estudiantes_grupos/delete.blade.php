@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <h1 class="card-title mb-0 text-center">Eliminar Estudiante Grupo</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('estudiantes_grupos.destroy', $estudianteGrupo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="mb-3">
                            <label for="estudiante_nombre" class="form-label">Estudiante</label>
                            <input type="text" class="form-control" id="estudiante_nombre" 
                                value="{{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="grupo_nombre" class="form-label">Grupo</label>
                            <input type="text" class="form-control" id="grupo_nombre" 
                                value="{{ $estudianteGrupo->grupo->nombre }}" disabled>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-danger me-2">Eliminar</button>
                                <a href="{{ route('estudiantes_grupos.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
