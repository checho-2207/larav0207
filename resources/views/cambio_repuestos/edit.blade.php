@extends('layouts.app')

@section('title', 'Editar Cambio de Repuesto')

@section('content')
    <h1>Editar Cambio de Repuesto</h1>
    <form action="{{ route('cambio_repuestos.update', $cambioRepuesto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="{{ $cambioRepuesto->stock }}" required><br><br>

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $cambioRepuesto->name }}" required><br><br>

        <label for="material">Material:</label>
        <input type="text" name="material" id="material" value="{{ $cambioRepuesto->material }}" required><br><br>

        <label for="mantenimiento_id">Mantenimiento:</label>
        <input type="number" name="mantenimiento_id" id="mantenimiento_id" value="{{ $cambioRepuesto->mantenimiento_id }}" required><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('cambio_repuestos.index') }}">Volver</a>
@endsection
