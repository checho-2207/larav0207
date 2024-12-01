<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0A0A0A;
            color: #F0F0F0;
        }
        .container {
            background-color: #1A1A1A;
            padding: 30px;
            border-radius: 10px;
        }
        h1 {
            color: #FFD700;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-label {
            color: #DAA520;
        }
        .form-control {
            background-color: #0A0A0A;
            color: #F0F0F0;
            border-color: #1A1A1A;
        }
        .form-control:focus {
            background-color: #1A1A1A;
            color: #F0F0F0;
            border-color: #FFD700;
            box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25);
        }
        .btn-success {
            background-color: #DAA520;
            border-color: #FFD700;
            color: #0A0A0A;
            margin-top: 20px;
        }
        .btn-success:hover {
            background-color: #FFD700;
            border-color: #DAA520;
        }
        .mb-3 {
            margin-bottom: 1.5rem;
        }
       
      
        ::-webkit-input-placeholder {
            color: #FFD700;
            opacity: 1;
        }
        ::-moz-placeholder {
            color: #FFD700;
            opacity: 1;
        }
        :-ms-input-placeholder {
            color: #FFD700;
            opacity: 1;
        }
        :-moz-placeholder {
            color: #FFD700;
            opacity: 1;
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Inicio')
    
    @section('content')
    <div class="container mt-5 mb-5">
        <h1>Crear Nueva Cita En JAST</h1>
        <form action="{{ route('citas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">Nombre</label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Ej: Juan" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellidos</label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Ej: Pérez" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Ej: juan.perez@mail.com" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Ej: 123456789" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="Ej: Bogotá" required>
            </div>
            <div class="mb-3">
                <label for="neighborhood" class="form-label">Barrio</label>
                <input type="text" name="neighborhood" id="neighborhood" class="form-control" placeholder="Ej: Chapinero">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Ej: Calle 123 # 45-67">
            </div>
            <div class="mb-3">
                <label for="vehicle_brand" class="form-label">Marca del Vehículo</label>
                <input type="text" name="vehicle_brand" id="vehicle_brand" class="form-control" placeholder="Ej: Toyota" required>
            </div>
            <div class="mb-3">
                <label for="vehicle_model" class="form-label">Modelo del Vehículo</label>
                <input type="text" name="vehicle_model" id="vehicle_model" class="form-control" placeholder="Ej: Corolla" required>
            </div>
            <div class="mb-3">
                <label for="plate_number" class="form-label">Número de Placa</label>
                <input type="text" name="plate_number" id="plate_number" class="form-control" placeholder="Ej: ABC-123" required>
            </div>
            <div class="mb-3">
                <label for="mileage" class="form-label">Kilometraje</label>
                <input type="number" name="mileage" id="mileage" class="form-control" placeholder="Ej: 25000" required>
            </div>
            <div class="mb-3">
                <label for="service_type" class="form-label">Tipo de Servicio</label>
                <input type="text" name="service_type" id="service_type" class="form-control" placeholder="Ej: Cambio de aceite" required>
            </div>
            <div class="mb-3">
                <label for="suggested_date" class="form-label">Fecha Sugerida</label>
                <input type="date" name="suggested_date" id="suggested_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="suggested_time" class="form-label">Hora Sugerida</label>
                <input type="time" name="suggested_time" id="suggested_time" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label">Comentarios</label>
                <textarea name="comments" id="comments" class="form-control" placeholder="Ej: Necesito revisión general"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
    @endsection
</body>
</html>