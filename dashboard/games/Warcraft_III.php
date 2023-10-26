<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Detalles del Juego - PlayZone</title>
    <link rel="stylesheet" href="../../css/games.css">
</head>
<body>
    <nav class="sidebar">
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../games.php">Lista de Juegos para Descargar</a></li>
            <li><a href="../logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <main class="content">
        <h1>Detalles del Juego</h1>
        <div class="game-details">
            <div class="game">
                <img src="../../img/img3.jpg" alt="Warcraft III: The Frozen Throne">
                <h2>Warcraft III: The Frozen Throne</h2>
                <p>Genero: Estrategia en tiempo real</p>
                <p>Puntaje (Según Vandal): 9.6</p>
                <p>Peso del Juego: 1.82 GB</p>
                <a class="download-button" href="files/Warcraft_III.zip">Descargar</a>
            </div>
            <div class="game-description">
                <h2>Descripción del Juego</h2>
                <p>Warcraft: The Frozen Throne es un videojuego de estrategia en tiempo real y expansión de Warcraft III: Reign of Chaos desarrollado por Blizzard Entertainment.</p>
                <p>La instalación de Warcraft III: Reign of Chaos es necesaria para poder jugar a esta expansión.</p>
            </div>
            <div class="game-screenshots">
                <h2>Capturas de Pantalla</h2>
                <img src="../../img/cap7.jpg" alt="Captura de pantalla 1">
                <img src="../../img/cap8.jpg" alt="Captura de pantalla 2">
                <img src="../../img/cap9.avif" alt="Captura de pantalla 3">
            </div>
        </div>
    </main>
    <footer class="dashboard-footer">
        <p>&copy; 2023 PlayZone. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
