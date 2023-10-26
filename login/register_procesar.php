<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = $_POST['new-username'];
    $email = $_POST['email'];
    $newPassword = $_POST['new-password'];
    $country = $_POST['country'];

    // Conexión a la base de datos (debes configurar las credenciales de tu base de datos)
    $mysqli = new mysqli('localhost', 'root', '', 'playzone');

    if ($mysqli->connect_error) {
        die("Error en la conexión a la base de datos: " . $mysqli->connect_error);
    }

    // Consulta SQL para insertar datos en la tabla de usuarios (debes crear esta tabla)
    $sql = "INSERT INTO usuarios (nombre_usuario, correo, contrasena, pais) VALUES (?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $mysqli->prepare($sql);

    // Encriptar la contraseña antes de almacenarla (puedes usar funciones de hash seguras)
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Vincular los parámetros
    $stmt->bind_param("ssss", $newUsername, $email, $hashedPassword, $country);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Registro exitoso, puedes redirigir al usuario a otra página, por ejemplo, la página de inicio de sesión.
        header('Location: login.html');
        exit;
    } else {
        // Error en la consulta
        echo "Error al registrar el usuario: " . $stmt->error;
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $mysqli->close();
}
?>
