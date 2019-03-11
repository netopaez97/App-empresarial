<?php
$conexion = new mysqli("localhost", "root", "", "bd_integral");
 
$color = $_GET['q'];
 
$resultado = $conexion->query("SELECT * FROM producto_referencia WHERE nombre LIKE '%$color%'");
 
$datos = array();
 
while ($row=$resultado->fetch_assoc()){
 
	$datos[] = $row['nombre'];
}
	echo json_encode($datos);
?>