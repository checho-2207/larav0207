<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Mantenimientos</title>
</head>
<body>
    <h1>Lista de Mantenimientos</h1>
    <a href="{{ route('mantenimientos.create') }}">Crear Mantenimiento</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($mantenimientos as $mantenimiento)
            <li>
                {{ $mantenimiento->type_maintenance }} - {{ $mantenimiento->date_start }} - {{ $mantenimiento->date_end }} - {{ $mantenimiento->warranty ? 'Sí' : 'No' }}
                <a href="{{ route('mantenimientos.show', $mantenimiento) }}">Ver</a>
                <a href="{{ route('mantenimientos.edit', $mantenimiento) }}">Editar</a>
                <form action="{{ route('mantenimientos.destroy', $mantenimiento) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
