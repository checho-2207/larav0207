@extends('layouts.app')

@section('title', 'Detalle de Vehículo')

@section('content')
    <h1>Vehículo #{{ $vehiculo->id }}</h1>
    <p><strong>Modelo:</strong> {{ $vehiculo->model }}</p>
    <p><strong>Color:</strong> {{ $vehiculo->color }}</p>
    <p><strong>Millaje:</strong> {{ $vehiculo->mileage }}</p>
    <p><strong>Marca:</strong> {{ $vehiculo->make }}</p>
    <p><strong>Placa:</strong> {{ $vehiculo->plate }}</p>
    <p><strong>Mantenimiento:</strong> {{ $vehiculo->mantenimiento->id ?? 'No asignado'
