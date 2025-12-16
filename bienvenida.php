<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido - Proyecto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
    <div class="header-container">
        <img src="img/logo.png" alt="Logo" class="logo">
        <nav>
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="bienvenida.php" class="active">Bienvenido</a></li>
                <li><a href="about.php">Sobre Nosotros</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li><a href="register.php">Registro</a></li>
            </ul>
        </nav>
        <div class="login-area">
            <?php if (!empty($_SESSION['user'])): ?>
                <div class="welcome">Hola, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong> - <a href="inicio.php?logout=1">Cerrar sesión</a></div>
            <?php endif; ?>
        </div>
    </div>
</header>

<main class="container">
    <h2>BIENVENIDO</h2>
    <p>
        👋 ¡Bienvenidos a Nuestro Proyecto Colaborativo!
        Es un placer darles la bienvenida a nuestro espacio de creación digital. Somos un equipo apasionado y sinérgico que trabaja codo a codo para dar vida a este proyecto web.

        🚀 Innovación y Excelencia Tecnológica
        En el corazón de nuestro trabajo reside el compromiso con la innovación y la calidad. Utilizamos un stack de tecnologías modernas y de vanguardia, asegurando no solo un rendimiento excepcional, sino también una experiencia de usuario fluida, intuitiva y a prueba de futuro.

        ✨ Nuestra Misión
        Estamos enfocados en transformar ideas en soluciones digitales robustas y estéticamente impecables. Cada línea de código es un reflejo de nuestra dedicación, conocimiento técnico y espíritu colaborativo.

        ¡Gracias por acompañarnos en este emocionante viaje de desarrollo!
    </p>
    <button id="btnSaludo">Haz clic aquí</button>

    <?php if (!empty($_SESSION['user'])): ?>
        <div class="welcome-card">Has iniciado sesión como <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong></div>
    <?php endif; ?>
</main>

<footer>
    <p>© 2025 - Proyecto Web Colaborativo</p>
</footer>

<script src="js/funciones.js"></script>
</body>
</html>
