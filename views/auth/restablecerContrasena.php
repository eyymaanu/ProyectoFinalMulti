<?php
session_start();
// Verifica si hay un token en la URL
if (!isset($_GET['token']) || empty($_GET['token'])) {
    header('Location: ../views/login.php'); // Redirige si no hay token
    exit();
}

$token = $_GET['token'];

// Si hay un mensaje de error o éxito en la sesión, se puede mostrar aquí
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
$success = isset($_SESSION['success']) ? $_SESSION['success'] : '';
unset($_SESSION['error'], $_SESSION['success']); // Limpia los mensajes
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f7fa; /* Fondo suave */
        }
        .container {
            max-width: 400px; /* Ancho máximo */
            margin-top: 100px; /* Espaciado superior */
            padding: 20px;
            background-color: white; /* Fondo blanco */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* Sombra */
        }
        h2 {
            margin-bottom: 30px; /* Espaciado debajo del título */
            color: #007bff; /* Color del título */
        }
        .btn-primary {
            background-color: #007bff; /* Color del botón */
            border: none; /* Sin borde */
            border-radius: 25px; /* Bordes redondeados */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Color en hover */
        }
        .form-group label {
            font-weight: bold; /* Etiquetas en negrita */
        }
        .alert {
            margin-top: 20px; /* Espaciado superior para las alertas */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Restablecer Contraseña</h2>

        <?php if ($error): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
        <?php endif; ?>

        <form action="../../controllers/contrasenaOlvidadaControlador.php" method="POST">
            <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

            <div class="form-group">
                <label for="nueva_contra">Nueva Contraseña</label>
                <input type="password" class="form-control" id="nueva_contra" name="nueva_contra" required>
            </div>

            <div class="form-group">
                <label for="confirmar_contra">Confirmar Nueva Contraseña</label>
                <input type="password" class="form-control" id="confirmar_contra" name="confirmar_contra" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Restablecer Contraseña</button>
        </form>

        <p class="mt-3 text-center">
            <a href="../views/login.php" class="text-primary">Volver a Iniciar Sesión</a>
        </p>
    </div>
</body>
</html>
            