@extends('layouts.app')

@section('title', 'Lista de Pagos')

@section('content')
    <h1>Pagos</h1>
    <a href="{{ route('pagos.create') }}">Registrar Pago</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Método de Pago</th>
                <th>Factura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pagos as $pago)
            <tr>
                <td>{{ $pago->id }}</td>
                <td>{{ $pago->date }}</td>
                <td>{{ $pago->total }}</td>
                <td>{{ $pago->method }}</td>
                <td>{{ $pago->factura->id ?? 'No asignada' }}</td>
                <td>
                    <a href="{{ route('pagos.show', $pago->id) }}">Ver</a>
                    <a href="{{ route('pagos.edit', $pago->id) }}">Editar</a>
                    <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" style="display:inline;">
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
