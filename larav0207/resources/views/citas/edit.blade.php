<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cita</title>
</head>
<body>
    <h1>Editar Cita</h1>

    <form action="{{ route('citas.update', $cita) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Fecha y Hora:</label>
        <input type="datetime-local" name="date" value="{{ $cita->date }}" required><br>

        <label>Descripción:</label>
        <input type="text" name="description" value="{{ $cita->description }}" required><br>

        <label>Estado:</label>
        <input type="text" name="status" value="{{ $cita->status }}" required><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
