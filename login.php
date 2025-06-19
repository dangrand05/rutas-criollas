<?php
session_start(); // Iniciar sesión

// Verificar si ya hay una sesión activa
if (!isset($_SESSION)) {
    session_start();
}

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "rutas_criollas");

// Verifica errores de conexión
if ($conexion->connect_error) {
    die("Error en conexión: " . $conexion->connect_error);
}

// Procesar login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT id, email, password FROM usuarios WHERE email = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();

    if (password_verify($password, $row["password"])) {
        $_SESSION["usuario_id"] = $row["id"];
        $_SESSION["email"] = $row["email"];
        header("Location: index.php");
        exit();
    } else {
        echo "Error: Contraseña incorrecta.";
    }
} else {
    echo "Error: Correo incorrecto.";
}

}

$conexion->close();
?>