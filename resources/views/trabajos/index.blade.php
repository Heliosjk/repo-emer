@extends('layouts.app')

@section('title', 'Listado de Trabajos')

@section('content')
    <h1 class="mb-4">Listado de Trabajos del Grupo</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha de Presentación</th>
                <th>Acciones</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            {{-- Datos simulados --}}
            <tr>
                <td>TITULO 1 </td>
                <td>DESCRIPCION</td>
                <td>2025-06-15</td>
                <td>
                    <a href="{{ route('trabajos.show', 2) }}" class="btn btn-success btn-sm">Ver</a>
                    <a href="{{ route('trabajos.show', 2) }}" class="btn btn-warning btn-sm">Eliminar</a>
                </td>
                <td class="text-danger">Fuera del plazo</td>
            </tr>
            <tr>
                <td>TITULO 2</td>
                <td>DESCRIPCION</td>
                <td>2025-06-20</td>
                <td>
                    <a href="{{ route('trabajos.show', 2) }}" class="btn btn-success btn-sm">Ver</a>
                    <a href="{{ route('trabajos.show', 2) }}" class="btn btn-warning btn-sm">Eliminar</a>
                </td>
                <td class="text-success">Presentado</td>
            </tr>
        </tbody>
        <a href="{{ route('trabajos.create', 2) }}" class="btn btn-info btn-sm">Crear Trabajo</a>
    </table>
@endsection
