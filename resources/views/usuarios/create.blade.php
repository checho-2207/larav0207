<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="names" required><br>
        
        <label>Identificación:</label>
        <input type="number" name="ide" required><br>
        
        <label>Número:</label>
        <input type="number" name="number" required><br>
        
        <label>Dirección:</label>
        <input type="text" name="adress" required><br>
        
        <label>Email:</label>
        <input type="email" name="email" required><br>
        
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>
        
        <label>Confirmar Contraseña:</label>
        <input type="password" name="password_confirmation" required><br>
        
        <label>Rol:</label>
        <select name="rol">
            <option value="Usuario">Usuario</option>
            <option value="Vendor">Vendedor</option>
        </select><br>
        
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
