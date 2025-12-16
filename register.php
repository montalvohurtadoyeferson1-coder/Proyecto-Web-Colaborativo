<?php
session_start();

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: register.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="bienvenida.php">Bienvenido</a></li>
            <li><a href="about.php">Sobre Nosotros</a></li>
            <li><a href="contact.php">Contacto</a></li>
            <li><a href="register.php" class="active">Registro</a></li>
        </ul>
    </nav>
    
    <div class="login-area small">
        <?php if (!empty($_SESSION['user'])): ?>
            <div class="welcome">Hola, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong> - <a href="?logout=1">Cerrar sesión</a></div>
        <?php else: ?>
            <form class="login-form" method="post" action="register.php">
                <input type="text" name="username" placeholder="Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit" name="login_submit">Entrar</button>
            </form>
            <?php if ($login_error): ?>
                <div class="login-error"><?php echo $login_error; ?></div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    
    <div class="container">
        <h1>Formulario de Registro</h1>
        <form id="formRegistro">
            <div class="form-group">
                <label>Nombre Completo:</label>
                <input type="text" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label>Confirmar Contraseña:</label>
                <input type="password" name="confirm_password" required>
            </div>
            
            <button type="submit">Registrarse</button>
        </form>
    </div>
    
    <script src="js/funciones.js"></script>
</body>
</html>