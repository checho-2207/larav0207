@extends('layouts.app')

@section('title', 'Lista de Proveedores')

@section('content')
    <h1>Proveedores</h1>
    <a href="{{ route('proveedores.create') }}">Registrar Proveedor</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Número</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->name }}</td>
                <td>{{ $proveedor->description }}</td>
                <td>{{ $proveedor->number }}</td>
                <td>{{ $proveedor->email }}</td>
                <td>
                    <a href="{{ route('proveedores.show', $proveedor->id) }}">Ver</a>
                    <a href="{{ route('proveedores.edit', $proveedor->id) }}">Editar</a>
                    <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
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
