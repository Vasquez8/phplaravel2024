@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center" style="max-width: 600px; margin: 0 auto;">
            <h1>Ver Estudiante Grupo</h1>
            </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="estudiante_nombre" class="col-md-4 col-form-label text-md-right">Estudiante:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="estudiante_nombre" value="{{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="grupo_nombre" class="col-md-4 col-form-label text-md-right">Grupo:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="grupo_nombre" value="{{ $estudianteGrupo->grupo->nombre }}" disabled>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a href="{{ route('estudiantes_grupos.index') }}" class="btn btn-primary">Retornar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
