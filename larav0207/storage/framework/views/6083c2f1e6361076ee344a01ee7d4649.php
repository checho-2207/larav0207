

<?php $__env->startSection('title', 'Lista de Pagos'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Pagos</h1>
    <a href="<?php echo e(route('pagos.create')); ?>">Registrar Pago</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Método de Pago</th>
                <th>Factura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pagos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pago): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($pago->id); ?></td>
                <td><?php echo e($pago->date); ?></td>
                <td><?php echo e($pago->total); ?></td>
                <td><?php echo e($pago->method); ?></td>
                <td><?php echo e($pago->factura->id ?? 'No asignada'); ?></td>
                <td>
                    <a href="<?php echo e(route('pagos.show', $pago->id)); ?>">Ver</a>
                    <a href="<?php echo e(route('pagos.edit', $pago->id)); ?>">Editar</a>
                    <form action="<?php echo e(route('pagos.destroy', $pago->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/pagos/index.blade.php ENDPATH**/ ?>