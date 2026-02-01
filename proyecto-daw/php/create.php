<?php
require_once '../modelobd/Database.php';
$db = new Database();
$con = $db->conexion;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha_nac'];
    $direc   = $_POST['direccion'];
    $correo  = $_POST['correo'];
    $contrasenya = $_POST['contrasena'];
    $genero  = $_POST['genero'];

    $sql = "INSERT INTO usuario (nombre, fecha_nac, direccion, correo, contrasena, genero) 
            VALUES ('$nombre', '$fecha', '$direc', '$correo', '$contrasenya', '$genero')";

    if (mysqli_query($con, $sql)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error al guardar el usuario: " . mysqli_error($con);
    }
}
?>