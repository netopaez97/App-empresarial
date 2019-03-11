<?php 

	function conectarse()
	{
		$servidor = "localhost";
		$usuario = "root";
		$password = ""; 
		$bd = "bd_integral";

		$conectar = new mysqli($servidor,$usuario,$password,$bd) or die("coenxion fallida a la BD");
		return $conectar;

	}

	$conexion = conectarse();

?>