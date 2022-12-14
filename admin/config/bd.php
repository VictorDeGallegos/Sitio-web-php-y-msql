<?php echo $txtID . "<br>";
echo $txtNombre . "<br>";
echo $txtImagen . "<br>";
echo $accion . "<br>";

$host = "localhost";
$bd = "sitio";
$usuario = "root";
$contrasenia = "1234";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasenia);
    if ($conexion) {
        echo "Conexion exitosa";
    }
} catch (Exception $e) {
    echo "Error de conexion: " . $e->getMessage();
}
