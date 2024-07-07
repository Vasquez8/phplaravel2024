@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
    <div class="card-header text-center" style="max-width: 600px; margin: 0 auto;">
        <h1>Ver Docentes Grupos</h1>
    </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="docente_nombre" class="form-label">Docente:</label>
                    <input type="text" class="form-control" id="docente_nombre" value="{{ $docenteGrupo->docente->nombre }} {{ $docenteGrupo->docente->apellido }}" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="grupo_nombre" class="form-label">Grupo:</label>
                    <input type="text" class="form-control" id="grupo_nombre" value="{{ $docenteGrupo->grupo->nombre }}" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('docentes_grupos.index') }}" class="btn btn-primary">Retornar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
