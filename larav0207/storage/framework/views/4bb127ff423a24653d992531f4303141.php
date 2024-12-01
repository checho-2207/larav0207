

<?php $__env->startSection('title', 'Lista de Vehículos'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Vehículos</h1>
    <a href="<?php echo e(route('vehiculos.create')); ?>">Crear Vehículo</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Millaje</th>
                <th>Marca</th>
                <th>Placa</th>
                <th>Mantenimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $vehiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($vehiculo->id); ?></td>
                <td><?php echo e($vehiculo->model); ?></td>
                <td><?php echo e($vehiculo->color); ?></td>
                <td><?php echo e($vehiculo->mileage); ?></td>
                <td><?php echo e($vehiculo->make); ?></td>
                <td><?php echo e($vehiculo->plate); ?></td>
                <td><?php echo e($vehiculo->mantenimiento->id ?? 'No asignado'); ?></td>
                <td>
                    <a href="<?php echo e(route('vehiculos.show', $vehiculo->id)); ?>">Ver</a>
                    <a href="<?php echo e(route('vehiculos.edit', $vehiculo->id)); ?>">Editar</a>
                    <form action="<?php echo e(route('vehiculos.destroy', $vehiculo->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/vehiculos/index.blade.php ENDPATH**/ ?>