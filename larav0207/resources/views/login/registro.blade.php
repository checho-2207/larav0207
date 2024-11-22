<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Taller Mecánico</title>
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
            background-color: rgba(0, 0, 0, 0.6); /* Superposición oscura */
            z-index: 1;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .register-box {
            background-color: rgba(68, 68, 68, 0.9); /* Fondo oscuro */
            border: 2px solid #ffbb00; /* Bordes dorados */
            border-radius: 10px;
            padding: 20px;
            width: 280px;  /* Ancho reducido */
            max-height: 500px; /* Altura aumentada para incluir confirmación de contraseña */
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            overflow-y: auto;  /* Muestra la barra de desplazamiento cuando el contenido excede */
        }

        h1 {
            font-size: 22px;  /* Tamaño de fuente ajustado */
            color: #ffbb00;
            margin-bottom: 15px;  /* Menor espacio en el margen inferior */
        }

        label {
            display: block;
            margin-top: 8px;  /* Margen reducido */
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;  /* Menos padding para reducir el largo */
            margin-top: 5px;  /* Espacio más pequeño entre los elementos */
            margin-bottom: 12px;  /* Espacio más pequeño entre los elementos */
            border: 1px solid #ffbb00;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 14px;
            box-shadow: inset 0 0 5px rgba(255, 187, 0, 0.4);
        }

        button {
            width: 100%;
            padding: 10px;  /* Menos padding para el botón */
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

        input[type="checkbox"] {
            margin-top: 10px;
        }

        input[type="checkbox"]:checked {
            background-color: #ffbb00;
        }

        /* Estilos para la barra de desplazamiento personalizada */
        .register-box::-webkit-scrollbar {
            width: 8px;  /* Ancho de la barra de desplazamiento */
        }

        .register-box::-webkit-scrollbar-track {
            background: #444;  /* Fondo del track de la barra de desplazamiento */
            border-radius: 10px;
        }

        .register-box::-webkit-scrollbar-thumb {
            background: #ffbb00;  /* Color del thumb de la barra */
            border-radius: 10px;
            border: 2px solid #444;  /* Bordes del thumb */
        }

        .register-box::-webkit-scrollbar-thumb:hover {
            background: #ffaa00;  /* Color del thumb cuando se pasa el mouse */
        }

        @media (max-width: 600px) {
            .register-box {
                width: 90%;
                padding: 20px;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="register-box">
            <h1>Registro Cliente</h1>
            <form action="/registro" method="POST">
                <!-- Información personal -->
                <label for="nombre">Nombre </label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" required>

                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>

                <!-- Confirmación de Contraseña -->
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>

                <!-- Preferencias de servicio -->
                <label for="servicio">Tipo de Usuario</label>
                <select id="servicio" name="servicio" required>
                    <option value="Usuario">Usuario</option>
                    <option value="Vendedor">Vendedor</option>
                </select>

                <!-- Términos y condiciones -->
                <label>
                    <input type="checkbox" name="terminos" required> Acepto los términos y condiciones
                </label>

                <!-- Botón de registro -->
                <button type="submit">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>
