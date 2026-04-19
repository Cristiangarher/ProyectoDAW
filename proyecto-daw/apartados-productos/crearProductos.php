<?php
require_once '../modelobd/Database.php';
$db = new Database();
$con = $db->conexion;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descripcion = $_POST['descripcion'];
    $valoracion  = $_POST['valoracion'];
    $nombre      = $_POST['nombre'];
    $precio      = $_POST['precio'];
    $marca       = $_POST['marca'];
    $estado      = $_POST['estado'];
    $segunda_mano = isset($_POST['segunda_mano']) ? 'Sí' : 'No';

    $sql = "INSERT INTO producto (descripción, valoración, nombre, precio, marca, estado, segunda_mano) 
            VALUES ('$descripcion', '$valoracion', '$nombre', '$precio', '$marca', '$estado', '$segunda_mano')";

    if (mysqli_query($con, $sql)) {
        header("Location: ../apartados/productos.php?msg=creado");
        exit();
    } else {
        echo "Error en la base de datos: " . mysqli_error($con);
    }
}
?>