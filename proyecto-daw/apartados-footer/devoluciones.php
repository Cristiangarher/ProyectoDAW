<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Devoluciones y reembolso - Ferretería García</title>
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
        <h1>Devoluciones y Reembolsos</h1>
        <br>

        <details>
            <summary>¿Por qué motivos puedo devolver uno o varios artículos?</summary>
            <p>Puedes devolver tu pedido en cualquier caso en que haya un error por nuestra parte, como en los casos ya citados de:</p>
            <p>Productos incluidos equivocadamente en tu envío.</p>
            <p>Productos defectuosos.</p>
            <p>Productos dañados.</p>
        </details>
        <br>

        <details>
            <summary>En caso de que no podamos entregarte el pedido completo.</summary>
            <p>En esos supuestos, todos los costes de la devolución son de nuestra cuenta exclusivamente, sin ningún cargo para ti, y procederemos a devolverte tu dinero cuanto antes en el mismo método de pago utilizado en la compra. Dispones, como máximo, de catorce (14 días) naturales (es decir, incluidos sábados, domingos y festivos) a contar desde el día de la recepción del pedido, para verificar si los productos recibidos están en perfecto estado y que no exista ningún error en el pedido. Esperamos no habernos equivocado, pero si fuese así, por favor envíanos tu petición de devolución dentro de ese plazo.</p>
        </details>
        <br>

        <details>
            <summary>¿Quién paga el coste de la devolución?</summary>
            <p>Como hemos dicho, los gastos de devolución irán a nuestro exclusivo cargo siempre que exista un error por nuestra parte o el pedido sea servido incompleto. Para ello, verificaremos que el producto que devuelves está efectivamente dañado o resulta defectuoso, así como si el artículo fue añadido por error a tu pedido o si tu pedido fue servido de forma incompleta, y te lo confirmaremos.</p>
        </details>
        <br>

        <details>
            <summary>¿Dónde puedo devolver mi pedido?</summary>
            <p>En cambio, en el caso de tratarse de una devolución por desistimiento, los costes serán de tu cargo.</p>
            <p>Si lo prefieres puedes llevar el pedido a tu tienda habitual y ahorrarte el coste de envío. Te aconsejamos que optes por esta opción.</p>
        </details>
        <br>
    </main>

    <?php include '../php/footer.php'; ?>
</body>
</html>