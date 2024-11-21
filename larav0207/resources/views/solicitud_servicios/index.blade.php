<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Solicitudes de Servicios</title>
</head>
<body>
    <h1>Lista de Solicitudes de Servicios</h1>
    <a href="{{ route('solicitud_servicios.create') }}">Crear Solicitud de Servicio</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($solicitudes as $solicitud)
            <li>
                Usuario ID: {{ $solicitud->usuario->names }} - Cita ID: {{ $solicitud->cita->description }}
                <a href="{{ route('solicitud_servicios.show', $solicitud) }}">Ver</a>
                <a href="{{ route('solicitud_servicios.edit', $solicitud) }}">Editar</a>
                <form action="{{ route('solicitud_servicios.destroy', $solicitud) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
