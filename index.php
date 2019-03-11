<?php 
	session_start(); 
    error_reporting(E_ALL ^ E_NOTICE);

    $error = $_GET['error'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador de soluciones</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos/estilos.css" />
</head>
<body class="bodyadmin">	
	<form class="login" action="sesion/validar.php" method="post">
		<div class="textitadmin">A.D.S</div>
		<div class="form-group">
			<input class="form-control" type="text" name="user" placeholder="Usuario">
		</div>
		<div class="form-group">
			<input class="form-control" type="text" name="pass" placeholder="Password">
		</div>
		<div>
			<input class="btn btn-primary" type="submit" value="Ingresar">
		</div>
		<?php if (isset($_SESSION['u_usuario'])) {
		}else{
		?>
		<div class="error"><?php echo $error ?></div>
		<?php } ?>
		
	</form>	
</body>
</html>