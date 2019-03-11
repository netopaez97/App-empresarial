<?php 
    session_start(); 
    error_reporting(E_ALL ^ E_NOTICE);

    $usuario = $_POST['user'];	 
    $clave = $_POST['pass'];

    include("../php/conexion.php");

    $proceso = "SELECT * FROM bd_integral.usuarios WHERE usuario = '$usuario' AND pass = '$clave'";

    $ejec_sql_user = $conexion->query($proceso);

    if ($resultado = mysqli_fetch_array($ejec_sql_user)) {

    	$_SESSION['u_usuario'] = $usuario;
    	
    	header("Location: ../php/index.php");
    }else{
    	header("Location: ../index.php?error=datos no validos");
    }
?> 	