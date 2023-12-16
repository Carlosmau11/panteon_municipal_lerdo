<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panteon Municipal</title>
    <style>
        /* Estilos generales del fondo y la página */
        body {
            background-image: url('../../public/img/Foto Panteon4.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            opacity: 0;
            /* Inicialmente, la página está oculta */
            transition: opacity 1s ease;
            /* Animación para mostrar la página */
        }

        /* Mostrar la página con una opacidad de 1 al cargar */
        body.loaded {
            opacity: 1;
        }

        /* Estilos del contenedor principal */
        #container {
            width: 500px;
            /* Aumentamos el ancho del container a 400px */
            background-color: rgba(255, 255, 255, 0.815);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            transform: scale(1);
            transition: transform 0.3s ease-in-out;
        }

        /* Estilos del título del formulario */
        h1 {
            text-align: center;
            color: #6B0000;
        }


        /* Estilos de las etiquetas de los campos de entrada */
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            text-align: left;
            /* Alinea el texto del label a la izquierda */
        }

        /* Estilos de los campos de entrada de texto y contraseña */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            /* Agregamos espacio en la parte inferior de los campos de entrada */
            margin-left: -8px;
            /* Movemos ligeramente los campos hacia la izquierda */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Estilos del botón de inicio de sesión */
        input[type="submit"] {
            background-color: #6B0000;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
            transform: translateY(30px);
            opacity: 0;
            transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
        }

        /* Estilos al pasar el mouse sobre el botón de inicio de sesión */
        input[type="submit"]:hover {
            background-color: #800000;
        }



        /* Estilos de la imagen del municipio (aumentada) */
        #municipio-image {
            display: block;
            margin: 0 auto;
            width: 350px;
            /* Aumentamos el ancho de la imagen a 250px */
        }

        /* Aplicar animaciones cuando el formulario se carga */
        #container.loaded {
            transform: scale(1);
        }

        input[type="text"].loaded,
        input[type="password"].loaded,
        input[type="submit"].loaded,
        #forgot-password.loaded {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="loaded">
    <div id="container">
        <!-- Título del formulario -->
        <h1>Panteon Municipal</h1>
        <!-- Imagen del municipio -->
        <img src="../../public/img/centenario2.png" alt="" width="225" height="225">
        <!-- Formulario de inicio de sesión -->
        <form action="../model/login.php" method="post" id="login-form">
            <!-- Etiqueta para el campo de usuario -->
            <label for="nombre_usuario">Usuario:</label>
            <!-- Campo de entrada de texto para el usuario -->
            <input type="text" id="nombre_usuario" name="nombre_usuario" required class="loaded">
            <!-- Etiqueta para el campo de contraseña -->
            <label for="contrasena">Contraseña:</label>
            <!-- Campo de entrada de contraseña -->
            <input type="password" id="contrasena" name="contrasena" required class="loaded">
            <!-- Botón de inicio de sesión -->
            <input type="submit" value="Iniciar Sesión" class="loaded">
        </form>
    </div>
</body>

</html>