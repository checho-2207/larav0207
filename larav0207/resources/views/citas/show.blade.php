<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles de la Cita</title>
</head>
<body>
    <h1>Detalles de la Cita</h1>

    <p>Fecha y Hora: {{ $cita->date }}</p>
    <p>Descripción: {{ $cita->description }}</p>
    <p>Estado: {{ $cita->status }}</p>

    <a href="{{ route('citas.index') }}">Volver a la lista</a>
</body>
</html>
