@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">Bienvenido a Mi Web</div>

                <div class="card-body">
                    @auth
                    <div class="alert alert-success" role="alert">
                        <p class="mb-0">¡Hola, {{ auth()->user()->email }}! Bienvenido de nuevo a nuestra plataforma.</p>
                    </div>
                    @else
                    <div class="text-center">
                        <p class="lead">Bienvenido a nuestra plataforma. Por favor, inicia sesión para acceder a nuestros servicios.</p>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
