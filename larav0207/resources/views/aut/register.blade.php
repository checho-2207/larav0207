<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Nombre</label>
        <input type="text" name="Nombre" required>
        
        <label>Apellido</label>
        <input type="text" name="Apellido" required>

        <label>Correo</label>
        <input type="email" name="Correo" required>

        <label>Contraseña</label>
        <input type="password" name="password" required>

        <label>Confirmar Contraseña</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
