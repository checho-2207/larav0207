@extends('layouts.app')

@section('title', 'Registrar Tipo de Repuesto')

@section('content')
    <h1>Registrar Tipo de Repuesto</h1>
    <form action="{{ route('tipo_repuestos.store') }}" method="POST">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="make">Marca:</label>
        <input type="text" name="make" id="make" required><br><br>

        <label for="total">Total:</label>
        <input type="number" name="total" id="total" required><br><br>

        <label for="proveedor_id">Proveedor:</label>
        <select name="proveedor_id" id="proveedor_id" required>
            @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}">{{ $proveedor->name }}</option>
            @endforeach
        </select><br><br>

        <label for="cambio_id">Cambio de Repuesto:</label>
        <select name="cambio_id" id="cambio_id" required>
            @foreach($cambioRepuestos as $cambioRepuesto)
                <option value="{{ $cambioRepuesto->id }}">{{ $cambioRepuesto->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Registrar</button>
    </form>
    <a href="{{ route('tipo_repuestos.index') }}">Volver</a>
@endsection
