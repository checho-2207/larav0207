
    <h1>Facturas</h1>
    <a href="<?php echo e(route('facturas.create')); ?>">Crear Factura</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Detalles</th>
                <th>Fecha</th>
                <th>Mantenimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $facturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $factura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($factura->id); ?></td>
                <td><?php echo e($factura->details); ?></td>
                <td><?php echo e($factura->date); ?></td>
                <td><?php echo e($factura->mantenimiento->id ?? 'No asignado'); ?></td>
                <td>
                    <a href="<?php echo e(route('facturas.show', $factura->id)); ?>">Ver</a>
                    <a href="<?php echo e(route('facturas.edit', $factura->id)); ?>">Editar</a>
                    <form action="<?php echo e(route('facturas.destroy', $factura->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/facturas/index.blade.php ENDPATH**/ ?>