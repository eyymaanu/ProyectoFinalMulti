<?php $content = 'base.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro - Administrador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            margin-top: 20px;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2>Agregar Nuevo Libro</h2>
        <form action="../proyectofinalmulti/controllers/agregarLibroControlador.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="lib_titulo" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" class="form-control" id="categoria" name="lib_categoria" required>
            </div>
            <div class="form-group">
                <label for="img">Imagen del Libro</label>
                <input type="file" class="form-control-file" id="img" name="lib_img" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad Real</label>
                <input type="number" class="form-control" id="cantidad" name="lib_cantidad_real" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Libro</button>
        </form>
    </div>

    <div class="mt-5">
        <h2>Lista de Libros</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Imagen</th>
                    <th>Cantidad Real</th>
                    <th>Stock Actual</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Suponiendo que ya tienes una conexión a la base de datos y una consulta para obtener los libros
                $libros = []; // Aquí deberías obtener los libros desde la base de datos

                foreach ($libros as $libro) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($libro['lib_titulo']) . '</td>';
                    echo '<td>' . htmlspecialchars($libro['lib_categoria']) . '</td>';
                    echo '<td><img src="' . htmlspecialchars($libro['lib_img']) . '" alt="Imagen de ' . htmlspecialchars($libro['lib_titulo']) . '" width="50"></td>';
                    echo '<td>' . htmlspecialchars($libro['lib_cantidad_real']) . '</td>';
                    echo '<td>' . htmlspecialchars($libro['stock_actual']) . '</td>';
                    echo '<td>
                            <a href="index.php?page=admin/editarLibro&id=' . $libro['id'] . '" class="btn btn-warning btn-sm">Editar</a>
                            <a href="../proyectofinalmulti/controllers/eliminarLibroControlador.php?id=' . $libro['id'] . '" class="btn btn-danger btn-sm">Eliminar</a>
                          </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
