<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JATS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #535353;
        }
    
        /* Sección Hero */
        .hero {
            position: relative;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }

        .hero video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            filter: brightness(50%);
        }

        .hero h1 {
            font-size: 2.5rem;
            z-index: 1;
        }

        /* Secciones de contenido */
        .section1 {
            padding: 10px 1px;
            text-align: center;
            width: 50%; /* Ajusta el ancho del section al 50% del contenedor */
            height: 10%; /* Ajusta automáticamente la altura según el contenido */
            margin: 20px auto; /* Centra el section horizontalmente */
            padding: 10px; /* Agrega espacio interno */
            display: flex; /* Hace que las imágenes se distribuyan en línea */
            flex-wrap: wrap; /* Permite que las imágenes se ajusten en varias filas si es necesario */
            gap: 15px; /* Espacio entre imágenes */
           
        }
        section{
            color: #ffffff;
           justify-content: center;
           text-align: center;
           padding: 40px;
           /* Oscurecer un poco el video para que el texto resalte más */
        }
        .products, .services {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between; 
        }

        .card {
            flex: 1 1 calc(33.33% - 20px); /* Ocupar un tercio del ancho con espacio entre cartas */
            max-width: calc(33.33% - 20px); /* Limitar el ancho máximo */
            min-width: 200px; /* Ancho mínimo para mantener la legibilidad */
            height: 300px; /* Ajustar altura automáticamente según contenido */
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(to left, #464243, #000);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.5s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            filter: brightness(50%);
          
        }

        .card h3 {
            margin: 10px 0;
            color: #FFD700;
            z-index: 1;
            filter: brightness(1.5);
        }

        .card p {
            color: #ffffff;
            z-index: 1;
            filter: brightness(1.5);
        }

       
.announcement {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    font-family: 'Arial', sans-serif;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);  /* Sombra para mejorar la legibilidad */
}

.announcement h1 {
    font-size: 3rem;
    margin-bottom: 10px;
    color: #f7b800;  /* Color cálido que resalta bien sobre el fondo */
    font-family: 'Cursive', sans-serif;  /* Fuente estilizada */
    filter: brightness(1.5);
}

.announcement p {
    font-size: 1.5rem;
    font-weight: bold;
    color: #ffffff;  /* Mismo color para el subtítulo */
    filter: brightness(1.5);
}
.p{
color: #ffffff;
filter: brightness(1.5);
}

.h5{
    color: #f7b800;
    filter: brightness(1.5);
}
.h2{
    color: #f7b800;
    filter: brightness(1.5);
}

    </style>
</head>
<body>

    @extends('layouts.app')

    @section('title', 'Inicio')
    
    @section('content')
    <!-- Sección Hero -->
    <section class="hero" id="inicio">
        <video autoplay muted loop>
            <source loading="lazy" src="{{  Vite::asset('resources/views/6157787-hd_1920_1080_30fps.mp4')  }}" type="video/mp4">
        </video>
        <div class="announcement">
            <h1>Bienvenidos a JATS</h1>
            <p>Tu taller de confianza</p>
        </div>
    </section>
    <!-- Sección de Bienvenida -->
    <section class="section1" id="bienvenida">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <video class="d-block w-100" autoplay muted loop>
                        <source src="{{  Vite::asset('resources/views/6158135-hd_1920_1080_30fps.mp4')  }}" type="video/mp4">
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5">Bienvenidos</h5>
                        <p class="p">En JATS nos complace ofrecerte productos y servicios de la más alta calidad.</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <video class="d-block w-100" autoplay muted loop>
                        <source src="{{  Vite::asset('resources/views/6157909-hd_1920_1080_30fps.mp4')  }}" type="video/mp4">
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5">Quiénes Somos</h5>
                        <p class="p">Somos un equipo apasionado por la tecnología y la reparación de equipos.</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <video class="d-block w-100" autoplay muted loop>
                        <source src="{{  Vite::asset('resources/views/9606768-uhd_3840_2160_25fps.mp4')  }}" type="video/mp4">
                        Tu navegador no soporta la reproducción de video.
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5">Satisfacción Garantizada</h5>
                        <p class="p">Nuestro compromiso es tu satisfacción total con servicios confiables y de calidad.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        
    </section>

    <!-- Sección de Productos -->
    <section class="section2" id="productos">
        <div class="products">
            <div class="card">
                <video autoplay muted loop>
                    <source src="{{  Vite::asset('resources/views/6158066-hd_1920_1080_30fps.mp4')  }}" type="video/mp4">
                </video>
                <h3>Mantenimiento</h3>
                <p class="p">Limpieza y revisión</p>
            </div>
            <div class="card">
                <video autoplay muted loop>
                    <source src="{{  Vite::asset('resources/views/9606768-uhd_3840_2160_25fps.mp4')  }}" type="video/mp4">
                </video>
                <h3>Reparación</h3>
                <p class="p">Arreglos y cambios de repuestos</p>
            </div>
            <div class="card">
                <video autoplay muted loop>
                    <source src="{{  Vite::asset('resources/views/6161372-hd_1920_1080_30fps.mp4')  }}" type="video/mp4">
                </video>
                <h3>Repuestos</h3>
                <p class="p">Repuestos para diversos equipos</p>
            </div>
        </div>
    </section>
    
    @endsection
</body>
</html>