<?php
// Redirigir a inicio.php (página principal dividida)
header('Location: inicio.php');
exit;
?>

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
<section class="banner" id="iNICIO">
    <div class="banner-text">
        <h1>MI TRABAJO "APSTI"</h1>
        <p>Diseño moderno y funcional</p>
    </div>
</section>

<!-- BIENVENIDA -->
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

<!-- SOBRE NOSOTROS -->
<section class="seccion" id="nosotros">
    <h2>ALUMNOS</h2>
    <p>
       < YEFERSON MONTALVO HURTADO> <P>
        
       </P>
       > CELESTINO JESUS NAYDA> 
    </p>
</section>

<!-- CONTACTO -->
<section class="seccion" id="contacto">
    <h2>CONTACTO</h2>
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
