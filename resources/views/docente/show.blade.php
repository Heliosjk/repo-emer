@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Detalle del Trabajo</h2>

    <div class="card mb-4">
        <div class="card-header">
            Título: Investigación sobre Laravel
        </div>
        <div class="card-body">
            <p><strong>Grupo:</strong> Grupo 1</p>
            <p><strong>Fecha de entrega:</strong> 2025-06-15</p>
            <p><strong>Contenido:</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id leo nec risus faucibus.</p>

            <a href="#" class="btn btn-primary">Descargar Archivo</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Comentario sobre El Proyecto
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="comentario" class="form-label">Comentario</label>
                    <textarea class="form-control" id="comentario" rows="4" placeholder="Escribe tu devolución..."></textarea>
                </div>
                <button type="submit" class="btn btn-success">Guardar Comentario</button>
            </form>
        </div>
    </div>
</div>
@endsection
