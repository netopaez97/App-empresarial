<?php 
	session_start(); 
    error_reporting(E_ALL ^ E_NOTICE);

    if (isset($_SESSION['u_usuario'])) {   
?>

<!DOCTYPE html> 
<html lang="es">
<head>
	<title>Administrador de soluciones</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">	
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="../estilos/estilos.css" />
	<link rel="stylesheet" href="../estilos/fontello.css" />
</head>
<body>
	<?php 
		$id_prin=$_GET['id_prin']; 

		include("conexion.php");
		include("consultas.php");
	?> 
	<header>
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu" class="icon-menu"></label>

		<div class="conttop1"><a href="../sesion/logout.php">Salir</a></div>
		<div class="conttop2"><span><?php echo $nombre_usuario ?></span></div>

		<nav class="menu">
			<ul>                        
				<li class="submenu"><a href="#">Inventario<span class="icon-down-open"></span></a>	
					<ul>
						<li><a href="principal.php?id_prin=1">Comercial</a></li>
						<li><a href="principal.php?id_prin=3">Otros</a></li>
						<li><a href="principal.php?id_prin=4">Activos</a></li>
						<li class="submenu"><a href="#">Modificar Inventario<span class="icon-down-open"></span></a>
							<ul class="contsubsec">
								<li class="subsec"><a href="principal.php?id_prin=5">Agregar producto</a></li>
								<li class="subsec"><a href="principal.php?id_prin=8">Agregar producto de referencia</a></li>
								<li class="subsec"><a href="principal.php?id_prin=9">Agregar categoría</a></li>
								<li class="subsec"><a href="principal.php?id_prin=6">Modificar producto</a></li>
								<li class="subsec"><a href="principal.php?id_prin=7">Eliminar producto</a></li>			
							</ul>
						</li>
					</ul>
				</li>
				<li class="submenu"><a href="#">Nomina<span class="icon-down-open"></span></a>
				</li>
			</ul>			
		</nav>
	</header>

	<div class="container">
		<div class="row">
			<?php
			if($id_prin=='1') {
		?>
			<div class="col-md-12 titint">Inventario comercial</div>

			<?php include("inventario/invetario_comercial.php"); ?>

		<?php	
			 }else if ($id_prin=='3') {
		?>
			<div class="col-md-12 titint">Otros inventarios</div>

			<?php include("inventario/otros_inventarios.php"); ?>

		<?php
			 }else if ($id_prin=='4') {
		?>
			<div class="col-md-12 titint">Inventarios de activos</div>

			<?php include("inventario/inventario_activos.php"); ?>

		<?php
			 }else if ($id_prin=='5') {
		?>
			<div class="col-md-12  titint">Agregar producto a inventario</div>
			
			<?php include("inventario/agregar_producto.php") ?>

		<?php
			 }else if ($id_prin=='6') {
		?>
			<div class="col-md-12  titint">Modificar producto de inventario</div>
			
			<?php include("inventario/modificar_invt.php") ?>

		<?php
			 }else if ($id_prin=='7') {
		?>
			<div class="col-md-12  titint">Eliminar producto de inventario</div>
			
			<?php include("inventario/eliminar_invt.php") ?>

		<?php
			 }else if ($id_prin=='8') {
		?>
				<div class="col-md-12  titint">Agregar producto de referencia</div>

				<?php include("inventario/agregar_producto_referencia.php") ?>
		<?php
			 }else if ($id_prin=='8') {
		?>
				<div class="col-md-12  titint">Agregar producto de referencia</div>

				<?php include("inventario/agregar_producto_referencia.php") ?>
		<?php
			 }else if ($id_prin=='9') {
				?>
						<div class="col-md-12  titint">Agregar categoría</div>
		
						<?php include("inventario/agregar_categoria.php") ?>
				<?php
					 }
		?> 
		</div>	
	</div>	

	<script src="../js/menu.js"></script>
</body>
</html>

<?php  }else{
	header("Location:../index.php");
} ?>