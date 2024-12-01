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
        <h1>Detalles de la Cita #<?php echo e($cita->id); ?></h1>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($cita->first_name); ?> <?php echo e($cita->last_name); ?></h5>
                <p><strong>Correo:</strong> <?php echo e($cita->email); ?></p>
                <p><strong>Teléfono:</strong> <?php echo e($cita->phone); ?></p>
                <p><strong>Ciudad:</strong> <?php echo e($cita->city); ?></p>
                <p><strong>Barrio:</strong> <?php echo e($cita->neighborhood); ?></p>
                <p><strong>Dirección:</strong> <?php echo e($cita->address); ?></p>
                <p><strong>Marca del Vehículo:</strong> <?php echo e($cita->vehicle_brand); ?></p>
                <p><strong>Modelo del Vehículo:</strong> <?php echo e($cita->vehicle_model); ?></p>
                <p><strong>Número de Placa:</strong> <?php echo e($cita->plate_number); ?></p>
                <p><strong>Kilometraje:</strong> <?php echo e($cita->mileage); ?></p>
                <p><strong>Tipo de Servicio:</strong> <?php echo e($cita->service_type); ?></p>
                <p><strong>Fecha Sugerida:</strong> <?php echo e($cita->suggested_date); ?></p>
                <p><strong>Hora Sugerida:</strong> <?php echo e($cita->suggested_time); ?></p>
                <p><strong>Comentarios:</strong> <?php echo e($cita->comments); ?></p>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/citas/show.blade.php ENDPATH**/ ?>