<?php
// No llames a session_start() aquí si ya lo haces en base.php
// session_start(); 

// Ejemplo de manejo de rutas
$page = isset($_GET['page']) ? $_GET['page'] : 'auth/login'; // Página predeterminada

switch ($page) {
    case 'auth/login':
        $content = 'views/auth/login.php';
        break;
    case 'admin/dashboard': 
        $content = 'views/admin/dashboard.php';
        break;
    case 'consumidor/catalogo':
        $content = 'views/consumidor/catalogo.php';
        break;
    case 'admin/RegistrarUsuario':
        $content = 'views/admin/RegistrarUsuario.php';
        break;
    case 'auth/logout':
        $content = 'views/auth/logout.php';
        break;
    case 'admin/AgregarLibro':
        $content = 'views/admin/AgregarLibro.php';
            break;
    case 'admin/gestionarAutor':
                $content = 'views/admin/gestionarAutor.php';
            break;
    case 'admin/ReservarLibro':
        $content = 'views/admin/ReservarLibro.php';
            break;
    case 'admin/PrestarLibro':
        $content = 'views/admin/PrestarLibro.php';
            break;
    case 'admin/DevolverLibro':
        $content = 'views/admin/DevolverLibro.php';
            break;         
    default:
        $content = 'views/auth/login.php'; // Página predeterminada
}

include('views/base.php'); // Incluir la plantilla base
?>
