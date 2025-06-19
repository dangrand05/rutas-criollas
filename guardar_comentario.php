<?php
session_start(); // Iniciar sesión para obtener el usuario logueado

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "rutas_criollas");

if ($conexion->connect_error) {
    die("Error en conexión: " . $conexion->connect_error);
}

// Validar que haya un usuario logueado
if (!isset($_SESSION["usuario_id"])) {
    die("Error: No se ha iniciado sesión correctamente.");
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_SESSION["usuario_id"]; // Obtener el usuario correcto desde la sesión
    $comentario = $conexion->real_escape_string($_POST['comentario']); // Sanitizar entrada
    $fecha = date('Y-m-d H:i:s');

    // Insertar comentario en la base de datos
    $sql = "INSERT INTO comentarios (usuario_id, comentario, fecha) VALUES ('$usuario_id', '$comentario', '$fecha')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php"); // Redirigir a la página principal
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

$conexion->close();
?>