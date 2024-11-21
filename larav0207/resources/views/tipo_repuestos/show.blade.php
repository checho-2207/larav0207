@extends('layouts.app')

@section('title', 'Ver Tipo de Repuesto')

@section('content')
    <h1>Detalles del Tipo de Repuesto</h1>
    <p><strong>ID:</strong> {{ $tipoRepuesto->id }}</p>
    <p><strong>Nombre:</strong> {{ $tipoRepuesto->name }}</p>
    <p><strong>Marca:</strong> {{ $tipoRepuesto->make }}</p>
    <p><strong>Total:</strong> {{ $tipoRepuesto->total }}</p>
    <p><strong>Proveedor:</strong> {{ $tipoRepuesto->proveedor->name }}</p>
    <p><strong>Cambio de Repuesto:</strong> {{ $tipoRepuesto->cambioRepuesto->name }}</p>
    
    <a href="{{ route('tipo_repuestos.index') }}">Volver a la lista</a>
    <a href="{{ route('tipo_repuestos.edit', $tipoRepuesto->id) }}">Editar</a>
    
    <form action="{{ route('tipo_repuestos.destroy', $tipoRepuesto->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
