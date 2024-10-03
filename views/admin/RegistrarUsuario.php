<?php
// Verificar si el usuario es un administrador

if (!isset($_SESSION['usu_role']) || $_SESSION['usu_role'] !== 1) {
    header("Location: ../proyectofinalmulti/index.php?page=auth/login"); // Redirigir si no es admin
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Registrar Nuevo Usuario</h2>
        <form action="../proyectofinalmulti/controllers/UsuarioControlador.php" method="POST"> <!-- Apuntando a UsuarioControlador.php -->
            <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required pattern="[A-Za-z\s]+" maxlength="50">
            </div>
            <div class="form-group">
                <input type="text" name="apellido" class="form-control" placeholder="Apellido" required pattern="[A-Za-z\s]+" maxlength="50">
            </div>
            <div class="form-group">
                <input type="text" name="usuario" class="form-control" placeholder="Nombre de Usuario" required pattern="[A-Za-z0-9_]+" maxlength="50">
            </div>
            <div class="form-group">
                <input type="email" name="correo" class="form-control" placeholder="Correo" required maxlength="100">
            </div>
            <div class="form-group">
                <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required pattern="\d+" maxlength="15">
            </div>
            <div class="form-group">
                <input type="text" name="modalidad" class="form-control" placeholder="Modalidad" required maxlength="50">
            </div>
            <div class="form-group">
                <input type="number" name="curso" class="form-control" placeholder="Curso" required min="1" max="3">
            </div>
            <div class="form-group">
                <input type="text" name="cedula" class="form-control" placeholder="Cédula" required pattern="\d{6,9}" maxlength="9">
            </div>
            <div class="form-group">
                <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required minlength="8" maxlength="50">
            </div>
            <div class="form-group">
                <label for="role">Rol:</label>
                <select name="role" class="form-control" required>
                    <option value="2">Consumidor</option>
                    <option value="1">Administrador</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Registrar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
