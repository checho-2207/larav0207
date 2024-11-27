<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Citas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Lista de Citas</h1>
        <a href="{{ route('citas.create') }}" class="btn btn-primary mb-3">Agregar Cita</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <th>Marca de Vehículo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                    <tr>
                        <td>{{ $cita->id }}</td>
                        <td>{{ $cita->first_name }} {{ $cita->last_name }}</td>
                        <td>{{ $cita->email }}</td>
                        <td>{{ $cita->phone }}</td>
                        <td>{{ $cita->city }}</td>
                        <td>{{ $cita->vehicle_brand }}</td>
                        <td>
                            <a href="{{ route('citas.show', $cita->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta cita?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
