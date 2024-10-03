<?php
include('../config/database.php'); // Incluir la configuración de la base de datos
include('../config/encriptar.php'); // Incluir funciones de encriptación

class UsuarioControlador {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    public function register($nombre, $apellido, $correo, $telefono, $modalidad, $curso, $cedula, $role, $contrasena,$usuario) {
        // Encriptar la contraseña
        $contrasenaEncriptada = encriptarCadena($contrasena);

        // Preparar la consulta para insertar el nuevo usuario
        $stmt = $this->db->prepare("INSERT INTO usuarios (usu_nombre, usu_apellido, usu_correo, usu_telefono, usu_modalidad, usu_curso, usu_cedula, usu_role, usu_contrasena,usu_usuario) VALUES (:nombre, :apellido, :correo, :telefono, :modalidad, :curso, :cedula, :role, :contrasena, :usuario)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':modalidad', $modalidad);
        $stmt->bindParam(':curso', $curso);
        $stmt->bindParam(':cedula', $cedula);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':contrasena', $contrasenaEncriptada);
        $stmt->bindParam(':usuario',$usuario); // Bind para la contraseña

        // Ejecutar la consulta y verificar si se registró exitosamente
        return $stmt->execute(); // Retorna el resultado de la ejecución
    }
}

// Manejo de la solicitud de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $telefono = $_POST['telefono'];
    $modalidad = $_POST['modalidad'];
    $curso = $_POST['curso'];
    $cedula = $_POST['cedula'];
    $role = $_POST['role']; // Obtener el rol del formulario
    $contrasena = $_POST['contrasena']; // Obtener la contraseña del formulario

    $conn = Database::getConnection(); // Obtener la conexión a la base de datos

    $userController = new UsuarioControlador($conn); // Crear instancia de UsuarioControlador

    if ($userController->register($nombre, $apellido, $correo, $telefono, $modalidad, $curso, $cedula, $role, $contrasena,$usuario)) {
        // Redirigir a la página de éxito o al dashboard
        header("Location: ../index.php?page=admin/dashboard");
        exit();
    } else {
        // Manejo de errores, puedes guardar el mensaje en sesión o similar
        $error = "Error al registrar el usuario.";
        header("Location: ../index.php?page=admin/registrar_usuario&error=" . urlencode($error));
        exit();
    }
}
?>
