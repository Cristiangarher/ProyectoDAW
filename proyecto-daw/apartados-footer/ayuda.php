<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ayuda - Ferretería García</title>
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
    <h1>Centro de Ayuda</h1>
    <p>Resuelve tus dudas rápidamente. Si no encuentras lo que buscas, puedes contactar con nuestro equipo técnico.</p>
    <br>

    <details>
        <summary>¿Cómo realizo un pedido?</summary>
        <p>Añade los productos al carrito, pulsa en el icono de la cesta y sigue los pasos para finalizar la compra.</p>
    </details>
    <br>

    <details>
        <summary>¿Cuánto tardará en llegar mi compra?</summary>
        <p>El plazo de entrega suele ser de 24 a 72 horas laborables tras la confirmación del pago.</p>
    </details>
    <br>

    <details>
        <summary>¿Qué métodos de pago aceptáis?</summary>
        <p>Puedes pagar con tarjeta de crédito/débito, Bizum o transferencia bancaria de forma segura.</p>
    </details>
    <br>

    <details>
        <summary>¿Puedo devolver un producto?</summary>
        <p>Sí, tienes 14 días para devolver tu pedido siempre que esté en su embalaje original y sin usar.</p>
    </details>
    <br>

    </main>
    <?php include '../php/footer.php'; ?>
</body>
</html>