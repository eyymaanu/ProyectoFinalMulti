<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f8f9fa; /* Color de fondo suave */
        }

        .container {
            max-width: 400px; /* Ancho máximo del contenedor */
            margin-top: 100px; /* Margen superior para centrar el contenedor */
            padding: 20px;
            background-color: white; /* Color de fondo blanco */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra para el contenedor */
        }

        h2 {
            text-align: center; /* Centrar el título */
            margin-bottom: 20px; /* Espaciado debajo del título */
        }

        .message {
            text-align: center; /* Centrar el mensaje */
            margin-bottom: 20px; /* Espaciado debajo del mensaje */
            font-size: 16px; /* Tamaño de fuente */
            line-height: 1.5; /* Espaciado entre líneas */
        }

        .btn-custom {
            width: 100%; /* Botón ocupa todo el ancho */
            padding: 10px; /* Padding para el botón */
            font-size: 16px; /* Tamaño de fuente */
        }

        .alert {
            display: none; /* Inicialmente oculto */
            margin-top: 20px; /* Espacio superior para el mensaje */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Recuperar Contraseña</h2>
        <p class="message">Introduce tu correo electrónico asociado a tu cuenta y recibirás un enlace para restablecer tu contraseña.</p>
        <form id="recoveryForm" action="../../controllers/AuthControlador.php" method="POST">
            <div class="form-group">
                <label for="usu_email">Correo Electrónico:</label>
                <input type="email" id="usu_email" name="usu_email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-custom">Enviar</button>
        </form>

        <!-- Contenedor para el mensaje de éxito/error -->
        <div id="messageContainer" class="alert" role="alert"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>

</html>
