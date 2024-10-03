<?php $content = 'base.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestar Libros</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos para la tabla y el formulario */
        .container {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .table {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Libros Prestados</h1>

    

    <!-- Tabla para mostrar préstamos existentes -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Número de Préstamo</th>
                <th>Fecha de Préstamo</th>
                <th>Código del Usuario</th>
                <th>Cantidad de Libros</th>
                <th>Código del Libro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Aquí deberías incluir la lógica para recuperar los datos de la base de datos
            // Supongamos que tienes un método para obtener todos los préstamos
            $prestamos = []; // Reemplaza esto con la consulta a la base de datos

            foreach ($prestamos as $prestamo) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($prestamo['presc_numero']) . '</td>';
                echo '<td>' . htmlspecialchars($prestamo['pre_fecha']) . '</td>';
                echo '<td>' . htmlspecialchars($prestamo['presc_usu_codigo']) . '</td>';
                echo '<td>' . htmlspecialchars($prestamo['presd_cantidad']) . '</td>';
                echo '<td>' . htmlspecialchars($prestamo['presd_libros_codigo']) . '</td>';
                echo '<td>
                        <a href="index.php?page=admin/EditarPrestamo&presc_numero=' . htmlspecialchars($prestamo['presc_numero']) . '" class="btn btn-warning btn-sm">Editar</a>
                        <a href="../proyectofinalmulti/controllers/prestamoControlador.php?action=eliminar&presc_numero=' . htmlspecialchars($prestamo['presc_numero']) . '" class="btn btn-danger btn-sm">Eliminar</a>
                      </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
