<?php
session_start();
session_destroy();
header('Location: ../login/login.html'); // Redirigir al usuario a la página de inicio de sesión
?>