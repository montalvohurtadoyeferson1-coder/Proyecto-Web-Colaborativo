<?php
session_start();

// Manejo simple de login/logout para demo (usuario: root / contraseña: root123)
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
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
    <title>Proyecto Web Colaborativo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header>
    <div class="header-container">
        <img src="img/logo.png" alt="Logo" class="logo">

        <nav>
            <ul>
                <li><a href="#inicio" class="active">Inicio</a></li>
                <li><a href="#nosotros">Sobre Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="#registro">Registro</a></li>
            </ul>
        </nav>

        <div class="login-area">
            <?php if (!empty($_SESSION['user'])): ?>
                <div class="welcome">Hola, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong> - <a href="?logout=1">Cerrar sesión</a></div>
            <?php else: ?>
                <form class="login-form" method="post" action="index.php">
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

<!-- INICIO -->
<section class="banner" id="inicio">
    <div class="banner-text">
        <h1>Proyecto Web Colaborativo</h1>
        <p>Diseño moderno y funcional</p>
    </div>
</section>

<!-- BIENVENIDA -->
<main class="container">
    <h2>Bienvenido</h2>
    <p>
        Esta es la página principal de nuestro proyecto web colaborativo.
        Ha sido desarrollado utilizando XAMPP, Visual Studio Code y GitHub.
    </p>
    <button id="btnSaludo">Haz clic aquí</button>

    <?php if (!empty($_SESSION['user'])): ?>
        <div class="welcome-card">Has iniciado sesión como <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong></div>
    <?php endif; ?>
</main>

<!-- SOBRE NOSOTROS -->
<section class="seccion" id="nosotros">
    <h2>Sobre Nosotros</h2>
    <p>
        Somos un equipo de estudiantes que desarrolló este proyecto web colaborativo
        aplicando buenas prácticas de diseño, trabajo en equipo y control de versiones.
    </p>
</section>

<!-- CONTACTO -->
<section class="seccion" id="contacto">
    <h2>Contacto</h2>
    <p>Email: contacto@proyecto.com</p>
    <p>Teléfono: 999 999 999</p>
</section>

<!-- REGISTRO -->
<section class="seccion" id="registro">
    <h2>Registro</h2>

    <form id="formRegistro">
        <input type="text" placeholder="Nombre" required>
        <input type="email" placeholder="Correo" required>
        <input type="password" placeholder="Contraseña" required>
        <button type="submit">Registrarse</button>
    </form>
</section>

<footer>
    <p>© 2025 - Proyecto Web Colaborativo</p>
</footer>

<script src="js/funciones.js"></script>
</body>
</html>
