<?php
session_start(); // Iniciar sesión
session_destroy(); // Cerrar sesión y eliminar variables
header("Location: index.php"); // Redirigir a la página principal
exit();
?>