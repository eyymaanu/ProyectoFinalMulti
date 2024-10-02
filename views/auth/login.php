<?php $content = 'base.php'; ?>

<h1>Iniciar Sesión</h1>

<form action="../proyectofinalmulti/controllers/loginControlador.php" method="POST"> <!-- Asegúrate de la ruta correcta -->
    <div class="form-group">
        <label for="usuario">Nombre de Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" required>
    </div>
    <div class="form-group">
        <label for="contrasena">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
    </div>
    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
