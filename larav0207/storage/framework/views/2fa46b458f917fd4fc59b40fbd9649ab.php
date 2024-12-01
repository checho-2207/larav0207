

<?php $__env->startSection('title', 'Crear Cambio de Repuesto'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Crear Cambio de Repuesto</h1>
    <form action="<?php echo e(route('cambio_repuestos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" required><br><br>

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="material">Material:</label>
        <input type="text" name="material" id="material" required><br><br>

        <label for="mantenimiento_id">Mantenimiento:</label>
        <input type="number" name="mantenimiento_id" id="mantenimiento_id" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="<?php echo e(route('cambio_repuestos.index')); ?>">Volver</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/cambio_repuestos/create.blade.php ENDPATH**/ ?>