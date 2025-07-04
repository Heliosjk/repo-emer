@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Revisión de Trabajos Grupales</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Grupo</th>
                    <th>Título del Trabajo</th>
                    <th>Fecha de Entrega</th>
                    <th>Revisado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {{-- Datos de ejemplo (sin conexión a BD) --}}
                <tr>
                    <td>Grupo 1</td>
                    <td>Investigación sobre Laravel</td>
                    <td>2025-06-15</td>
                    <td><span class="badge bg-success">Sí</span></td>
                    <td>
                        <a href="{{ route('docente.show', ['id' => 1]) }}" class="btn btn-info btn-sm">Ver Detalles</a>
                    </td>
                </tr>
                <tr>
                    <td>Grupo 2</td>
                    <td>Proyecto MVC</td>
                    <td>2025-06-14</td>
                    <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                    <td>
                        <a href="{{ route('docente.show', ['id' => 2]) }}" class="btn btn-info btn-sm">Ver Detalles</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
