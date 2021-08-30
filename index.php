<?php
require_once "clases/conexion/conexion.php";

$conexion = new conexion();
$query = "SELECT * FROM category";
$query = "SELECT * FROM product";

print_r($conexion->obtenerDatos($query));


?>

