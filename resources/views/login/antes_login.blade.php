<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
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

        .welcome-container {
            text-align: center;
            position: relative;
            z-index: 2;
            background-color: rgba(68, 68, 68, 0.9); /* Fondo oscuro */
            border: 2px solid #ffbb00; /* Bordes dorados */
            border-radius: 15px;
            padding: 30px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 24px;
            color: #ffbb00;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            margin-bottom: 20px;
            color: #fff;
        }

        .buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .buttons a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ffbb00;
            color: #333;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .buttons a:hover {
            background-color: #ffaa00;
            transform: scale(1.05);
        }

        .buttons a:active {
            transform: scale(1);
        }

        @media (max-width: 600px) {
            .welcome-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>¡Que bien que quieras ser uno de nuestros usuarios!</h1>
        <p>Por favor, selecciona una de las opciones para continuar.</p>
        <div class="buttons">
            <a href="#">Registrarse</a>
            <a href="#">Iniciar Sesión</a>
        </div>
    </div>
</body>
</html>
