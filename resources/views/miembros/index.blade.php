@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Mis Trabajos Asignados</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>Fecha Límite</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Trabajo #1 - Redes</td>
                <td>2025-06-20</td>
                <td>
                    <a href="{{ route('miembros.subir', 1) }}" class="btn btn-success btn-sm">Subir Contenido</a>
                    <a href="{{ route('miembros.editar', 1) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
