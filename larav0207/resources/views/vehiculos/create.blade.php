@extends('layouts.app')

@section('title', 'Crear Vehículo')

@section('content')
    <h1>Crear Vehículo</h1>
    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <label for="model">Modelo:</label>
        <input type="text" name="model" id="model" required><br><br>

        <label for="color">Color:</label>
        <input type="text" name="color" id="color" required><br><br>

        <label for="mileage">Millaje:</label>
        <input type="text" name="mileage" id="mileage" required><br><br>

        <label for="make">Marca:</label>
        <input type="text" name="make" id="make" required><br><br>

        <label for="plate">Placa:</label>
        <input type="text" name="plate" id="plate" required><br><br>

        <label for="mantenimiento_id">Mantenimiento:</label>
        <input type="number" name="mantenimiento_id" id="mantenimiento_id" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('vehiculos.index') }}">Volver</a>
@endsection
