@extends('layouts.app')

@section('title', 'Detalles del Pago')

@section('content')
    <h1>Pago #{{ $pago->id }}</h1>
    <p><strong>Fecha:</strong> {{ $pago->date }}</p>
    <p><strong>Total:</strong> {{ $pago->total }}</p>
    <p><strong>Método de Pago:</strong> {{ $pago->method }}</p>
    <p><strong>Factura:</strong> {{ $pago->factura->id ?? 'No asignada' }}</p>
    <a href="{{ route('pagos.index') }}">Volver</a>
@endsection
