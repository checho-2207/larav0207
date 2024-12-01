@extends('layouts.app')

@section('title', 'Registrar Pago')

@section('content')
    <h1>Registrar Pago</h1>
    <form action="{{ route('pagos.store') }}" method="POST">
        @csrf
        <label for="date">Fecha:</label>
        <input type="datetime-local" name="date" id="date" required><br><br>

        <label for="total">Total:</label>
        <input type="number" name="total" id="total" required><br><br>

        <label for="method">Método de Pago:</label>
        <input type="text" name="method" id="method" required><br><br>

        <label for="factura_id">Factura:</label>
        <input type="number" name="factura_id" id="factura_id" required><br><br>

        <button type="submit">Registrar</button>
    </form>
    <a href="{{ route('pagos.index') }}">Volver</a>
@endsection
