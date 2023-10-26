<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - PlayZone</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <nav class="sidebar">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="games.php">Lista de Juegos para Descargar</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <main class="content">
        <h1>Bienvenido al Dashboard, <?php echo $_SESSION['username']; ?></h1>
        <p>Tu fuente de juegos favoritos. Explora y descarga juegos emocionantes.</p>
    </main>
    <footer class="dashboard-footer">
        <p>&copy; 2023 PlayZone. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
