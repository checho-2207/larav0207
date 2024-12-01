<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Solicitud de Servicio</title>
</head>
<body>
    <h1>Crear Solicitud de Servicio</h1>

    <form action="<?php echo e(route('solicitud_servicios.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Usuario:</label>
        <select name="usuario_id" required>
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($usuario->id); ?>"><?php echo e($usuario->names); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <label>Cita:</label>
        <select name="citas_id" required>
            <?php $__currentLoopData = $citas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($cita->id); ?>"><?php echo e($cita->description); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/solicitud_servicios/create.blade.php ENDPATH**/ ?>