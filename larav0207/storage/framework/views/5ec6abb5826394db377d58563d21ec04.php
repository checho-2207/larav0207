<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Cita</h1>
        <form action="<?php echo e(route('citas.update', $cita->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="first_name" class="form-label">Nombre</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo e($cita->first_name); ?>" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellidos</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo e($cita->last_name); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo e($cita->email); ?>" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?php echo e($cita->phone); ?>" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <input type="text" name="city" id="city" class="form-control" value="<?php echo e($cita->city); ?>" required>
            </div>
            <div class="mb-3">
                <label for="neighborhood" class="form-label">Barrio</label>
                <input type="text" name="neighborhood" id="neighborhood" class="form-control" value="<?php echo e($cita->neighborhood); ?>">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" name="address" id="address" class="form-control" value="<?php echo e($cita->address); ?>">
            </div>
            <div class="mb-3">
                <label for="vehicle_brand" class="form-label">Marca del Vehículo</label>
                <input type="text" name="vehicle_brand" id="vehicle_brand" class="form-control" value="<?php echo e($cita->vehicle_brand); ?>" required>
            </div>
            <div class="mb-3">
                <label for="vehicle_model" class="form-label">Modelo del Vehículo</label>
                <input type="text" name="vehicle_model" id="vehicle_model" class="form-control" value="<?php echo e($cita->vehicle_model); ?>" required>
            </div>
            <div class="mb-3">
                <label for="plate_number" class="form-label">Número de Placa</label>
                <input type="text" name="plate_number" id="plate_number" class="form-control" value="<?php echo e($cita->plate_number); ?>" required>
            </div>
            <div class="mb-3">
                <label for="mileage" class="form-label">Kilometraje</label>
                <input type="number" name="mileage" id="mileage" class="form-control" value="<?php echo e($cita->mileage); ?>" required>
            </div>
            <div class="mb-3">
                <label for="service_type" class="form-label">Tipo de Servicio</label>
                <input type="text" name="service_type" id="service_type" class="form-control" value="<?php echo e($cita->service_type); ?>" required>
            </div>
            <div class="mb-3">
                <label for="suggested_date" class="form-label">Fecha Sugerida</label>
                <input type="date" name="suggested_date" id="suggested_date" class="form-control" value="<?php echo e($cita->suggested_date); ?>" required>
            </div>
            <div class="mb-3">
                <label for="suggested_time" class="form-label">Hora Sugerida</label>
                <input type="time" name="suggested_time" id="suggested_time" class="form-control" value="<?php echo e($cita->suggested_time); ?>" required>
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label">Comentarios</label>
                <textarea name="comments" id="comments" class="form-control"><?php echo e($cita->comments); ?></textarea>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/citas/edit.blade.php ENDPATH**/ ?>