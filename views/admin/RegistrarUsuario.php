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



    <style>
        body {
    background-color: #f8f9fa;
    min-height: 100vh;
    align-items: center;
}

.card {
    border-radius: 1rem;
    border: none;
    
}

.form-control,
.form-select {
    border-radius: 0.5rem;
    border: 1px solid #ced4da;
}

.form-control:focus,
.form-select:focus {
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    border-color: #86b7fe;
}

.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca;
    transform: translateY(-2px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}


    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Formulario de Registro</h2>
                            <form id="registrationForm" action="../proyectofinalmulti/controllers/UsuarioControlador.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required pattern="[A-Za-z\s]+" maxlength="50" aria-label="Nombre">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required pattern="[A-Za-z\s]+" maxlength="50" aria-label="Apellido">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de Usuario" required pattern="[A-Za-z0-9_]+" maxlength="50" aria-label="Nombre de Usuario">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required maxlength="100" aria-label="Correo">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required pattern="\d+" maxlength="15" aria-label="Teléfono">
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="modalidad" name="modalidad" placeholder="Modalidad" required maxlength="50" aria-label="Modalidad">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="number" class="form-control" id="curso" name="curso" placeholder="Curso" required min="1" max="3" aria-label="Curso">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula" required pattern="\d{6,9}" maxlength="9" aria-label="Cédula">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required minlength="8" maxlength="50" aria-label="Contraseña">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Rol:</label>
                                <select class="form-select" id="role" name="role" required aria-label="Rol">
                                    <option value="2">Consumidor</option>
                                    <option value="1">Administrador</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-primary btn-lg" type="submit" id="submitBtn">
                                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                    Registrarse
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
