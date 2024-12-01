<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Mantenimientos</title>
</head>
<body>
    <h1>Lista de Mantenimientos</h1>
    <a href="<?php echo e(route('mantenimientos.create')); ?>">Crear Mantenimiento</a>

    <?php if(session('success')): ?>
        <div><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <ul>
        <?php $__currentLoopData = $mantenimientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mantenimiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($mantenimiento->type_maintenance); ?> - <?php echo e($mantenimiento->date_start); ?> - <?php echo e($mantenimiento->date_end); ?> - <?php echo e($mantenimiento->warranty ? 'Sí' : 'No'); ?>

                <a href="<?php echo e(route('mantenimientos.show', $mantenimiento)); ?>">Ver</a>
                <a href="<?php echo e(route('mantenimientos.edit', $mantenimiento)); ?>">Editar</a>
                <form action="<?php echo e(route('mantenimientos.destroy', $mantenimiento)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/mantenimientos/index.blade.php ENDPATH**/ ?>