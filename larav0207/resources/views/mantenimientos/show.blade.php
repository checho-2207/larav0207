<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del Mantenimiento</title>
</head>
<body>
    <h1>Detalles del Mantenimiento</h1>

    <p>Tipo de Mantenimiento: {{ $mantenimiento->type_maintenance }}</p>
    <p>Fecha de Inicio: {{ $mantenimiento->date_start }}</p>
    <p>Fecha de Fin: {{ $mantenimiento->date_end }}</p>
    <p>Garantía: {{ $mantenimiento->warranty ? 'Sí' : 'No' }}</p>
    <p>ID de Solicitud: {{ $mantenimiento->solicitud_id }}</p>

    <a href="{{ route('mantenimientos.index') }}">Volver a la lista</a>
</body>
</html>
