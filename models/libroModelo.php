<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/ProyectoFinalMulti/config/database.php'); // Incluir el archivo Database.php para poder instanciar la conexión
class LibroModelo {
    private $db;
    
    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    function agregarLibro($titulo, $autor, $categoria, $imagenBinaria, $cantidad, $stock) {
        // Preparar la consulta
        $stmt = $this->db->prepare("INSERT INTO libros (lib_autor_codigo, lib_titulo, lib_categoria, lib_img, lib_cantidad_real, stock_actual) VALUES (:autor, :titulo, :categoria, :img, :cantidadreal, :stockreal)");
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':categoria', $categoria); 
        $stmt->bindParam(':img', $imagenBinaria, PDO::PARAM_LOB);  // Guardar la imagen como binario (BLOB)
        $stmt->bindParam(':cantidadreal', $cantidad);
        $stmt->bindParam(':stockreal', $stock);
        
        return $stmt->execute(); // Retorna el resultado de la ejecución
    }

    function actualizarLibro(){
        $stmt = $this->db->prepare("UPDATE libros SET lib_autor_codigo = :autor, lib_titulo = :titulo, lib_categoria = :categoria, lib_img = :img, lib_cantidad_real = :cantidadreal, stock_actual = :stockreal WHERE lib_codigo = :codigo");
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':categoria', $categoria); 
        $stmt->bindParam(':img', $imagenBinaria, PDO::PARAM_LOB);  // Guardar la imagen como binario (BLOB)
        $stmt->bindParam(':cantidadreal', $cantidad);
        $stmt->bindParam(':stockreal', $stock);
        $stmt->bindParam(':codigo', $codigo);
        return $stmt->execute();
    }
    function eliminarlibro($lib_codigo){
        $stmt = $this->db->prepare("DELETE FROM libros WHERE lib_codigo = :codigo");
        $stmt->bindParam(':codigo', $lib_codigo);
        return $stmt->execute();
    }





}
?>