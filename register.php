<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $user_type = $_POST["user_type"];
    
    // Definir el idioma basado en el tipo de usuario
    $idioma = ($user_type === "Turista") ? "Inglés" : "Español";

    $sql = "INSERT INTO usuarios (email, password, user_type, idioma) VALUES ('$email', '$password', '$user_type', '$idioma')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
        header("Location: login.html");
    } else {
        echo "Error en el registro: " . $conn->error;
    }
}
$conn->close();
?>