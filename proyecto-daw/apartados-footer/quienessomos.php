<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Quiénes somos - Ferretería García</title>
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
    <?php include '../php/header.php'; ?>

    <main class="contenido">
        <h1>¿Quiénes somos?</h1>
        <br>

        <p>Somos tu ferretería de confianza, combinando la experiencia de toda la vida con la comodidad de la compra online.</p>
        <br>

        <details>
            <summary>¿Quiénes somos?</summary>
            <p>Una empresa familiar con más de 20 años de experiencia en el sector de las herramientas y el bricolaje profesional.</p>
        </details>
        <br>

        <details>
            <summary>Nuestra Misión</summary>
            <p>Ayudarte a encontrar la solución perfecta para tu reforma o proyecto, ofreciendo solo marcas de primera calidad.</p>
        </details>
        <br>

        <details>
            <summary>¿Por qué nosotros?</summary>
            <p>Porque ofrecemos asesoramiento experto, envíos rápidos y una garantía de compra 100% segura.</p>
        </details>
    </main>

    <?php 
        include '../php/footer.php';
    ?>
</body>
</html>