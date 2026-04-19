<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" href="../img/ferreteria.png">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        .contenido {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php require_once '../php/header.php';?>
    <main class="contenido">
        <form action="" method="POST" id="login">
            <h1>Contacto</h1>
            <h2>Este es nuestro formulario de contacto: </h2>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br><br>
            <textarea id="mensaje" name="mensaje" placeholder="Mensaje" required cols="30" rows="10"></textarea><br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
    <?php require_once '../php/footer.php'; ?>
</body>
</html>


