@extends('layouts.app')

@section('title', 'Lista de Facturas')

@section('content')
    <h1>Facturas</h1>
    <a href="{{ route('facturas.create') }}">Crear Factura</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Detalles</th>
                <th>Fecha</th>
                <th>Mantenimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($facturas as $factura)
            <tr>
                <td>{{ $factura->id }}</td>
                <td>{{ $factura->details }}</td>
                <td>{{ $factura->date }}</td>
                <td>{{ $factura->mantenimiento->id ?? 'No asignado' }}</td>
                <td>
                    <a href="{{ route('facturas.show', $factura->id) }}">Ver</a>
                    <a href="{{ route('facturas.edit', $factura->id) }}">Editar</a>
                    <form action="{{ route('facturas.destroy', $factura->id) }}" method="POST" style="display:inline;">
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
