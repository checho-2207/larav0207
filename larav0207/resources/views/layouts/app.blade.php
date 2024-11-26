<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Optimizado</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Estilos para el header */
        header {
            display: flex; /* Alinea los elementos horizontalmente */
            align-items: center; /* Centra verticalmente los elementos */
            justify-content: space-between; /* Espaciado entre el logo y la navegación */
            padding: 10px 20px; /* Espaciado interno */
            background-color: #f4f4f4; /* Color de fondo */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Sombra sutil para separación */
        }

        /* Logo */
        header img {
            max-height: 50px; /* Tamaño máximo del logo */
            display: block; /* Asegura que se comporte como un bloque */
        }

        /* Navegación */
        nav ul {
            list-style: none; /* Quita los puntos de la lista */
            display: flex; /* Alinea los elementos horizontalmente */
            gap: 15px; /* Espaciado entre enlaces */
            margin: 0; /* Elimina márgenes predeterminados */
            padding: 0; /* Elimina relleno predeterminado */
        }

        nav ul li {
            display: inline-block; /* Asegura alineación horizontal */
        }

        nav ul li a {
            text-decoration: none; /* Quita el subrayado */
            color: #333; /* Color del texto */
            font-weight: bold; /* Texto en negrita */
            font-size: 16px; /* Tamaño del texto */
            transition: color 0.3s; /* Suaviza el cambio de color en hover */
        }

        nav ul li a:hover {
            color: #007bff; /* Color al pasar el cursor */
        }

        /* Botón de inicio de sesión */
        .login-button {
            background-color: #007bff; /* Color de fondo */
            color: white; /* Color del texto */
            border: none; /* Sin borde */
            padding: 10px 15px; /* Relleno interno */
            border-radius: 5px; /* Bordes redondeados */
            font-size: 14px; /* Tamaño del texto */
            cursor: pointer; /* Cambia el cursor al pasar el mouse */
            transition: background-color 0.3s; /* Suaviza el cambio de color en hover */
        }

        .login-button:hover {
            background-color: #0056b3; /* Color al pasar el cursor */
        }

        /* Ícono de usuario */
        .user-icon {
            font-size: 24px; /* Tamaño del ícono */
            color: #007bff; /* Color del ícono */
            margin-left: 15px; /* Espaciado a la izquierda */
            cursor: pointer; /* Cambia el cursor al pasar el mouse */
            transition: color 0.3s; /* Suaviza el cambio de color en hover */
        }

        .user-icon:hover {
            color: #0056b3; /* Color al pasar el cursor */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Logo -->
        <img src="{{ asset('images/logo.jpeg') }}" alt="Logo del sitio">
        
        <!-- Navegación -->
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Agendar cita</a></li>
                <li><a href="#">Factura</a></li>
                <li><button class="login-button">Iniciar Sesión</button></li>
                <li><span class="user-icon material-icons">person</span></li>
            </ul>
        </nav>
    </header>
</body>
</html>

