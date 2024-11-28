<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita - Taller Mecánico</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url('https://images.pexels.com/photos/13065690/pexels-photo-13065690.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            color: #fff;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .appointment-box {
            background-color: rgba(68, 68, 68, 0.9);
            border: 2px solid #ffbb00;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            max-height: 500px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            overflow-y: auto;
        }

        h1 {
            font-size: 22px;
            color: #ffbb00;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
        }

        input[type="datetime-local"],
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ffbb00;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 14px;
            box-shadow: inset 0 0 5px rgba(255, 187, 0, 0.4);
        }

        textarea {
            resize: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #ffbb00;
            color: #333;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        button:hover {
            background-color: #ffaa00;
            transform: scale(1.05);
        }

        button:active {
            transform: scale(1);
        }

        @media (max-width: 600px) {
            .appointment-box {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="appointment-box">
            <h1>Agendar Cita</h1>
            <form action="/agendar" method="POST">
                <!-- Fecha -->
                <label for="fecha-hora">Selecciona fecha y hora:</label>
                <input type="datetime-local" id="fecha-hora" name="fecha-hora" required>

                <!-- Descripción -->
                <label for="descripcion">Descripción del Servicio</label>
                <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describe brevemente el servicio requerido" required></textarea>

                <!-- Estado -->
                <label for="estado">Urgencia de la Cita</label>
                <input type="text" id="estado" name="estado" placeholder="Ejemplo: Alta, Media, Baja" required>

                <!-- Botón para Agendar Cita -->
                <button type="submit">Agendar Cita</button>
            </form>
        </div>
    </div>
</body>
</html>
