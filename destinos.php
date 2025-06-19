<?php
// Conectar a MySQL
$conexion = new mysqli("localhost", "root", "", "rutas_criollas");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error en conexión: " . $conexion->connect_error);
}

// Obtener destino seleccionado (Si no hay selección, mostrar "Venezuela")
$destinoSeleccionado = $_GET['destino'] ?? "Venezuela";

// Consultar el mapa desde la base de datos
$sqlMapa = $conexion->prepare("SELECT mapa_url FROM destinos WHERE nombre = ?");
$sqlMapa->bind_param("s", $destinoSeleccionado);
$sqlMapa->execute();
$resultadoMapa = $sqlMapa->get_result();
$mapaUrl = ($resultadoMapa->num_rows > 0) ? $resultadoMapa->fetch_assoc()['mapa_url'] : "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8201067.855834783!2d-71.91356852974454!3d6.628917839298115";

// Consultar información adicional (hoteles, puntos de interés y lugares donde comer)
$sqlInfo = $conexion->prepare("SELECT hoteles, puntos_interes, lugares_comida FROM destinos WHERE nombre = ?");
$sqlInfo->bind_param("s", $destinoSeleccionado);
$sqlInfo->execute();
$resultadoInfo = $sqlInfo->get_result();
$infoDestino = ($resultadoInfo->num_rows > 0) ? $resultadoInfo->fetch_assoc() : null;

// Cerrar conexiones
$sqlMapa->close();
$sqlInfo->close();
$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas Criollas - Destinos Turísticos</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    text-align: center;
    background-color:rgb(255, 255, 255); 
    margin: 0;
    padding: 0;
    color: white; /* Letras blancas */
}

header {
    background-color:rgb(32, 140, 37); /* Verde más brillante */
    color: white;
    padding: 20px;
    font-size: 24px;
}

.selector {
    margin: 20px auto;
    padding: 20px;
    background-color:rgb(46, 181, 53); /* Verde medio */
    border-radius: 10px;
    width: 50%;
    box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.2); /* Sombra blanca */
}

select, button {
    font-size: 18px;
    padding: 10px;
    margin-top: 10px;
}

button {
    background-color: #66bb6a; /* Verde claro */
    color: black;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background-color:rgb(145, 198, 147); /* Verde más oscuro */
}

.info-destino {
    width: 50%;
    margin: 20px auto;
    padding: 20px;
    background-color:rgb(67, 184, 73); /* Verde brillante */
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.2);
    text-align: left;
}

.map-container {
    width: 80%;
    margin: auto;
    margin-top: 20px;
}

iframe {
    width: 100%;
    height: 450px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.2);
}
    </style>
</head>
<body>
    <header>
        <h1>Elija su próximo destino</h1>
    </header>

    <form action="" method="GET">
        <section class="selector">
            <label for="destino">Seleccione un destino:</label>
            <select name="destino" id="destino">
                <option value="" selected disabled>Seleccione un destino</option>
                <option value="Morrocoy">Parque Nacional Morrocoy</option>
                <option value="Los Roques">Los Roques</option>
                <option value="Mérida">Parque Nacional Cierra Nevada</option>
            </select>
            <button type="submit">Buscar</button>
        </section>
    </form>

    <?php if ($infoDestino && $destinoSeleccionado !== "Venezuela"): ?>
<section class="info-destino">
    <h2>Información del Destino</h2>
    <p><strong>Hoteles cercanos:</strong> <?php echo html_entity_decode($infoDestino['hoteles']); ?></p>
    <p><strong>Puntos de interés:</strong> <?php echo $infoDestino['puntos_interes']; ?></p>
    <p><strong>Lugares para comer:</strong> <?php echo html_entity_decode($infoDestino['lugares_comida']); ?></p>
</section>
<?php endif; ?>

    <section class="map-container">
        <h2>Mapa Interactivo</h2>
        <div>
            <iframe frameborder="0" src="<?php echo $mapaUrl; ?>" allowfullscreen></iframe>
        </div>
    </section>
</body>
</html>