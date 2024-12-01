<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Taller Mecánico</title>
   
</head>
<body>
    

<form action="<?php echo e(route('register')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="ide">Identificación:</label>
        <input type="number" id="ide" name="ide" required>
    </div>
    <div>
        <label for="number">Número:</label>
        <input type="number" id="number" name="number" required>
    </div>
    <div>
        <label for="adress">Dirección:</label>
        <input type="text" id="adress" name="adress" required>
    </div>
    <div>
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
    </div>
</div>
<div>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
</div>
<div>
    <label for="password_confirmation">Confirmar contraseña:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>
</div>
    <div>
        <label for="rol">Rol:</label>
        <select id="rol" name="rol" required>
            <option value="Usuario">Usuario</option>
            <option value="Vendor">Vendor</option>
            <option value="Admin">Admin</option>
        </select>
    
    <button type="submit">Registrarse</button>
</form>
</body><?php /**PATH C:\Users\SERGIO\Documents\GitHub\larav0207\larav0207\resources\views/register.blade.php ENDPATH**/ ?>