<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/ProyectoFinalMulti/config/database.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/ProyectoFinalMulti/models/libroModelo.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lib_codigo = $_POST['lib_codigo'];
    $lib_autor_codigo = $_POST['lib_autor_codigo'];
    $lib_titulo = $_POST['lib_titulo'];
    $lib_categoria = $_POST['lib_categoria'];
    $lib_cantidad_real = $_POST['lib_cantidad_real'];
    $stock_actual = $_POST['stock_actual'];z
    
    // Validar y procesar la imagen
    $lib_img = null;
    if (isset($_FILES['lib_img']) && $_FILES['lib_img']['error'] == 0) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $fileType = $_FILES['lib_img']['type'];
        
        if (!in_array($fileType, $allowedTypes)) {
            header("Location: ../../index.php?page=admin/AgregarLibro&error=" . urlencode("El tipo de archivo no es válido"));
            exit();
        }

        $lib_img = file_get_contents($_FILES['lib_img']['tmp_name']);
    }

    // Insertar datos en la base de datos
    try {
        $conn = Database::getConnection();
        $libroModelo = new LibroModelo($conn);

        if ($libroModelo->actualizarlibro($lib_codigo, $lib_autor_codigo, $lib_titulo, $lib_categoria, $lib_img, $lib_cantidad_real, $stock_actual)) {
            header("Location: ../../index.php?page=admin/AgregarLibro&success=" . urlencode("Libro actualizado correctamente"));
            exit();
        } else {
            header("Location: ../../index.php?page=admin/AgregarLibro&error=" . urlencode("Error al actualizar el libro"));
            exit();
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Ocurrió un error: ' . $e->getMessage()]);
    }
    exit();
}
?>
