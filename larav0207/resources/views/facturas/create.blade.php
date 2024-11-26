
    <h1>Crear Factura</h1>
    <form action="{{ route('facturas.store') }}" method="POST">
        @csrf
        <label for="details">Detalles:</label>
        <input type="text" name="details" id="details" required><br><br>

        <label for="date">Fecha:</label>
        <input type="datetime-local" name="date" id="date" required><br><br>

        <label for="mantenimiento_id">Mantenimiento:</label>
        <input type="number" name="mantenimiento_id" id="mantenimiento_id" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('facturas.index') }}">Volver</a>
