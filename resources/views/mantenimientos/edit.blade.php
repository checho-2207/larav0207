<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Mantenimiento</title>
</head>
<body>
    <h1>Editar Mantenimiento</h1>

    <form action="{{ route('mantenimientos.update', $mantenimiento) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Tipo de Mantenimiento:</label>
        <input type="text" name="type_maintenance" value="{{ $mantenimiento->type_maintenance }}" required><br>

        <label>Fecha de Inicio:</label>
        <input type="datetime-local" name="date_start" value="{{ $mantenimiento->date_start }}" required><br>

        <label>Fecha de Fin:</label>
        <input type="datetime-local" name="date_end" value="{{ $mantenimiento->date_end }}" required><br>

        <label>Garantía:</label>
        <select name="warranty" required>
            <option value="1" {{ $mantenimiento->warranty ? 'selected' : '' }}>Sí</option>
            <option value="0" {{ !$mantenimiento->warranty ? 'selected' : '' }}>No</option>
        </select><br>

        <label>ID de Solicitud:</label>
        <input type="number" name="solicitud_id" value="{{ $mantenimiento->solicitud_id }}" required><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
