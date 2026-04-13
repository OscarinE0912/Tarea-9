@extends('layouts.app')
@section('titulo', 'Fotos')
@section('contenido')
    <h1>Galería de Fotos</h1>
    <p class="text-muted">Esta sección corresponde a la galería de imágenes.</p>
    <div class="row mt-3">
        @for ($i = 1; $i <= 6; $i++)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="https://picsum.photos/300/200?random={{ $i }}" class="card-img-top" alt="Foto {{ $i }}">
                <div class="card-body">
                    <p class="card-text">Foto número {{ $i }}</p>
                </div>
            </div>
        </div>
        @endfor
    </div>
@endsection