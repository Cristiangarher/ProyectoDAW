<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil - Ferretería García</title>
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="icon" href="../img/ferreteria.png">
    <style>
        .panel-usuario {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .bienvenida h2 { color: #7B5C4A; }
        .opciones-usuario {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .tarjeta {
            padding: 20px;
            background: white;
            border: 1px solid #ddd;
            text-align: center;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<?php include '../php/header.php'; ?>

<main class="panel-usuario">
    <div class="bienvenida">
        <h2>Hola, <?php echo $_SESSION['usuario']; ?></h2>
        <p>Bienvenido a tu área personal. Aquí puedes gestionar tus compras y datos.</p>
    </div>

    <div class="opciones-usuario">
        <div class="tarjeta">
            <h3>📦 Mis Pedidos</h3>
            <p>Consulta el estado de tus herramientas compradas.</p>
            <a href="#">Ver historial</a>
        </div>
        <div class="tarjeta">
            <h3>👤 Mis Datos</h3>
            <p>Actualiza tu dirección de envío y contraseña.</p>
            <a href="#">Editar perfil</a>
        </div>
        <div class="tarjeta">
            <h3>🏷️ Mis Cupones</h3>
            <p>Tienes 0 cupones de descuento disponibles.</p>
            <a href="#">Ver ofertas</a>
        </div>
    </div>
</main>

<?php include '../php/footer.php'; ?>

</body>
</html>