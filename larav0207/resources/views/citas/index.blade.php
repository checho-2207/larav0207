<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Citas</title>
</head>
<body>
    <h1>Lista de Citas</h1>
    <a href="{{ route('citas.create') }}">Crear Cita</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($citas as $cita)
            <li>
                {{ $cita->date }} - {{ $cita->description }} - {{ $cita->status }}
                <a href="{{ route('citas.show', $cita) }}">Ver</a>
                <a href="{{ route('citas.edit', $cita) }}">Editar</a>
                <form action="{{ route('citas.destroy', $cita) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
