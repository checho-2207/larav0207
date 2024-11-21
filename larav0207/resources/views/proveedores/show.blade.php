@extends('layouts.app')

@section('title', 'Detalles del Proveedor')

@section('content')
    <h1>Proveedor #{{ $proveedor->id }}</h1>
    <p><strong>Nombre:</strong> {{ $proveedor->name }}</p>
    <p><strong>Descripción:</strong> {{ $proveedor->description }}</p>
    <p><strong>Número:</strong> {{ $proveedor->number }}</p>
    <p><strong>Email:</strong> {{ $proveedor->email }}</p>
    <a href="{{ route('proveedores.index') }}">Volver</a>
@endsection
