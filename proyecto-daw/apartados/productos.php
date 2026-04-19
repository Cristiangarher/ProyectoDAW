<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="icon" href="../img/ferreteria.png">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        .contenedor {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }
        .producto-img {
            width: 100%;
            max-width: 200px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .grid-productos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .producto-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<?php require_once '../php/header.php'; ?>

<main class="contenedor">
    <h1>Nuestro Catálogo de Ferretería</h1>
    <div class="grid-productos">
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "ferreteríaprueba");
    $query = mysqli_query($conexion, "SELECT * FROM producto");
        
    while($fila = mysqli_fetch_assoc($query)): 
    ?>
        <div class="producto-card">
        <?php if(!empty($fila['imagen'])): ?>
            <img src="../img/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['nombre']; ?>" class="producto-img">
        <?php else: ?>
            <img src="../img/placeholder.jpg" alt="Sin imagen" class="producto-img">
        <?php endif; ?>
            <h3><?php echo $fila['nombre']; ?></h3>
            <p><strong>Marca:</strong> <?php echo $fila['marca']; ?></p>
            <p><?php echo $fila['descripción']; ?></p>
            <p>Estado: <?php echo $fila['estado']; ?></p>
            <span class="precio"><?php echo number_format($fila['precio'], 2); ?>€</span>
                
            <form action="../php/carrito.php" method="POST">
                <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto']; ?>">
                <input type="hidden" name="accion" value="agregar">
                <button type="submit" class="btn-carrito">Añadir al carrito</button>
            </form>
        </div>
        <?php endwhile; ?>
    </div>
</main>

<?php require_once '../php/footer.php'; ?>
</body>
</html>