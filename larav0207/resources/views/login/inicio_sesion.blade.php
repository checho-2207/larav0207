<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Taller Mecánico</title>
 <style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)), url('https://images.pexels.com/photos/13065690/pexels-photo-13065690.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    color: #f5f5f5;
}

/* Sombra en el fondo */
body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(3px);
    z-index: 1;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 2;
}

.login-box {
    background: rgba(68, 68, 68, 0.9);
    border: 2px solid #ffbb00;
    border-radius: 10px;
    padding: 30px 20px;
    width: 350px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.6);
    color: #f5f5f5;
    text-align: center;
    position: relative;
    transition: transform 0.3s;
}

/* Agrega un efecto de escala al contenedor */
.login-box:hover {
    transform: scale(1.02);
}

h1 {
    margin-bottom: 20px;
    font-size: 28px;
    font-weight: bold;
    text-transform: uppercase;
    color: #ffbb00;
}

/* Ajuste de labels */
label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
    color: #e0e0e0;
    text-transform: uppercase;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #888888;
    border-radius: 6px;
    background-color: #666666;
    color: #ffffff;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.3);
}

/* Botón con efecto */
button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 6px;
    background-color: #ffbb00;
    color: #333333;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s;
    box-shadow: 0px 4px 10px rgba(255, 187, 0, 0.3);
}

button:hover {
    background-color: #ffaa00;
    transform: scale(1.05);
}

 </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Inicio de Sesión</h1>
            <form>
                <label for="username">Email</label>
                <input type="text" id="username" name="username" placeholder="Ingresa tu email" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>

                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>
