<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Garantía compra segura - Ferretería García</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php include '../php/header.php'; ?>

    <div style="text-align: center; margin-top: 50px;">
        <h1>Formulario de Registro</h1>
        <form action="php/create.php" method="POST" style="display: inline-block; text-align: left;">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required><br><br>

            <label>Fecha de nacimiento:</label><br>
            <input type="date" name="fecha_nac" required><br><br>

            <label>Dirección:</label><br>
            <input type="text" name="direccion" required><br><br>

            <label>Correo electrónico:</label><br>
            <input type="email" name="correo" required><br><br> 

             <label>Contraseña:</label><br>
            <input type="password" name="contrasena" required><br><br>

            <label>Género:</label><br>
            <select name="genero" required>
                    <option value="">Seleccione...</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Otro">Otro</option>
            </select><br><br>

            <button type="submit">Registrar Usuario</button>
        </form>
    </div>

    <div style="text-align: center; margin: 50px 0;">
        <form action="php/create.php" method="POST"></form>
    </div>

    <?php 
        include '../php/footer.php';
    ?>
</body>
</html>