<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Iniciar la sesión solo si no hay una activa
}
?>
    <?php if (isset($_SESSION['usu_codigo'])): ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.min.css"> <!-- Usar versión minificada -->
    <title>Biblioteca</title>
    <style>
        /* Estilos personalizados para el navbar */
        .navbar {
            background-color: rgba(0, 74, 173, 0.7); /* Color azul con transparencia */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil debajo del navbar */
            transition: background-color 0.3s ease; /* Transición suave para el fondo */
        }

        .navbar.scrolled {
            background-color: rgba(0, 74, 173, 1); /* Cuando se hace scroll, se quita la transparencia */
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #d1e0ff;
        }
    </style>
</head>

<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="index.php?page=consumidor/catalogo">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                
                <!-- Solo muestra estos enlaces si el usuario tiene rol de administrador (role = 1) -->
                <?php if (isset($_SESSION['usu_role']) && $_SESSION['usu_role'] === 1): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=admin/dashboard">Admin</a>
                    </li>
                    <?php endif; ?>
                    
                    <!-- Catálogo accesible para todos los usuarios -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=consumidor/catalogo">Catálogo</a>
                    </li>
                    
                    <!-- Enlace de cierre de sesión si el usuario está logueado -->
                    <?php if (isset($_SESSION['usu_codigo'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=auth/logout">Cerrar Sesión</a>
                        </li>
                        <!-- Enlace de inicio de sesión si no está logueado -->
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=auth/login">Iniciar Sesión</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
                
                <!-- Contenedor principal -->
                <div class="container mt-5 pt-5"> <!-- Ajusta el margen superior para que el contenido no quede oculto por el navbar -->
                    <?php endif; ?>
                    <?php include($content); ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Script para cambiar la opacidad del navbar al hacer scroll -->
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });
        </script>
</body>

</html>
