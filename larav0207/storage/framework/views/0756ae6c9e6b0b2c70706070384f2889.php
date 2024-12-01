
    <h1>Crear Factura</h1>
    <form action="<?php echo e(route('facturas.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="details">Detalles:</label>
        <input type="text" name="details" id="details" required><br><br>

        <label for="date">Fecha:</label>
        <input type="datetime-local" name="date" id="date" required><br><br>

        <label for="mantenimiento_id">Mantenimiento:</label>
        <input type="number" name="mantenimiento_id" id="mantenimiento_id" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="<?php echo e(route('facturas.index')); ?>">Volver</a>
<?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/facturas/create.blade.php ENDPATH**/ ?>