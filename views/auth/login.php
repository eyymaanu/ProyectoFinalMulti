<?php $content = 'base.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Biblioteca</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo del contenedor del login */
        .login-container {
            max-width: 400px; /* Ancho máximo del contenedor */
            margin: 100px auto; /* Centrado vertical y horizontal */
            padding: 30px;
            background-color: #f7f9fc; /* Color de fondo suave */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Sombra */
        }
       

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #007bff; /* Color del título */
        }

        /* Estilos para los inputs */
        .form-control {
            border: none; /* Sin borde */
            border-bottom: 2px solid #007bff; /* Borde inferior */
            border-radius: 0; /* Eliminar bordes redondeados */
            box-shadow: none; /* Sin sombra */
            padding: 10px;
            background-color: #f7f9fc; 

        }

        .form-control:focus {
            outline: none; /* Sin outline */
            box-shadow: none; /* Sin sombra al hacer focus */
            border-bottom: 2px solid #0056b3; /* Color al hacer focus */
            background-color: #f7f9fc; 
        }

        /* Estilo del botón de login */
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 20px; /* Bordes redondeados */
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Centrado del enlace de registro */
        .form-group a {
            text-align: center;
            display: block;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h1 style="text-align: center;">Iniciar Sesión</h1>
    <p style="text-align: center;">Para Iniciar Sesión debes de acercarte a la Biblioteca para Registrarte como Usuario</p>
    
    <form action="../proyectofinalmulti/controllers/loginControlador.php" method="POST"> <!-- Asegúrate de la ruta correcta -->
        <div class="form-group">
            <label for="usuario">Nombre de Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
        </div>
        <div class="form-group">
            <a href="../proyectofinalmulti/view/auth/contrasenaOlvidada.php">¿Olvidaste tu contraseña?</a>
        </div>

        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
