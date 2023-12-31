<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlayZone - Descarga tus Videojuegos Favoritos</title>
    <link rel="shortcut icon" href="../img/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <nav>
    <a href="index.php">Inicio</a>
    <?php
session_start();
if (isset($_SESSION['username'])) {
    echo '<a href="#">Bienvenido, ' . $_SESSION['username'] . '</a>';
    echo '<a href="logout.php">Cerrar Sesión</a>';
} else {
    echo '<a href="../login/login.php">Iniciar Sesión</a>';
    echo '<a href="../login/register.php">Registrarse</a>';
}

    ?>
</nav>

        <section class="textos-header">
            <h1>PlayZone</h1>
            <h2>Descarga tus Videojuegos Favoritos</h2>
        </section>
        <div class="wave" style="height: 110px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: rgb(220, 177, 255);"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Sobre PlayZone</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="../img/ilutracion1.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Tu fuente de videojuegos</h3>
                    <p>PlayZone es tu plataforma confiable para descubrir, explorar y descargar los videojuegos más emocionantes y populares para todas las plataformas.</p>
                    <h3><span>2</span>Variedad de géneros</h3>
                    <p>Desde juegos de acción y aventuras hasta juegos de estrategia y simuladores, en PlayZone encontrarás una amplia variedad de géneros para satisfacer tus preferencias de juego.</p>
                </div>
            </div>
        </section>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Por qué elegir PlayZone</h2>
            <div class="contenedor-sobre-nosotros">
                <div class="contenido-textos">
                    <h3><span>1</span>Experiencia de usuario excepcional</h3>
                    <p>Nos enorgullece proporcionar una experiencia de usuario inigualable, desde la navegación intuitiva hasta la descarga rápida y segura de tus juegos favoritos.</p>
                    <h3><span>2</span>Comunidad activa</h3>
                    <p>Únete a una comunidad apasionada de jugadores, comparte tus opiniones y descubre nuevos amigos con una pasión por los videojuegos.</p>
                </div>
                <img src="../img/ilutracion2.png" alt="" class="imagen-about-us">
            </div>
        </section>

        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Lista de Videojuegos</h2>
                <div class="galeria-port">

                    <div class="videojuego">
                        <img src="../img/img1.avif" alt="">
                        <div class="info-videojuego">
                            <h3>Minecraft</h3>
                            <p>Genero: Aventura</p>
                            <p>Desarrollado: Mojand</p>
                            <p>Año de Publicación: 2009</p>
                            <p>Puntaje (Según Vandal): 9.0</p>
                            <p>Descripción: Minecraft es un videojuego tipo sandbox, Los jugadores pueden modelar el mundo a su gusto,
                                 destruir y construir, como si estuviesen jugando en una caja de arena.</p>
                        </div>
                    </div>
                    <div class="videojuego">
                        <img src="../img/img2.webp" alt="">
                        <div class="info-videojuego">
                            <h3>Grand Theft Auto: San Andreas</h3>
                            <p>Genero:  Videojuego de acción y aventura, Videojuego de disparos en tercera persona, Videojuego no lineal</p>
                            <p>Desarrollado: Rockstar</p>
                            <p>Año de Publicación: 2004</p>
                            <p>Puntaje (Según Vandal): 9.7</p>
                            <p>Descripción: Grand Theft Auto: San Andreas es un videojuego de acción-aventura de 
                                mundo abierto desarrollado por Rockstar North y publicado por Rockstar Games.
                            </p>
                        </div>
                    </div>
                    <div class="videojuego">
                        <img src="../img/img3.jpg" alt="">
                        <div class="info-videojuego">
                            <h3>Warcraft III: The Frozen Throne</h3>
                            <p>Genero: Estrategia en tiempo real</p>
                            <p>Desarrollado: Blizzard</p>
                            <p>Año de Publicación: 2003</p>
                            <p>Puntaje (Según Vandal): 9.6</p>
                            <p>Descripción: Warcraft: The Frozen Throne es un videojuego de estrategia en tiempo real y expansión de
                                 Warcraft III: Reign of Chaos desarrollado por Blizzard Entertainment. La instalación de Warcraft III: Reign of Chaos es necesaria para poder jugar a esta expansión.</p>
                        </div>
                    </div>
                </section>
        

            </main>
            <footer>
        <div class="contenedor-footer">
                <div class="content-foo">
                    <h4><i class="fa fa-phone"></i> Teléfono</h4>
                    <p>+58 04129244276</p>
                </div>
                <div class="content-foo">
                    <h4><i class="fa fa-envelope"></i> Email</h4>
                    <p>playzone01@gmail.com</p>
                </div>
                <div class="content-foo">
                    <h4><i class="fa fa-share-alt"></i> Redes Sociales</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-youtube"></i> YouTube</a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="fa fa-discord"></i> Discord</a></li>
                    </ul>
                </div>
                <div class="content-foo">
                    <h4><i class="fa fa-map-marker"></i> Ubicación</h4>
                    <p>Venezuela</p>
                </div>
                <div class="content-foo">
                    <h4><i class="fa fa-users"></i> Únete a Nosotros</h4>
                    <ul>
                        <li><a href="../login/register.php"><i class="fa fa-user-plus"></i> Regístrate</a></li>
                        <li><a href="../condiciones_uso.php"><i class="fa fa-file"></i> Condiciones de uso</a></li>
                        <li><a href="../politica_privacidad.php"><i class="fa fa-lock"></i> Política de privacidad</a></li>
                    </ul>
                </div>
            </div>            
        </div>
        
        <h2 class="titulo-final">&copy; 2023 PlayZone. Todos los derechos reservados.</h2>
    </footer>
            
        </body>
        </html>