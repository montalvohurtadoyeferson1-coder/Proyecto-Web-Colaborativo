<?php
session_start();

// Simple login handling (demo)
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: inicio.php');
    exit;
}

$login_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';
    if ($user === 'root' && $pass === 'root123') {
        $_SESSION['user'] = 'root';
    } else {
        $login_error = 'Credenciales incorrectas';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Proyecto Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
    <div class="header-container">
        <img src="img/logo%20ISTPDAC.png" alt="Logo" class="logo">
        <nav>
            <ul>
                <li><a href="inicio.php" class="active">Inicio</a></li>
                <li><a href="bienvenida.php">Bienvenida</a></li>
                <li><a href="about.php">Sobre Nosotros</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li><a href="register.php">Registro</a></li>
            </ul>
        </nav>

        <div class="login-area">
            <?php if (!empty($_SESSION['user'])): ?>
                <div class="welcome">Hola, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong> - <a href="?logout=1">Cerrar sesión</a></div>
            <?php else: ?>
                <form class="login-form" method="post" action="inicio.php">
                    <input type="text" name="username" placeholder="Usuario" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <button type="submit" name="login_submit">Entrar</button>
                </form>
                <?php if ($login_error): ?>
                    <div class="login-error"><?php echo $login_error; ?></div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</header>

<section class="banner">
    <div class="banner-text">
        <h1>Proyecto Web Colaborativo</h1>
        <p>Diseño moderno y funcional</p>
    </div>
</section>

<footer>
    <p>© 2025 - Proyecto Web Colaborativo</p>
</footer>

<script src="js/funciones.js"></script>
</body>
</html>
