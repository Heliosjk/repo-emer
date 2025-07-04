@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Subir Contenido al Trabajo</h2>
    <form>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido textual</label>
            <textarea class="form-control" id="contenido" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Subir imagen</label>
            <input type="file" class="form-control" id="imagen">
        </div>
        <button type="submit" class="btn btn-primary">Subir</button>
    </form>
</div>
@endsection
