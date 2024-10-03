<?php $content = 'base.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Autores - Administrador</title>
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
        <h2>Agregar Autor</h2>
        <form action="../proyectofinalmulti/controllers/gestionarAutor.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="aut_nombre" required>
            </div>
            <div class="form-group">
                <label for="Apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="aut_apellido" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar autor</button>
        </form>
    </div>

    <div class="mt-5">
        <h2>Lista de Autores</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
    
                </tr>
            </thead>
            <tbody>
                <?php
                // Suponiendo que ya tienes una conexión a la base de datos y una consulta para obtener los libros
                $autores = []; // Aquí deberías obtener los libros desde la base de datos

                foreach ($autores as $autor) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($autor['aut_nombre']) . '</td>';
                    echo '<td>' . htmlspecialchars($autor['aut_apellido']) . '</td>';
                    echo '</td>
                            <a href="index.php?page=admin/editarAutor&id=' . $autor['id'] . '" class="btn btn-warning btn-sm">Editar</a>
                            <a href="../proyectofinalmulti/controllers/eliminarAutorControlador.php?id=' . $autor['id'] . '" class="btn btn-danger btn-sm">Eliminar</a>
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
