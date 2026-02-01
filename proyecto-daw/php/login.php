<?php
session_start();

$usuarios_validos = [
    'admin@garcia.com' => ['pass' => 'admin123', 'rol' => 'admin'],
    'cliente@gmail.com' => ['pass' => 'user123', 'rol' => 'usuario']
];

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($usuarios_validos[$email]) && $usuarios_validos[$email]['pass'] === $password) {
      
        $_SESSION['usuario'] = $email;
        $_SESSION['rol'] = $usuarios_validos[$email]['rol'];
        if ($_SESSION['rol'] === 'admin') {
            header("Location: admin/admin.php");
        } else {
            header("Location: index.php");
        }
        exit();
    } else {
        $error = "Email o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ferretería García - Iniciar Sesión</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 350px;
        }
        h2 { text-align: center; color: #333; }
        .input-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 5px; color: #666; }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; 
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #e67e22;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover { background-color: #d35400; }
        .error { color: red; font-size: 14px; text-align: center; margin-bottom: 10px; }
        .footer-link { text-align: center; margin-top: 15px; font-size: 14px; }
        .footer-link a { color: #e67e22; text-decoration: none; }
    </style>
</head>
<body>

<div class="container">
    <h2>Ferretería García</h2>
    <?php if($error): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
    
    <form method="POST" action="">
        <div class="input-group">
            <label>Correo electrónico</label>
            <input type="email" name="email" required placeholder="ejemplo@correo.com">
        </div>
        <div class="input-group">
            <label>Contraseña</label>
            <input type="password" name="password" required placeholder="********">
        </div>
        <button type="submit">Entrar</button>
    </form>
    
    <div class="footer-link">
        ¿No tienes cuenta? <a href="../registro.php">Regístrate aquí</a>
    </div>
</div>

</body>
</html>