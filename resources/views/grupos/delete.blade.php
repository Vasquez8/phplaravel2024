@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-small">
                <div class="card-header bg-danger text-white">
                    <h2 class="card-title mb-0 text-center">Eliminar Grupo</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $grupo->nombre }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" disabled>{{ $grupo->descripcion }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-danger me-2">Eliminar</button>
                                <a href="{{ route('grupos.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
