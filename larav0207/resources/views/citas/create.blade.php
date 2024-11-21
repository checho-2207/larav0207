<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Cita</title>
</head>
<body>
    <h1>Crear Cita</h1>

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf
        <label>Fecha y Hora:</label>
        <input type="datetime-local" name="date" required><br>

        <label>Descripción:</label>
        <input type="text" name="description" required><br>

        <label>Estado:</label>
        <input type="text" name="status" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
