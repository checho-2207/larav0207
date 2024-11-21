<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Solicitud de Servicio</title>
</head>
<body>
    <h1>Crear Solicitud de Servicio</h1>

    <form action="{{ route('solicitud_servicios.store') }}" method="POST">
        @csrf
        <label>Usuario:</label>
        <select name="usuario_id" required>
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->names }}</option>
            @endforeach
        </select><br>

        <label>Cita:</label>
        <select name="citas_id" required>
            @foreach($citas as $cita)
                <option value="{{ $cita->id }}">{{ $cita->description }}</option>
            @endforeach
        </select><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
