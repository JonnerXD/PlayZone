<?php
session_start(); // Iniciar la sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Juegos - PlayZone</title>
    <link rel="stylesheet" href="../css/games.css">
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
        <h1>Juegos para Descargar en PlayZone</h1>
        <div class="games-container">
            <div class="game">
                <img src="../img/img3.jpg" alt="Juego 1">
                <h2>Warcraft III: The Frozen Throne</h2>
                <p>Genero: Estrategia en tiempo real</p>
                <p>Puntaje (Según Vandal): 9.6</p>
                <a class="download-button" href="games/Warcraft_III.php">Descargar</a>
            </div>
            <div class="game">
                <img src="../img/img2.webp" alt="Juego 2">
                <h2>Grand Theft Auto: San Andreas</h2>
                <p>Genero: Videojuego de acción y aventura, Videojuego de disparos en tercera persona, Videojuego no lineal</p>
                <p>Puntaje (Según Vandal): 9.7</p>
                <a class="download-button" href="#">Descargar</a>
            </div>
            
        </div>
    </main>
    <footer class="dashboard-footer">
        <p>&copy; 2023 PlayZone. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
