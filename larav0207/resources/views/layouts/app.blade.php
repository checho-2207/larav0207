<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background: #007BFF;
            color: white;
            padding: 10px 20px;
        }
        header h1 {
            margin: 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 20px;
        }
        footer {
            background: #f8f9fa;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <header>
        <h1>Mi Aplicación</h1>
        <nav>
            <a href="{{ route('facturas.index') }}">Facturas</a>
            <a href="#">Opción 2</a>
            <a href="#">Opción 3</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
