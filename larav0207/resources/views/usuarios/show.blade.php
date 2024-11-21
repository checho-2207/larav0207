<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
</head>
<body>
    <h1>Detalles del Usuario</h1>

    <p>Nombre: {{ $usuario->names }}</p>
    <p>Identificación: {{ $usuario->ide }}</p>
    <p>Número: {{ $usuario->number }}</p>
    <p>Dirección: {{ $usuario->adress }}</p>
    <p>Email: {{ $usuario->email }}</p>
    <p>Rol: {{ $usuario->rol }}</p>

    <a href="{{ route('usuarios.index') }}">Volver a la lista</a>
</body>
</html>
