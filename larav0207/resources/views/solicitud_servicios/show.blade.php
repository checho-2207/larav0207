<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles de la Solicitud de Servicio</title>
</head>
<body>
    <h1>Detalles de la Solicitud de Servicio</h1>

    <p>Usuario: {{ $solicitudServicio->usuario->names }}</p>
    <p>Cita: {{ $solicitudServicio->cita->description }}</p>

    <a href="{{ route('solicitud_servicios.index') }}">Volver a la lista</a>
</body>
</html>
