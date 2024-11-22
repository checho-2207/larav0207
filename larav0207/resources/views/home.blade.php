<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JATS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #1a1a2e;
        }
        
        .login-button {
            background-color: #e94560;
            color: #fff;
            padding: 6px 7px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .login-button:hover {
            background-color: #c72d4a;
            transform: scale(1.05);
        }

        /* Encabezado */
        header {
            background-color: #000;
            color: #fff;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header img {
            height: 50px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
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
        }

        .card h3 {
            margin: 10px 0;
            color: #fff;
            z-index: 1;
        }

        .card p {
            color: #fff;
            z-index: 1;
        }

        /* Pie de página */
        footer {
            background-color: #535353;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .social-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 10px;
        }

        .social-container a {
            width: 52px;
            height: 52px;
            background-color: rgb(44, 44, 44);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .social-container a:hover {
            transform: scale(1.1);
        }

        .containerOne:hover { background-color: #d62976; }
        .containerTwo:hover { background-color: #00acee; }
        .containerFour:hover { background-color: #128C7E; }

        .social-container a svg {
            width: 24px;
            height: 24px;
            fill: #fff;
            transition: transform 0.3s;
        }

        .social-container a:hover svg {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
      <img src="./Captura de pantalla 2024-11-14 084506.png" alt="Logo del sitio">
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Agendar cita</a></li>
                    <li><a href="#">Factura</a></li>
                    <!-- Botón de inicio de sesión -->
                    <li><button class="login-button">Iniciar Sesión</button></li>
                </ul>
            </nav>
        </header>
    <!-- Sección Hero -->
    <section class="hero" id="inicio">
        <video autoplay muted loop>
            <source src="{{  Vite::asset('resources/views/6157787-hd_1920_1080_30fps.mp4')  }}" type="video/mp4">
        </video>
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
                        <h5>Bienvenidos</h5>
                        <p>En JATS nos complace ofrecerte productos y servicios de la más alta calidad.</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <video class="d-block w-100" autoplay muted loop>
                        <source src="{{  Vite::asset('resources/views/6157909-hd_1920_1080_30fps.mp4')  }}" type="video/mp4">
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Quiénes Somos</h5>
                        <p>Somos un equipo apasionado por la tecnología y la reparación de equipos.</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <video class="d-block w-100" autoplay muted loop>
                        <source src="{{  Vite::asset('resources/views/9606768-uhd_3840_2160_25fps.mp4')  }}" type="video/mp4">
                        Tu navegador no soporta la reproducción de video.
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Satisfacción Garantizada</h5>
                        <p>Nuestro compromiso es tu satisfacción total con servicios confiables y de calidad.</p>
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
                <p>Limpieza y revisión</p>
            </div>
            <div class="card">
                <video autoplay muted loop>
                    <source src="{{  Vite::asset('resources/views/9606768-uhd_3840_2160_25fps.mp4')  }}" type="video/mp4">
                </video>
                <h3>Reparación</h3>
                <p>Arreglos y cambios de repuestos</p>
            </div>
            <div class="card">
                <video autoplay muted loop>
                    <source src="{{  Vite::asset('resources/views/6161372-hd_1920_1080_30fps.mp4')  }}" type="video/mp4">
                </video>
                <h3>Repuestos</h3>
                <p>Repuestos para diversos equipos</p>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section class="section" id="contacto">
        <h2>Contacto</h2>
        <p>Dirección: Calle Principal #123, Ciudad</p>
        <p>Teléfono: +57 123 456 789</p>
        <p>Email: contacto@ejemplo.com</p>
    </section>

    <!-- Pie de página -->
    <footer>
        <div class="social-container">
            <a href="#" class="containerOne">
                <svg class="socialSvg instagramSvg" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path> </svg>
            </a>
            <a href="#" class="containerTwo">
                <svg class="socialSvg twitterSvg" viewBox="0 0 16 16"> <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path> </svg>              
            </a>
            <a href="#" class="containerFour">
                <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path> </svg>
            </a>
        </div>
        <p>&copy; 2024 JATS - Todos los derechos reservados.</p>
    </footer>

</body>
</html>