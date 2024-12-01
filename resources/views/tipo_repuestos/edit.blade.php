@extends('layouts.app')

@section('title', 'Editar Tipo de Repuesto')

@section('content')
    <h1>Editar Tipo de Repuesto</h1>
    <form action="{{ route('tipo_repuestos.update', $tipoRepuesto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $tipoRepuesto->name }}" required><br><br>

        <label for="make">Marca:</label>
        <input type="text" name="make" id="make" value="{{ $tipoRepuesto->make }}" required><br><br>

        <label for="total">Total:</label>
        <input type="number" name="total" id="total" value="{{ $tipoRepuesto->total }}" required><br><br>

        <label for="proveedor_id">Proveedor:</label>
        <select name="proveedor_id" id="proveedor_id" required>
            @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}" {{ $proveedor->id == $tipoRepuesto->proveedor_id ? 'selected' : '' }}>{{ $proveedor->name }}</option>
            @endforeach
        </select><br><br>

        <label for="cambio_id">Cambio de Repuesto:</label>
        <select name="cambio_id" id="cambio_id" required>
            @foreach($cambioRepuestos
