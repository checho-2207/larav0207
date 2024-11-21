@extends('layouts.app')

@section('title', 'Editar Vehículo')

@section('content')
    <h1>Editar Vehículo</h1>
    <form action="{{ route('vehiculos.update', $vehiculo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="model">Modelo:</label>
        <input type="text" name="model" id="model" value="{{ $vehiculo->model }}" required><br><br>

        <label for="color">Color:</label>
        <input type="text" name="color" id="color" value="{{ $vehiculo->color }}" required><br><br>

        <label for="mileage">Millaje:</label>
        <input type="text" name="mileage" id="mileage" value="{{ $vehiculo->mileage }}" required><br><br>

        <label for="make">Marca:</label>
        <input type="text" name="make" id="make" value="{{ $vehiculo->make }}" required><br><br>

        <label for="plate">Placa:</label>
        <input type="text" name="plate" id="plate" value="{{ $vehiculo->plate }}" required><br><br>

        <label for="mantenimiento_id">Mantenimiento:</label>
        <input type="number" name="mantenimiento_id" id="mantenimiento_id" value="{{ $vehiculo->mantenimiento_id }}" required><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('vehiculos.index') }}">Volver</a>
@endsection
