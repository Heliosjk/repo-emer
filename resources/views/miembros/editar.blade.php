@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Editar mi Contenido</h2>
    <form>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido actual</label>
            <textarea class="form-control" id="contenido" rows="4">Texto previamente enviado...</textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Actualizar imagen</label>
            <input type="file" class="form-control" id="imagen">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
