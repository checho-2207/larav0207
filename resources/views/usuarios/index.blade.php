<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <a href="{{ route('usuarios.create') }}">Crear Usuario</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($usuarios as $usuario)
            <li>{{ $usuario->names }} - 
                <a href="{{ route('usuarios.show', $usuario) }}">Ver</a> - 
                <a href="{{ route('usuarios.edit', $usuario) }}">Editar</a> - 
                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
