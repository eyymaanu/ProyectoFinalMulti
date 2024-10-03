<?php $content = 'base.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Administrador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos para el dashboard */
        .dashboard-container {
            margin-top: 50px;
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
        }

        /* Estilos para los botones de acción */
        .dashboard-btn {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        /* Sombra y espaciado en las tarjetas */
        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container dashboard-container">
    <div class="row">
        <div class="col-md-12 dashboard-header">
            <h1>Panel de Control del Administrador</h1>
            <p>Bienvenido, Admin. Aquí puedes gestionar las funciones principales de la biblioteca.</p>
        </div>
    </div>

    <div class="row">
        <!-- Botón para registrar usuario -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Registrar Usuario</h4>
                    <p class="card-text">Añadir un nuevo usuario al sistema.</p>
                    <a href="index.php?page=admin/RegistrarUsuario" class="btn btn-primary dashboard-btn">Registrar Usuario</a>
                </div>
            </div>
        </div>

        <!-- Botón para agregar libro -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Agregar Libro</h4>
                    <p class="card-text">Añadir un nuevo libro a la biblioteca.</p>
                    <a href="index.php?page=admin/AgregarLibro" class="btn btn-success dashboard-btn">Agregar Libro</a>
                </div>
            </div>
        </div>

        <!-- Botón para gestionar autores -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Gestionar Autores</h4>
                    <p class="card-text">Administrar la lista de autores.</p>
                    <a href="index.php?page=admin/gestionarAutor" class="btn btn-info dashboard-btn">Gestionar Autores</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Botón para prestar libro -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Prestarmos de los Libros</h4>
                    <p class="card-text">Gestionar el préstamo de libros a los usuarios.</p>
                    <a href="index.php?page=admin/PrestarLibro" class="btn btn-warning dashboard-btn">Prestar Libro</a>
                </div>
            </div>
        </div>

        <!-- Botón para devolver libro -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Devolver Libro</h4>
                    <p class="card-text">Registrar la devolución de libros prestados.</p>
                    <a href="index.php?page=admin/DevolverLibro" class="btn btn-danger dashboard-btn">Libros devolvidos</a>
                </div>
            </div>
        </div>

        <!-- Botón para reservar libro -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Libros Reservados</h4>
                    <p class="card-text">Gestion de la reserva de los libros de los usuarios.</p>
                    <a href="index.php?page=admin/ReservarLibro" class="btn btn-secondary dashboard-btn">Reservas de Libros</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
