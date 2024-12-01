<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
</head>
<body>
    <h1>Detalles del Usuario</h1>

    <p>Nombre: <?php echo e($usuario->names); ?></p>
    <p>Identificación: <?php echo e($usuario->ide); ?></p>
    <p>Número: <?php echo e($usuario->number); ?></p>
    <p>Dirección: <?php echo e($usuario->adress); ?></p>
    <p>Email: <?php echo e($usuario->email); ?></p>
    <p>Rol: <?php echo e($usuario->rol); ?></p>

    <a href="<?php echo e(route('usuarios.index')); ?>">Volver a la lista</a>
</body>
</html>
<?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/usuarios/show.blade.php ENDPATH**/ ?>