

<?php $__env->startSection('title', 'Crear Vehículo'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Crear Vehículo</h1>
    <form action="<?php echo e(route('vehiculos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="model">Modelo:</label>
        <input type="text" name="model" id="model" required><br><br>

        <label for="color">Color:</label>
        <input type="text" name="color" id="color" required><br><br>

        <label for="mileage">Millaje:</label>
        <input type="text" name="mileage" id="mileage" required><br><br>

        <label for="make">Marca:</label>
        <input type="text" name="make" id="make" required><br><br>

        <label for="plate">Placa:</label>
        <input type="text" name="plate" id="plate" required><br><br>

        <label for="mantenimiento_id">Mantenimiento:</label>
        <input type="number" name="mantenimiento_id" id="mantenimiento_id" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="<?php echo e(route('vehiculos.index')); ?>">Volver</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/vehiculos/create.blade.php ENDPATH**/ ?>