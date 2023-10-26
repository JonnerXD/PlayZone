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
                <img src="../../img/img2.webp" alt="GTA San Andreas">
                <h2>Grand Theft Auto: San Andreas</h2>
                <p>Genero: Videojuego de acción y aventura, Videojuego de disparos en tercera persona, Videojuego no lineal</p>
                <p>Puntaje (Según Vandal): 9.7</p>
                <p>Peso del Juego: 3,6 GB</p>
                <a class="download-button" href="files/GTA_San_Andreas.zip">Descargar</a>
            </div>
            <div class="game-description">
                <h2>Descripción del Juego</h2>
                <p> Grand Theft Auto: San Andreas es un videojuego de acción-aventura de mundo abierto desarrollado por Rockstar North y publicado por Rockstar Games.</p>
                <p>Fue confirmado oficialmente por la mencionada Rockstar Games a principios de marzo de 2004, y su fecha de lanzamiento tentativa se programó para el 19 y 22 de octubre de ese año para 
                    América del Norte y Europa. Distribuido por Take-Two Interactive, San Andreas fue lanzado originalmente para PlayStation 2 el 26 de octubre de 2004, aunque posteriormente se publicaron distintas versiones, tanto para videoconsolas de sexta, séptima y octava generación, así como
                     ordenadores, y teléfonos inteligentes.</p>
            </div>
            <div class="game-screenshots">
                <h2>Capturas de Pantalla</h2>
                <img src="../../img/cap4.jpg" alt="Captura de pantalla 1">
                <img src="../../img/cap5.webp" alt="Captura de pantalla 2">
                <img src="../../img/cap6.webp" alt="Captura de pantalla 3">
            </div>
        </div>
    </main>
    <footer class="dashboard-footer">
        <p>&copy; 2023 PlayZone. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
