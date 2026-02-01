<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$origen = debug_backtrace();
$archivo = basename($origen[0]['file']);

$en_subcarpeta = (dirname($origen[0]['file']) !== getcwd());
$ruta_base = $en_subcarpeta ? "../" : "";
$ruta_php = $en_subcarpeta ? "" : "php/";
?>

<header>
    <div class="top-header" style="background-color: #7B5C4A; color: white; display: flex; align-items: center; padding: 10px 20px; justify-content: space-between;">
        
        <div class="logo-section" style="display: flex; align-items: center;">
            <img src="<?php echo $ruta_base; ?>img/ferreteria.jpg" alt="logo" class="logo" style="width: 60px; height: 60px; margin-right: 15px;">
            <h1 style="font-family: 'Segoe UI', sans-serif; margin: 0; font-size: 24px;">Ferretería<br>García</h1>
        </div>

        <div class="search-container" style="flex-grow: 1; max-width: 400px; margin: 0 20px;">
            <form action="#" method="get" style="display: flex; background: #E8E4F0; border-radius: 20px; padding: 5px 15px;">
                <input type="text" name="buscador" id="buscador" placeholder="Buscar productos..." style="border: none; background: transparent; width: 100%; outline: none;">
                <button type="submit" style="border: none; background: transparent; cursor: pointer;">
                    🔍
                </button>
            </form>
        </div>

        <div class="user-actions" style="display: flex; align-items: center; gap: 20px;">
            <?php if (!isset($_SESSION['usuario'])): ?>
                <?php if ($archivo === 'login.php' || $archivo === 'registro.php'): ?>
                    <strong style="color: white;">Iniciar/Registrarse</strong>
                <?php else: ?>
                    <a href="<?php echo $ruta_php; ?>login.php" style="color: white; text-decoration: none; font-weight: bold;">Iniciar/Registrarse</a>
                <?php endif; ?>
            <?php else: ?>
                <span style="font-size: 14px; margin-right: 5px;">Hola, <?php echo $_SESSION['rol']; ?></span>
                <a href="<?php echo $ruta_php; ?>cerrar_sesion.php" style="color: white; text-decoration: none; border: 1px solid white; padding: 2px 5px; border-radius: 4px;">Cerrar Sesión</a>
            <?php endif; ?>
            
            <a href="#" style="color: white;">🛒</a>
        </div>
    </div>

    <nav class="main-nav" style="background-color: black; padding: 12px 0;">
        <ul style="list-style: none; margin: 0; padding: 0; display: flex; justify-content: center; gap: 30px;">
            <li><a href="<?php echo $ruta_base; ?>index.php" style="color: white; text-decoration: none;">Inicio</a></li>
            <li><a href="#" style="color: white; text-decoration: none;">Productos</a></li>
            <li><a href="#" style="color: white; text-decoration: none;">Categorías</a></li>
            <li><a href="#" style="color: white; text-decoration: none;">Sobre nosotros</a></li>
            <li><a href="#" style="color: white; text-decoration: none;">Contacto</a></li>
        </ul>
    </nav>

    <div class="breadcrumb" style="background-color: #D3D3D3; padding: 5px 20px; font-weight: bold;">
        <?php
        if ($archivo === 'index.php') echo "Inicio";
        elseif ($archivo === 'productos.php') echo "Inicio > Productos";
        else echo "Inicio"; 
        ?>
    </div>
</header>