@extends('layouts.app')

@section('title', 'Detalle de Cambio de Repuesto')

@section('content')
    <h1>Cambio de Repuesto #{{ $cambioRepuesto->id }}</h1>
    <p><strong>Stock:</strong> {{ $cambioRepuesto->stock }}</p>
    <p><strong>Nombre:</strong> {{ $cambioRepuesto->name }}</p>
    <p><strong>Material:</strong> {{ $cambioRepuesto->material }}</p>
    <p><strong>Mantenimiento:</strong> {{ $cambioRepuesto->mantenimiento->id ?? 'No asignado' }}</p>
    <a href="{{ route('cambio_repuestos.index') }}">Volver</a>
@endsection
