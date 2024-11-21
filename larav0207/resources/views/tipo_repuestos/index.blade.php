@extends('layouts.app')

@section('title', 'Lista de Tipo de Repuestos')

@section('content')
    <h1>Tipo de Repuestos</h1>
    <a href="{{ route('tipo_repuestos.create') }}">Registrar Tipo de Repuesto</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Total</th>
                <th>Proveedor</th>
                <th>Cambio de Repuesto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipoRepuestos as $tipoRepuesto)
            <tr>
                <td>{{ $tipoRepuesto->id }}</td>
                <td>{{ $tipoRepuesto->name }}</td>
                <td>{{ $tipoRepuesto->make }}</td>
                <td>{{ $tipoRepuesto->total }}</td>
                <td>{{ $tipoRepuesto->proveedor->name }}</td>
                <td>{{ $tipoRepuesto->cambioRepuesto->name }}</td>
                <td>
                    <a href="{{ route('tipo_repuestos.show', $tipoRepuesto->id) }}">Ver</a>
                    <a href="{{ route('tipo_repuestos.edit', $tipoRepuesto->id) }}">Editar</a>
                    <form action="{{ route('tipo_repuestos.destroy', $tipoRepuesto->id) }}" method="POST" style="display:inline;">
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
