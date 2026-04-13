@extends('layouts.app')
@section('titulo', 'Contacto')
@section('contenido')
    <h1>Contacto</h1>
    <p class="text-muted">Esta sección corresponde al formulario de contacto.</p>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Tu nombre">
            </div>
            <div class="mb-3">
                <label class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" placeholder="correo@ejemplo.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Mensaje</label>
                <textarea class="form-control" rows="4" placeholder="Escribe tu mensaje..."></textarea>
            </div>
            <button class="btn btn-dark">Enviar mensaje</button>
        </div>
    </div>
@endsection