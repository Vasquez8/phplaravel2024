@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card card-small">
        <div class="card-header bg-info text-white">
            <h2 class="card-title mb-0 text-center">Ver Grupo</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" value="{{ $grupo->nombre }}" disabled>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" disabled>{{ $grupo->descripcion }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('grupos.index') }}" class="btn btn-primary me-2">Retornar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
