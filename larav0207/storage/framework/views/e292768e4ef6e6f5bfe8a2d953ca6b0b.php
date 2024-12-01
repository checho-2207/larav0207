<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Solicitudes de Servicios</title>
</head>
<body>
    <h1>Lista de Solicitudes de Servicios</h1>
    <a href="<?php echo e(route('solicitud_servicios.create')); ?>">Crear Solicitud de Servicio</a>

    <?php if(session('success')): ?>
        <div><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <ul>
        <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                Usuario ID: <?php echo e($solicitud->usuario->names); ?> - Cita ID: <?php echo e($solicitud->cita->description); ?>

                <a href="<?php echo e(route('solicitud_servicios.show', $solicitud)); ?>">Ver</a>
                <a href="<?php echo e(route('solicitud_servicios.edit', $solicitud)); ?>">Editar</a>
                <form action="<?php echo e(route('solicitud_servicios.destroy', $solicitud)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/solicitud_servicios/index.blade.php ENDPATH**/ ?>