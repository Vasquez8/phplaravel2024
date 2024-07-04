@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-4 border p-4 rounded">
            <h1 class="text-center mb-4">Login docente</h1>
            <form action="{{ route('docentes.login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mt-3 d-grid gap-2 col-6 mx-auto mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <div class="form-group">
                    @error('InvalidCredentials')
                    <div class="alert alert-danger mt-3" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
