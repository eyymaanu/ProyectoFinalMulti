<?php $content = 'base.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolver Libros</title>
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
    <h1>Devolver Libros</h1>

    

    <!-- Tabla para mostrar devoluciones existentes -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Número de Devolución</th>
                <th>Fecha de Devolución</th>
                <th>Código del Usuario</th>
                <th>Cantidad de Libros</th>
                <th>Código del Libro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Aquí deberías incluir la lógica para recuperar los datos de la base de datos
            // Supongamos que tienes un método para obtener todos los registros de devolución
            $devoluciones = []; // Reemplaza esto con la consulta a la base de datos

            foreach ($devoluciones as $devolucion) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($devolucion['devo_numero']) . '</td>';
                echo '<td>' . htmlspecialchars($devolucion['devo_fecha']) . '</td>';
                echo '<td>' . htmlspecialchars($devolucion['devo_usu_codigo']) . '</td>';
                echo '<td>' . htmlspecialchars($devolucion['devo_cantidad']) . '</td>';
                echo '<td>' . htmlspecialchars($devolucion['devo_libros_codigo']) . '</td>';
                echo '<td>
                        <a href="index.php?page=admin/EditarDevolucion&devo_numero=' . htmlspecialchars($devolucion['devo_numero']) . '" class="btn btn-warning btn-sm">Editar</a>
                        <a href="../proyectofinalmulti/controllers/devolucionControlador.php?action=eliminar&devo_numero=' . htmlspecialchars($devolucion['devo_numero']) . '" class="btn btn-danger btn-sm">Eliminar</a>
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
