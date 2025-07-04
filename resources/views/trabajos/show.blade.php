@extends('layouts.app')

@section('title', 'Detalle del Trabajo')

@section('content')
    <h1 class="mb-3">Trabajo: Proyecto Web</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">titulo</h5>
            <p class="card-text">texto</p>
            <p><strong>Fecha de presentación:</strong> xxxx/xx/xx</p>
        </div>
    </div>

    <h4>Subida de Contenido</h4>
    <form class="mb-4">
        <div class="mb-3">
            <label class="form-label">Subir archivo (PDF, DOCX)</label>
            <input type="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Subir</button>
    </form>

    <h4>Comentarios del Docente</h4>
    <div class="border p-3 bg-light">
        <p><strong>Observación:</strong> Buen uso del patrón MVC, pero falta validar datos.</p>
    </div>
@endsection
