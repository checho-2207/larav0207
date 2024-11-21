@extends('layouts.app')

@section('title', 'Lista de Vehículos')

@section('content')
    <h1>Vehículos</h1>
    <a href="{{ route('vehiculos.create') }}">Crear Vehículo</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Millaje</th>
                <th>Marca</th>
                <th>Placa</th>
                <th>Mantenimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->id }}</td>
                <td>{{ $vehiculo->model }}</td>
                <td>{{ $vehiculo->color }}</td>
                <td>{{ $vehiculo->mileage }}</td>
                <td>{{ $vehiculo->make }}</td>
                <td>{{ $vehiculo->plate }}</td>
                <td>{{ $vehiculo->mantenimiento->id ?? 'No asignado' }}</td>
                <td>
                    <a href="{{ route('vehiculos.show', $vehiculo->id) }}">Ver</a>
                    <a href="{{ route('vehiculos.edit', $vehiculo->id) }}">Editar</a>
                    <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display:inline;">
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
