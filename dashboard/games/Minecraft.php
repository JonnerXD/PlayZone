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
    <link rel="shortcut icon" href="../../img/ico.png" type="image/x-icon">
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
                <img src="../../img/img1.avif" alt="Minecraft">
                <h2>Minecraft</h2>
                <p>Genero: Aventura</p>
                <p>Puntaje (Según Vandal): 9.0</p>
                <p>Peso del Juego: 1.2 GB</p>
                <a class="download-button" href="files/Minecraft.zip">Descargar</a>
            </div>
            <div class="game-description">
                <h2>Descripción del Juego</h2>
                <p>Minecraft es un videojuego tipo sandbox, Los jugadores pueden modelar el mundo a su gusto, destruir y construir, como si estuviesen jugando en una caja de arena.</p>
                <p>Creado originalmente por el sueco Markus Persson (conocido comúnmente como «Notch»), que creo posteriormente Mojang Studios (actualmente parte de Microsoft)</p>
            </div>
            <div class="game-screenshots">
                <h2>Capturas de Pantalla</h2>
                <img src="../../img/cap1.jpg" alt="Captura de pantalla 1">
                <img src="../../img/cap2.avif" alt="Captura de pantalla 2">
                <img src="../../img/cap3.webp" alt="Captura de pantalla 3">
            </div>
        </div>
    </main>
    <footer class="dashboard-footer">
        <p>&copy; 2023 PlayZone. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
