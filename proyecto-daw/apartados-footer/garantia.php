<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Garantía compra segura - Ferretería García</title>
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
    <h1>Garantía compra segura</h1>
    <br>

    <details>
        <summary>Pago 100% Encriptado (SSL)</summary>
        <p>Nuestra web cuenta con un certificado SSL (Secure Sockets Layer) de 256 bits. Esto significa que toda la información que introduces (datos personales y de pago) viaja de forma cifrada y es totalmente ilegible para terceros.</p>
    </details>
    <br>

    <details>
        <summary>Pasarelas de Pago Seguras</summary>
        <p>Trabajamos exclusivamente con plataformas de pago líderes como PayPal. En ningún momento Ferretería García almacena los datos de tu tarjeta de crédito en nuestros servidores; la transacción se realiza directamente entre tu banco y la pasarela de pago.</p>
    </details>
    <br>

    <details>
        <summary>Protección frente al Fraude</summary>
        <p>Implementamos el sistema 3D Secure (Verified by Visa y MasterCard SecureCode), que añade un paso de verificación adicional con tu banco para asegurar que solo tú puedas usar tu tarjeta.</p>
    </details>
    <br>

    <details>
        <summary>Garantía de Entrega o Reembolso</summary>
        <p>Si tu pedido no llega en el plazo acordado o llega dañado, te garantizamos la reposición inmediata del producto o el reembolso total de tu dinero sin costes adicionales.</p>
    </details>
    <br>
    </main>

    <?php include '../php/footer.php'; ?>
</body>
</html>