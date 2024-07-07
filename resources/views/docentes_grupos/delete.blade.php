@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-danger text-white text-center">
            <h2>Eliminar Docente Grupo</h2>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label for="docente_nombre" class="form-label">Docente:</label>
                <input type="text" class="form-control" id="docente_nombre" value="{{ $docenteGrupo->docente->nombre }} {{ $docenteGrupo->docente->apellido }}" disabled>
            </div>

            <div class="mb-3">
                <label for="grupo_nombre" class="form-label">Grupo:</label>
                <input type="text" class="form-control" id="grupo_nombre" value="{{ $docenteGrupo->grupo->nombre }}" disabled>
            </div>

            <div class="text-center">
                <form action="{{ route('docentes_grupos.destroy', $docenteGrupo->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger mx-2">Eliminar</button>
                    <a href="{{ route('docentes_grupos.index') }}" class="btn btn-secondary mx-2">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
