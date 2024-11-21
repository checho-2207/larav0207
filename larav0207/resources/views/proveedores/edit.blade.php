@extends('layouts.app')

@section('title', 'Editar Proveedor')

@section('content')
    <h1>Editar Proveedor</h1>
    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $proveedor->name }}" required><br><br>

        <label for="description">Descripción:</label>
        <input type="text" name="description" id="description" value="{{ $proveedor->description }}" required><br><br>

        <label for="number">Número:</label>
        <input type="number" name="number" id="number" value="{{ $proveedor->number }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $proveedor->email }}" required><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('proveedores.index') }}">Volver</a>
@endsection
