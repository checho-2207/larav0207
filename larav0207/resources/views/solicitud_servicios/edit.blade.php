<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Solicitud de Servicio</title>
</head>
<body>
    <h1>Editar Solicitud de Servicio</h1>

    <form action="{{ route('solicitud_servicios.update', $solicitudServicio) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Usuario:</label>
        <select name="usuario_id" required>
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}" {{ $solicitudServicio->usuario_id == $usuario->id ? 'selected' : '' }}>
                    {{ $usuario->names }}
                </option>
            @endforeach
        </select><br>

        <label>Cita:</label>
        <select name="citas_id" required>
            @foreach($citas as $cita)
                <option value="{{ $cita->id }}" {{ $solicitudServicio->citas_id == $cita->id ? 'selected' : '' }}>
                    {{ $cita->description }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
