@extends('layouts.app')

@section('title', 'Crear Cambio de Repuesto')

@section('content')
    <h1>Crear Cambio de Repuesto</h1>
    <form action="{{ route('cambio_repuestos.store') }}" method="POST">
        @csrf
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" required><br><br>

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="material">Material:</label>
        <input type="text" name="material" id="material" required><br><br>

        <label for="mantenimiento_id">Mantenimiento:</label>
        <input type="number" name="mantenimiento_id" id="mantenimiento_id" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('cambio_repuestos.index') }}">Volver</a>
@endsection
