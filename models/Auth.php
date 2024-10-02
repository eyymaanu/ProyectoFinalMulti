<?php

class Auth {
    private $db;
    private $userId;
    private $userRole;

    public function __construct($dbConnection) {
        $this->db = $dbConnection; // Conexión a la base de datos
    }

    public function login($usuario, $contrasena) {
        
        // Preparar la consulta
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE usu_usuario = :usuario LIMIT 1");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();

        // Verificar si se encontró el usuario
        if ($stmt->rowCount() === 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verificar la contraseña (suponiendo que está encriptada)
            if (verificarCadena($contrasena,$user['usu_contrasena'] )) {
                // Guardar información del usuario
                $this->userId = $user['usu_codigo'];
                $this->userRole = $user['usu_role'];

                // Iniciar sesión y guardar información del usuario
                session_start();
                $_SESSION['usu_codigo'] = $this->userId;
                $_SESSION['usu_role'] = $this->userRole;

                return true; // Inicio de sesión exitoso
            }
        }
        return false; // Credenciales inválidas
    }

    public function logout() {
        session_start();
        session_destroy(); // Destruir la sesión
    }

    public function getUserId() {
        return $this->userId; // Devolver el ID del usuario
    }

    public function getUserRole() {
        return $this->userRole; // Devolver el rol del usuario
    }
}

?>
