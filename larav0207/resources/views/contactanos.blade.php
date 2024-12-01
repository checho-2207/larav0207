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
            background-color: #0A0A0A;
            color: #333;
        }

        /* Sección de mapa */
        .map-section {
            position: relative;
            height: 400px;
            background-image: url('{{ asset('images/mapa.jpg') }}'); /* Ruta de la imagen de fondo */
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
