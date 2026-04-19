<?php
session_start();
require_once '../modelobd/Database.php'; 
$db = new Database();
$con = $db->conexion;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre      = $_POST['nombre'];
    $marca       = $_POST['marca'];
    $descripcion = $_POST['descripcion'];
    $valoracion  = $_POST['valoracion'];
    $precio      = $_POST['precio'];
    $estado      = $_POST['estado'];
    $segunda_mano = isset($_POST['segunda_mano']) ? 'Sí' : 'No';

    $nombre_imagen = "";
    
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $nombre_archivo = $_FILES['imagen']['name'];
        $ruta_temporal = $_FILES['imagen']['tmp_name'];
        $nombre_imagen = time() . "_" . $nombre_archivo;
        $ruta_destino = "../img/" . $nombre_imagen;

        move_uploaded_file($ruta_temporal, $ruta_destino);
    }


    $sql = "INSERT INTO producto (descripción, valoración, nombre, precio, marca, estado, segunda_mano, imagen) 
            VALUES ('$descripcion', '$valoracion', '$nombre', '$precio', '$marca', '$estado', '$segunda_mano', '$nombre_imagen')";

    if (mysqli_query($con, $sql)) {
        header("Location: ../apartados/productos.php?msg=success");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>