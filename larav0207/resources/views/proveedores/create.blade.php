@extends('layouts.app')

@section('title', 'Registrar Proveedor')

@section('content')
    <h1>Registrar Proveedor</h1>
    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="description">Descripción:</label>
        <input type="text" name="description" id="description" required><br><br>

        <label for="number">Número:</label>
        <input type="number" name="number" id="number" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <button type="submit">Registrar</button>
    </form>
    <a href="{{ route('proveedores.index') }}">Volver</a>
@endsection
