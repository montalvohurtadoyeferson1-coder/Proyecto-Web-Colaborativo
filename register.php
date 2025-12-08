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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="about.php">Sobre Nosotros</a></li>
            <li><a href="contact.php">Contacto</a></li>
            <li><a href="register.php">Registro</a></li>
        </ul>
    </nav>
    
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