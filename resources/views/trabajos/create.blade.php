@extends('layouts.app')

@section('title', 'Registrar Trabajo')

@section('content')
    <h1 class="mb-4">Registrar Nuevo Trabajo</h1>

    <form>
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" class="form-control" placeholder="Título del trabajo">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea class="form-control" rows="4" placeholder="Descripción..."></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Presentación</label>
            <input type="date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
