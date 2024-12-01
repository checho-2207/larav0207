<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nombre:</label>
        <input type="text" name="names" value="{{ $usuario->names }}" required><br>
        
        <label>Identificación:</label>
        <input type="number" name="ide" value="{{ $usuario->ide }}" required><br>
        
        <label>Número:</label>
        <input type="number" name="number" value="{{ $usuario->number }}" required><br>
        
        <label>Dirección:</label>
        <input type="text" name="adress" value="{{ $usuario->adress }}" required><br>
        
        <label>Email:</label>
        <input type="email" name="email" value="{{ $usuario->email }}" required><br>
        
        <label>Contraseña (déjalo en blanco si no deseas cambiarlo):</label>
        <input type="password" name="password"><br>
        
        <label>Confirmar Contraseña:</label>
        <input type="password" name="password_confirmation"><br>
        
        <label>Rol:</label>
        <select name="rol">
            <option value="Usuario" {{ $usuario->rol == 'Usuario' ? 'selected' : '' }}>Usuario</option>
            <option value="Vendor" {{ $usuario->rol == 'Vendor' ? 'selected' : '' }}>Vendor</option>
            <option value="Admin" {{ $usuario->rol == 'Admin' ? 'selected' : '' }}>Admin</option>
        </select><br>
        
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
