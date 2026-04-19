<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros</title>
    <link rel="icon" href="../img/ferreteria.png">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        .contenedor {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }
        .fila-nosotros {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 60px;
            gap: 40px;
        }
        .imagen-nosotros img {
            text-align: left;
            font-size: 1.1rem;
            height: auto;
            border-radius: 8px;
        }
        .texto-nosotros {
            text-align: left;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <?php require_once '../php/header.php';?>
    <main class="contenedor">
        <h1>¿Qué quieres saber acerca de Ferretería García?</h1>
        <br>

        <section class="fila-nosotros">
        <div class="imagen-nosotros">
            <img src="../img/ejemplo4.jpg" alt="Nuestro taller">
        </div>
        <div class="texto-nosotros">
            <p>Llevamos más de 10 años ayudando a nuestros clientes a transformar sus ideas en resultados tangibles y duraderos gracias a nuestros productos y/o herramientas.</p>
        </div>
        </section>

        <section class="fila-nosotros fila-invertida">
            <div class="texto-nosotros">
                <p>Ofrecemos una gran amplia variedad de productos, desde pasando por herramientas manuales y eléctricas, como herramientas para jardín, hogar o trabajo. También elementos de fijación, artículos de pintura, decoración, entre muchas más cosas.</p>
            </div>
            <div class="imagen-nosotros">
                <img src="../img/ayudante.jpg" alt="Variedad de productos">
            </div>
        </section>

        <section class="fila-nosotros">
            <div class="imagen-nosotros">
                <img src="../img/ayudantess.jpg" alt="Nuestro equipo">
            </div>
            <div class="texto-nosotros">
                <p>Contamos con los mejores trabajadores especializados porque nuestros clientes son nuestra prioridad principal, para ofrecer un asesoramiento práctico perfecto y solucionar tus dudas más complejas, para finalmente, tener la solución más eficiente y duradera en tus manos.</p>
            </div>
        </section>
    </main>
    <?php require_once '../php/footer.php'; ?>
</body>
</html>


