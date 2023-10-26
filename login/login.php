<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - PlayZone</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="shortcut icon" href="../img/ico.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Iniciar Sesión</h2>
            <form id="login-form" action="login_procesar.php" method="post">
                <label for="username">Nombre de Usuario</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Iniciar Sesión</button>
                <p>¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
            </form>
        </div>
    </div>
</body>
</html>
