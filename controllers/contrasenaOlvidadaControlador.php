<?php

// faltan corregir errores de redireccionamiento y buen diseño 


//----------------//
//---ATENCION-----//
//----------------//



session_start();
include('../models/Auth.php');
include('../config/database.php');

$conn = Database::getConnection(); // Obtener la conexión a la base de datos
$auth = new Auth($conn); // Crear una instancia de la clase Auth

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['token']) && !empty($_POST['token'])) {
        $token = $_POST['token'];

        // Validar el token
        $sql = 'SELECT usu_codigo FROM usuarios WHERE token = :token';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':token', $token);
        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            // Si el token es válido, procesar el cambio de contraseña
            if (isset($_POST['nueva_contra']) && isset($_POST['confirmar_contra'])) {
                $nueva_contra = $_POST['nueva_contra'];
                $confirmar_contra = $_POST['confirmar_contra'];

                // Validar que las contraseñas coincidan
                if ($nueva_contra === $confirmar_contra) {
                    // Hashear la nueva contraseña
                    $hashed_password = password_hash($nueva_contra, PASSWORD_DEFAULT);

                    // Preparar la consulta para actualizar la contraseña y expirar el token
                    $sql = 'UPDATE usuarios SET usu_contrasena = :nueva_contra, token = NULL WHERE token = :token';
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':nueva_contra', $hashed_password);
                    $stmt->bindParam(':token', $token);

                    // Ejecutar la consulta
                    if ($stmt->execute()) {
                        $_SESSION['success'] = 'Contraseña actualizada exitosamente.';
                        header('Location: ../');
                        exit();
                    } else {
                        $_SESSION['error'] = 'Error al actualizar la contraseña. Inténtalo de nuevo.';
                        header('Location: ../views/reset_password.php?token=' . htmlspecialchars($token));
                        exit();
                    }
                } else {
                    $_SESSION['error'] = 'Las contraseñas no coinciden.';
                    header('Location: ../views/reset_password.php?token=' . htmlspecialchars($token));
                    exit();
                }
            }
        } else {
            $_SESSION['error'] = 'Token inválido o ya utilizado.';
            header('Location: ../views/login.php');
            exit();
        }
    } else {
        $_SESSION['error'] = 'Token no recibido.';
        header('Location: ../views/login.php');
        exit();
    }
}
?>
