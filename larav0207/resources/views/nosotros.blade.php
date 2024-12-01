<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Vamotriz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-black: #0A0A0A;
            --secondary-black: #1A1A1A;
            --accent-yellow: #FFD700;
            --light-yellow: #FFF700;
            --dark-yellow: #DAA520;
            --text-color: #F0F0F0;
        }

        body {
            background-color: var(--secondary-black);
            color: var(--text-color);
            font-family: Arial, sans-serif;
        }
        .intro {
    background-color: var(--primary-black);
    color: var(--accent-yellow);
    padding: 50px;
    text-align: center;
    margin-top: 50px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
}

.intro h1 {
    font-size: 36px;
    font-weight: bold;
}


        

        .section {
            margin: 40px auto;
            padding: 20px;
            max-width: 1200px;
            background-color: var(--secondary-black);
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
        }

        .text-content h2 {
            color: var(--accent-yellow);
            margin-bottom: 15px;
        }

        .text-content p, .text-content ul {
            text-align: justify;
            margin-bottom: 20px;
        }

        .values-list, .bonds-list {
            padding-left: 20px;
        }

        .values-list li, .bonds-list li {
            margin-bottom: 10px;
        }

        .images-right img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
            border: 2px solid var(--accent-yellow);
        }

        .carousel-inner img {
            height: 400px;
            object-fit: cover;
            
        }

        h2.text-center {
            color: var(--accent-yellow);
            margin-bottom: 20px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: var(--dark-yellow);
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Inicio')
    
    @section('content')
    <section class="intro">
        <h1>Conoce más sobre JAST</h1>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-md-8 text-content">
                <h2>¿Quiénes somos?</h2>
                <p>Somos un taller mecánico con punto físico que brinda servicios a domicilio y en nuestras instalaciones. Ofrecemos soluciones a personas que buscan maximizar su tiempo, utilizando los "tiempos muertos" para realizar mantenimientos o reparaciones necesarias a sus vehículos.</p>
                <h2>Trayectoria y experiencia</h2>
                <p>Contamos con un equipo de trabajo con más de 35 años de experiencia en mecánica automotriz y estudiantes apasionados que aplican innovación y conocimientos prácticos.</p>
                <h2>Misión</h2>
                <p>Maximizar el tiempo de nuestros clientes con servicios personalizados, brindando confianza, seguridad y calidad, apoyándonos en la tecnología y el desarrollo sostenible.</p>
                <h2>Visión</h2>
                <p>Ser líderes del sector automotriz virtual y físico, destacándonos por nuestro constante crecimiento e innovación.</p>
                <h2>Bondades</h2>
                <ul class="bonds-list">
                    <li>Servicios en tu hogar, oficina o en nuestras instalaciones.</li>
                    <li>Plataforma web para agendar y conocer servicios.</li>
                    <li>Atención personalizada y comunicación constante.</li>
                    <li>Trazabilidad de los servicios por correo electrónico.</li>
                </ul>
                <h2>Valores</h2>
                <ul class="values-list">
                    <li>Honestidad</li>
                    <li>Responsabilidad</li>
                    <li>Atención al cliente</li>
                    <li>Comunicación</li>
                </ul>
                <h2>Propósito</h2>
                <p>Brindar soluciones que ahorren tiempo y mejoren el bienestar de nuestros clientes, ofreciendo servicios técnicos confiables y atención al cliente excepcional.</p>
            </div>
            <div class="col-md-4 images-right">
                <img src="https://images.pexels.com/photos/4489734/pexels-photo-4489734.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Frenos">
                <img src="https://images.pexels.com/photos/4488662/pexels-photo-4488662.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Llantas">
                <img src="https://images.pexels.com/photos/27665740/pexels-photo-27665740/free-photo-of-manos-profesional-trabajo-oficio.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Aceite">
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="text-center">Conoce a nuestro equipo de trabajo</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/taller.jpg') }}" class="d-block w-100" alt="Servicio en casa">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/equipo.jpg') }}" class="d-block w-100" alt="Equipo trabajando">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/taller1.jpg') }}" class="d-block w-100" alt="Reparaciones">
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
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
</body>
</html>
