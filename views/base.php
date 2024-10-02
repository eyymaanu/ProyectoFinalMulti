<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Iniciar la sesión solo si no hay una activa
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.min.css"> <!-- Usar versión minificada -->
    <title>Biblioteca</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php?page=consumidor/catalogo">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['usu_role']) && $_SESSION['usu_role'] === 1): ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=admin/dashboard">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=admin/RegistrarUsuario">Registrar Usuario</a>
                </li>
                <?php endif; ?>



                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=consumidor/catalogo">Catálogo</a>
                </li>

                <?php if (isset($_SESSION['usu_codigo'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=auth/logout">Cerrar Sesión</a>
                </li>
                <?php else: ?>
                    
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=auth/login">Iniciar Sesión</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?php include($content); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>