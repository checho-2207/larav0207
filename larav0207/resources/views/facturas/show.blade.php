
    <h1>Factura #{{ $factura->id }}</h1>
    <p><strong>Detalles:</strong> {{ $factura->details }}</p>
    <p><strong>Fecha:</strong> {{ $factura->date }}</p>
    <p><strong>Mantenimiento:</strong> {{ $factura->mantenimiento->id ?? 'No asignado' }}</p>
    <a href="{{ route('facturas.index') }}">Volver</a>
