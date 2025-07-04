@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Nuevo Usuario</h1>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf

        <label for="name">Nombre:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" name="password" required><br><br>

        <label for="rol">Rol:</label><br>
        <select name="rol" required>
            <option value="docente">Docente</option>
            <option value="lider">Líder</option>
            <option value="miembro">Miembro</option>
        </select><br><br>

        <button type="submit">Registrar Usuario</button>
    </form>
</div>
@endsection
