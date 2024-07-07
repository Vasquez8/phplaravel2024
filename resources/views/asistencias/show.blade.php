@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center" style="max-width: 600px; margin: 0 auto;">
                        <h1>Detalles de Asistencia</h1>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="grupo">Grupo:</label>
                            <input type="text" class="form-control" id="grupo" value="{{ $asistencia->grupo->nombre }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="estudiante">Estudiante:</label>
                            <input type="text" class="form-control" id="estudiante" value="{{ $asistencia->estudiante->nombre }} {{ $asistencia->estudiante->apellido }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="text" class="form-control" id="fecha" value="{{ $asistencia->fecha }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="hora_entrada">Hora de Entrada:</label>
                            <input type="text" class="form-control" id="hora_entrada" value="{{ $asistencia->hora_entrada }}" readonly>
                        </div>
                        <div class="text-center">
                            <div class="col-md-12 d-flex justify-content-end">
                                <a href="{{ route('asistencias.index') }}" class="btn btn-primary mx-2 mt-3">Retornar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
