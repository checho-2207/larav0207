@extends('layouts.app')

@section('title', 'Lista de Cambio de Repuestos')

@section('content')
    <h1>Cambio de Repuestos</h1>
    <a href="{{ route('cambio_repuestos.create') }}">Crear Cambio de Repuesto</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Stock</th>
                <th>Nombre</th>
                <th>Material</th>
                <th>Mantenimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cambioRepuestos as $cambioRepuesto)
            <tr>
                <td>{{ $cambioRepuesto->id }}</td>
                <td>{{ $cambioRepuesto->stock }}</td>
                <td>{{ $cambioRepuesto->name }}</td>
                <td>{{ $cambioRepuesto->material }}</td>
                <td>{{ $cambioRepuesto->mantenimiento->id ?? 'No asignado' }}</td>
                <td>
                    <a href="{{ route('cambio_repuestos.show', $cambioRepuesto->id) }}">Ver</a>
                    <a href="{{ route('cambio_repuestos.edit', $cambioRepuesto->id) }}">Editar</a>
                    <form action="{{ route('cambio_repuestos.destroy', $cambioRepuesto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
