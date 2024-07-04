@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles de Asistencia</div>

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
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('asistencias.index') }}" class="btn btn-primary">Retornar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
