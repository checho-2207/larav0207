@extends('layouts.app')

@section('title', 'Editar Pago')

@section('content')
    <h1>Editar Pago</h1>
    <form action="{{ route('pagos.update', $pago->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="date">Fecha:</label>
        <input type="datetime-local" name="date" id="date" value="{{ $pago->date }}" required><br><br>

        <label for="total">Total:</label>
        <input type="number" name="total" id="total" value="{{ $pago->total }}" required><br><br>

        <label for="method">Método de Pago:</label>
        <input type="text" name="method" id="method" value="{{ $pago->method }}" required><br><br>

        <label for="factura_id">Factura:</label>
        <input type="number" name="factura_id" id="factura_id" value="{{ $pago->factura_id }}" required><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('pagos.index') }}">Volver</a>
@endsection
