
<?php

$host = getenv('DB_HOST');
$usuario = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$baseDatos = getenv('DB_NAME');

try {

    $conexion = new PDO(
        "mysql:host=$host;dbname=$baseDatos;charset=utf8mb4",
        $usuario,
        $password
    );

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $mensaje = "¡Hola Mundo!";
    $estado = "Conexión con MySQL realizada correctamente.";

    $consulta = $conexion->query("SELECT DATABASE()");
    $nombreBD = $consulta->fetchColumn();

} catch (PDOException $error) {

    $mensaje = "¡Hola Mundo!";
    $estado = "Error al conectar con MySQL: " . $error->getMessage();
    $nombreBD = "No disponible";

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo - Docker</title>
</head>

<body>

    <h1><?php echo $mensaje; ?></h1>

    <p><?php echo $estado; ?></p>

    <p>Base de datos: <?php echo htmlspecialchars($nombreBD); ?></p>

</body>

</html>
