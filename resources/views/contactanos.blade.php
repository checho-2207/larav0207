<!DOCTYPE html>
<html lang="en">
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios y Ubicación</title>
    <style>
        /* Estilo general */
        
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #535353;
            color: #333;
        }

        /* Sección de mapa */
        .map-section {
            position: relative;
            height: 400px;
            background-image: url('data:image/png;base64,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'); /* Ruta de la imagen de fondo */
            background-size: cover;
            background-position: center;
        }

        .map-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }

        .map-section .overlay h1 {
            font-size: 36px;
            margin: 0;
            color:#ffff00;
        }

        .map-section .overlay p {
            font-size: 18px;
        }

        /* Contenedor de las tarjetas */
        .cards-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px auto;
            padding: 20px;
            max-width: 1200px;
        }

        /* Tarjeta */
        .card {
            position: relative;
            width: 400px;
            height: 300px;
            background: #202020;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: linear-gradient(to left, #464243, #000);
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        /* Fondo de video */
        .card video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover video {
            opacity: 1;
        }

        /* Contenido de la tarjeta */
        .card-content {
            position: relative;
            z-index: 2;
            color: #fff;
            text-align: center;
        }

        .card-content h3 {
            font-size: 24px;
            margin: 0 0 10px;
            color: #ffff00;
        }

        .card-content p {
            font-size: 16px;
            color: #c7c7c7;
        }
        .video{
            filter: brightness(50%);
        }

      
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Inicio')
    
    @section('content')

    <!-- Sección del mapa -->
    <div class="map-section">
        <div class="overlay">
            <div>
                <h1>Ubica a JAST facilmente</h1>
                <p>Somos una plataforma 100% virtual</p>
            </div>
        </div>
    </div>

    <!-- Sección de tarjetas -->
    <div class="cards-container">
        <!-- Tarjeta 1 -->
        <div class="card">
            <video class="video" autoplay muted loop style>
                <source src="{{  Vite::asset('resources/views/14514414-uhd_3840_2160_25fps.mp4')  }}" type="video/mp4">
                Tu navegador no soporta videos.
            </video>
            <div class="card-content">
                <h3>Contáctenos ahora</h3>
                <p>
                    Movil: 3116314748 <br> 
                    <br>
                    WhatsApp: 3116314748 <br> <br>
                    Fijo: (506) 7095-9924 <br> <br>
                    Correo:Jast@gmail.com
                </p>
            </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="card">
            <video class="video" autoplay muted loop style>
                <source src="{{  Vite::asset('resources/views/4101696-hd_1920_1080_25fps.mp4')  }}" type="video/mp4">
                Tu navegador no soporta videos.
            </video>
            <div class="card-content">
                <h3>Ubicación</h3>
                <p>Contamos con una sede fisica 
                    en la ciudad de Popayán <br>
                    Cr9 #57n-51
                </p>
            </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="card">
            <video class="video" autoplay muted loop style>
                <source src="{{  Vite::asset('resources/views/7565182-uhd_4096_2160_25fps.mp4')  }}" type="video/mp4">
                Tu navegador no soporta videos.
            </video>
            <div class="card-content">
                <h3>Horario</h3>
                <p>
                    L: 8:00 a.m - 5:30 p.m<br>
                    M: 8:00 a.m - 5:30 p.m<br>
                    M: 8:00 a.m - 5:30 p.m<br>
                    J: 8:00 a.m - 5:30 p.m<br>
                    V: 8:00 a.m - 5:30 p.m<br>
                    S: 8:00 a.m - 12:30 p.m<br>
                    D: No contamos con servicios
                </p>
            </div>
        </div>
    </div>

    <script>
        // Reproducción y pausa automática del video al pasar el cursor
        document.querySelectorAll('.card').forEach(card => {
            const video = card.querySelector('video');

            card.addEventListener('mouseenter', () => {
                video.play();
            });

            card.addEventListener('mouseleave', () => {
                video.pause();
                video.currentTime = 0; 
            });
        });
    </script>
@endsection
</body>
</html>
