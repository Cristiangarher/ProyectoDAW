<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
    <body>
    <?php require_once 'header.php';?>
        <form action="" method="POST" id="login">
            <h1>Sobre nosotros</h1>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <textarea id="mensaje" name="mensaje" placeholder="Mensaje" required cols="30" rows="10"></textarea>
            <button type="submit">Enviar</button>
        </form>
    <?php require_once 'footer.php'; ?>
    </body>
</html>


