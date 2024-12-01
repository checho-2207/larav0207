<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
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

        .success-box {
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

        p {
            margin-bottom: 20px;
            color: #fff;
            font-size: 16px;
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
            .success-box {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-box">
            <h1>¡Registro Exitoso!</h1>
            <p>Tu cita ha sido registrada exitosamente. Nos pondremos en contacto contigo pronto para confirmar los detalles.</p>
            <button href='/home'">Volver al Inicio</button>
        </div>
    </div>
</body>
</html>
