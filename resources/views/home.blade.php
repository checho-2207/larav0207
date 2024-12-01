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
            background-color: #0A0A0A;
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
/* Seccion de porque nosotros */
.why-us h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
    text-transform: uppercase;
    position: relative;
    display: inline-block;
    color: #FFF700;
}

.why-us h2::after {
    content: "";
    display: block;
    width: 50px;
    height: 2px;
    background-color: #FFF700;
    margin: 10px auto 0;
}

.why-us .description {
    font-size: 16px;
    color: #ffffff;
    margin: 10px 0 20px;
    line-height: 1.6;
}

.why-us .features {
    display: flex;
    justify-content: space-between; /* Esto asegura que las cartas se distribuyan uniformemente */
    gap: 20px;
    flex-wrap: nowrap; /* Evita que las cartas se acomoden en varias filas */
}

.why-us .feature {
    flex: 1 1 calc(33.33% - 20px); /* Cada carta ocupa un tercio del espacio */
    max-width: 33.33%; /* Asegura que las cartas no sobrepasen el 33% del ancho */
    min-width: 200px; /* Mínimo tamaño de las cartas */
    height: 305px;
    width: 320px;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: transform 0.5s;
}

.why-us .feature img {
    width: 60px;
    height: 60px;
    margin-bottom: 15px;
}

.why-us .feature h3 {
    font-size: 18px;
    color: #FFF700;
    margin-bottom: 10px;
}

.why-us .feature p {
    font-size: 14px;
    color: #ffffff;
    line-height: 1.5;
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
           
            <section class="why-us">
                <h2>¿POR QUÉ NOSOTROS?</h2>
                <p class="description">
                    Al ser un taller 100% virtual podemos llegar hasta donde estés, así podremos realizar el mantenimiento a tu auto desde el lugar donde te sientas más cómodo, ya sea en tu casa mientras teletrabajas o en tu oficina.
                </p>
                <p class="description">
                    Te brindamos el apalancamiento de nuestros medios digitales los cuales los podrás utilizar como herramienta para lo que necesites, con una plataforma web donde puedes ver y conocer nuestros servicios, el equipo de trabajo, nuestros testimonios y además agendar los que requieras.
                </p>
                <div class="features">
                    <div class="feature">
                        <img src="https://cdn-icons-png.flaticon.com/512/4549/4549504.png" alt="Teléfono">
                        <h3>Servicio al cliente personalizado y garantizado.</h3>
                        <p>Atendemos y resolvemos cada una de tus inquietudes y dudas, ya sea de nuestros servicios como tal o de algún problema que tengas con tu auto.</p>
                    </div>
                    <div class="feature">
                        <img src="https://cdn-icons-png.flaticon.com/512/4549/4549573.png" alt="Servicios">
                        <h3>Convierte los servicios brindados en una experiencia.</h3>
                        <p>Al realizar los servicios que tu auto necesita con nosotros puedes visualizar e incluso ser parte de los trabajos que se le realizan a tu vehículo si así lo deseas, generando toda una experiencia para ti.</p>
                    </div>
                    <div class="feature">
                        <img src="https://cdn-icons-png.flaticon.com/512/4549/4549682.png" alt="Tiempo">
                        <h3>Ganarás y aprovecharás mejor el tiempo.</h3>
                        <p>Al agendar uno de nuestros servicios iremos hasta la comodidad de tu hogar u oficina, donde podrás recibir un servicio totalmente personalizado y podrás visualizar y hasta aprender de todo lo que se realiza a tu vehículo.</p>
                    </div>
                </div>
            </section>
        
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