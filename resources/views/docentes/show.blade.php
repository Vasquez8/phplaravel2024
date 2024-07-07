@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center" style="max-width: 600px; margin: 0 auto;">
                        <h1>Ver Docentes</h1>
                    </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" value="{{ $docente->nombre }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" value="{{ $docente->apellido }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="email" value="{{ $docente->email }}" disabled>
                    </div>

                    <div class="col-md-12 d-flex justify-content-end">
                        <a href="{{ route('docentes.index') }}" class="btn btn-primary m-2">Retornar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
