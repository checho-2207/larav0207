<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cita</title>
    <style>
        /* Fondo general de la página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2C2C2C; /* Gris oscuro */
            color: #fff; /* Texto blanco */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            padding: 20px;
        }

        /* Título */
        h1 {
            color: #FFD700; /* Amarillo */
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Contenedor del formulario */
        form {
            background-color: #3A3A3A; /* Gris más oscuro */
            border: 2px solid #FFD700; /* Borde amarillo */
            border-radius: 10px;
            padding: 25px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Sombra para profundidad */
        }

        /* Etiquetas */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #FFD700; /* Amarillo */
        }

        /* Campos de entrada */
        input[type="datetime-local"],
        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #FFD700; /* Borde amarillo */
            border-radius: 5px;
            background-color: #2C2C2C; /* Fondo gris oscuro */
            color: #fff; /* Texto blanco */
        }

        /* Botón */
        button[type="submit"] {
            background-color: #FFD700; /* Amarillo */
            color: #2C2C2C; /* Texto gris oscuro */
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #FFC107; /* Amarillo más claro al pasar el mouse */
        }
    </style>
</head>
<body>
    <h1>Crear Cita</h1>

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf
        <label for="date">Fecha y Hora:</label>
        <input id="date" type="datetime-local" name="date" required>

        <label for="description">Descripción:</label>
        <input id="description" type="text" name="description" required>

        <label for="status">Estado:</label>
        <input id="status" type="text" name="status" required>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>

