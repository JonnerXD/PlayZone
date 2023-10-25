<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conexión a la base de datos (debes configurar las credenciales de tu base de datos)
    $mysqli = new mysqli('localhost', 'root', '', 'playzone');

    if ($mysqli->connect_error) {
        die("Error en la conexión a la base de datos: " . $mysqli->connect_error);
    }

    // Consulta SQL para buscar el usuario por nombre de usuario
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = ?";

    // Preparar la consulta
    $stmt = $mysqli->prepare($sql);

    // Vincular el parámetro
    $stmt->bind_param("s", $username);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener el resultado de la consulta
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // El usuario existe, verificar la contraseña
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['contrasena'])) {
            // Contraseña válida, el usuario está autenticado

            // Almacena el nombre de usuario en la sesión
            $_SESSION['username'] = $username;

            // Puedes redirigir al usuario a su área personal o página de inicio
            header('Location: ../dashboard/user_home.php');
            exit;
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $mysqli->close();
}
?>
