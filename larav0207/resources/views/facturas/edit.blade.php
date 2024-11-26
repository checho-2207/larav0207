
    <h1>Editar Factura</h1>
    <form action="{{ route('facturas.update', $factura->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="details">Detalles:</label>
        <input type="text" name="details" id="details" value="{{ $factura->details }}" required><br><br>

        <label for="date">Fecha:</label>
        <input type="datetime-local" name="date" id="date" value="{{ $factura->date }}" required><br><br>

        <label for="mantenimiento_id">Mantenimiento:</label>
        <input type="number" name="mantenimiento_id" id="mantenimiento_id" value="{{ $factura->mantenimiento_id }}" required><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('facturas.index') }}">Volver</a>

