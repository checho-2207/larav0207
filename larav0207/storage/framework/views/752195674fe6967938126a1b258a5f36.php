<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <label>Correo</label>
        <input type="email" name="Correo" required>

        <label>Contraseña</label>
        <input type="password" name="password" required>

        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/aut/login.blade.php ENDPATH**/ ?>