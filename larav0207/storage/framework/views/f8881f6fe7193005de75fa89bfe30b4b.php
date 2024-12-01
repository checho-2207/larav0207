

<?php $__env->startSection('title', 'Lista de Cambio de Repuestos'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Cambio de Repuestos</h1>
    <a href="<?php echo e(route('cambio_repuestos.create')); ?>">Crear Cambio de Repuesto</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Stock</th>
                <th>Nombre</th>
                <th>Material</th>
                <th>Mantenimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cambioRepuestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cambioRepuesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cambioRepuesto->id); ?></td>
                <td><?php echo e($cambioRepuesto->stock); ?></td>
                <td><?php echo e($cambioRepuesto->name); ?></td>
                <td><?php echo e($cambioRepuesto->material); ?></td>
                <td><?php echo e($cambioRepuesto->mantenimiento->id ?? 'No asignado'); ?></td>
                <td>
                    <a href="<?php echo e(route('cambio_repuestos.show', $cambioRepuesto->id)); ?>">Ver</a>
                    <a href="<?php echo e(route('cambio_repuestos.edit', $cambioRepuesto->id)); ?>">Editar</a>
                    <form action="<?php echo e(route('cambio_repuestos.destroy', $cambioRepuesto->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/cambio_repuestos/index.blade.php ENDPATH**/ ?>