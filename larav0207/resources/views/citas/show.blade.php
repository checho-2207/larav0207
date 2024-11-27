<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Cita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalles de la Cita #{{ $cita->id }}</h1>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $cita->first_name }} {{ $cita->last_name }}</h5>
                <p><strong>Correo:</strong> {{ $cita->email }}</p>
                <p><strong>Teléfono:</strong> {{ $cita->phone }}</p>
                <p><strong>Ciudad:</strong> {{ $cita->city }}</p>
                <p><strong>Barrio:</strong> {{ $cita->neighborhood }}</p>
                <p><strong>Dirección:</strong> {{ $cita->address }}</p>
                <p><strong>Marca del Vehículo:</strong> {{ $cita->vehicle_brand }}</p>
                <p><strong>Modelo del Vehículo:</strong> {{ $cita->vehicle_model }}</p>
                <p><strong>Número de Placa:</strong> {{ $cita->plate_number }}</p>
                <p><strong>Kilometraje:</strong> {{ $cita->mileage }}</p>
                <p><strong>Tipo de Servicio:</strong> {{ $cita->service_type }}</p>
                <p><strong>Fecha Sugerida:</strong> {{ $cita->suggested_date }}</p>
                <p><strong>Hora Sugerida:</strong> {{ $cita->suggested_time }}</p>
                <p><strong>Comentarios:</strong> {{ $cita->comments }}</p>
            </div>
        </div>
    </div>
</body>
</html>
