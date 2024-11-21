<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Mantenimiento</title>
</head>
<body>
    <h1>Crear Mantenimiento</h1>

    <form action="{{ route('mantenimientos.store') }}" method="POST">
        @csrf
        <label>Tipo de Mantenimiento:</label>
        <input type="text" name="type_maintenance" required><br>

        <label>Fecha de Inicio:</label>
        <input type="datetime-local" name="date_start" required><br>

        <label>Fecha de Fin:</label>
        <input type="datetime-local" name="date_end" required><br>

        <label>Garantía:</label>
        <select name="warranty" required>
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select><br>

        <label>ID de Solicitud:</label>
        <input type="number" name="solicitud_id" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
