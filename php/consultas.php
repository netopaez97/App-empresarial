<?php
	session_start(); 
    error_reporting(E_ALL ^ E_NOTICE);

	$us = $_SESSION['u_usuario'];
	
	$BD = "bd_integral";

	// USUARIOS

	$sql_usuario = "SELECT * FROM bd_integral.usuarios WHERE usuario = '$us'";
	$ejec_sql_usuario = $conexion->query($sql_usuario);

	foreach ($ejec_sql_usuario as $user) {
		$id_user = $user['id'];
		$nombre_usuario = $user['nombre'];
	}


	// MOSTRAR INVENTARIO COMERCIAL

	$sql_invcom = "SELECT * FROM bd_integral.inv_comercial ORDER BY producto";
	$ejec_sql_invcom = $conexion->query($sql_invcom);

	// FILTRAR INVENTARIO COMERCIAL
	$cat = $_POST['categoria'];
    $prod = $_POST['producto'];
    $estado = $_POST['estado'];
    $fecha1 = $_POST['fecha1'];
	$fecha2 = $_POST['fecha2'];
	$switch = false;

	if($fecha1 =='' && $fecha2 ==''){

        $sql_invcom = "SELECT * FROM bd_integral.inv_comercial WHERE producto LIKE '%$prod%' AND categoria LIKE '%$cat%' AND estado LIKE '%$estado%'";

		$ejec_sql_invcom = $conexion->query($sql_invcom);
    }
    if($fecha1 !='' && $fecha2 != ''){
		$sql_invcom = "SELECT * FROM bd_integral.inv_comercial WHERE producto LIKE '%$prod%' AND categoria LIKE '%$cat%' AND estado LIKE '%$estado%' AND fecha BETWEEN '$fecha1' AND '$fecha2' ";
		
		$ejec_sql_invcom = $conexion->query($sql_invcom);
	}
	
	//MOSTRAR COSTO AGRUPADO EN INVENTARIO COMERCIAL
	$sql_costo_agrupado = "SELECT *, COUNT(*) as total FROM `inv_comercial` GROUP BY `producto`,`costo`";
    $ejec_sql_costo_agrupado = $conexion->query($sql_costo_agrupado);


	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	// MOSTRAR INVENTARIO OTROS
	$sql_inv_otros = "SELECT * FROM bd_integral.inv_otros ORDER BY id";
	$ejec_sql_inv_otros = $conexion->query($sql_inv_otros);
	
    $producto_otros = $_POST['producto'];
    $comprador_otros = $_POST['comprador'];
    $area_otros = $_POST['area'];
    $proveedor_otros = $_POST['proveedor'];
    $fecha1_otros = $_POST['fecha1'];
    $fecha2_otros = $_POST['fecha2'];

	
	if($fecha1_otros =='' && $fecha2_otros == ''){
		$sql_inv_otros = "SELECT * FROM bd_integral.inv_otros WHERE producto LIKE '%$producto_otros%' AND comprador LIKE '%$comprador_otros%' AND area LIKE '%$area_otros%' AND proveedor LIKE '%$proveedor_otros%'";

		$ejec_sql_inv_otros = $conexion->query($sql_inv_otros);  
    }
    if($fecha1_otros !='' && $fecha2_otros != ''){
		$sql_inv_otros = "SELECT * FROM bd_integral.inv_otros WHERE producto LIKE '%$producto_otros%' AND fecha_compra BETWEEN '$fecha1_otros' AND '$fecha2_otros' AND comprador LIKE '%$comprador_otros%' AND area LIKE '%$area_otros%' AND proveedor LIKE '%$proveedor_otros%'";
		
		$ejec_sql_inv_otros = $conexion->query($sql_inv_otros);  
	}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	// MOSTRAR INVENTARIO ACTIVOS

	$sql_filtro_activos = "SELECT * FROM bd_integral.inv_activos ORDER BY id";
	$ejec_sql_filtro_activos = $conexion->query($sql_filtro_activos);

	$activo = $_POST['activo'];
    $fecha1 = $_POST['fecha1'];
    $fecha2 = $_POST['fecha2'];


	// **** REALIZAR FILTROS **** //
	if($fecha1 =='' && $fecha2 == ''){
		$sql_filtro_activos = "SELECT * FROM bd_integral.inv_activos WHERE activo LIKE '%$activo%'";
		$ejec_sql_filtro_activos = $conexion->query($sql_filtro_activos);
    }
    if($fecha1 !='' && $fecha2 != ''){
		$sql_filtro_activos = "SELECT * FROM bd_integral.inv_activos WHERE activo LIKE '%$activo%' AND fecha_compra BETWEEN '$fecha1' AND '$fecha2' ";
		$ejec_sql_filtro_activos = $conexion->query($sql_filtro_activos);
    }

    
	

 //*********************************************** */

 //*********************************************** */

	
 // **** REALIZAR INSERCIÓN PRODUCTO REFERENCIA**** //

	$nombre_pr = $_POST['nombre_categoria'];
	$codigo_pr = $_POST['codigo_categoria'];

	if ($nombre_pr!='') {
		$sql_insertar_producto_referencia = "INSERT INTO bd_integral.producto_referencia (nombre,codigo_categoria) VALUES ('$nombre_pr','$codigo_pr')";

    	$ejec_sql_insertar_producto_referencia = $conexion->query($sql_insertar_producto_referencia);
	}else{}

// **** MOSTRAR CATEGORÍA EN AGREGAR PRODUCTO DE REFERENCIA**** //

	$sql_categoria_prod_ref = "SELECT * FROM bd_integral.categoria_int ORDER BY id";

	$ejec_sql_categoria_prod_ref = $conexion->query($sql_categoria_prod_ref);

// **** MOSTRAR PRODUCTO DE REFERENCIA EN INVENTARIO COMERCIAL ****//
	$sql_prod_ref = "SELECT * FROM bd_integral.producto_referencia ORDER BY id";

	$ejec_sql_prod_ref = $conexion->query($sql_prod_ref);

 // **** REALIZAR INSERCIÓN CATEGORIA**** //

	$nombre_categoria = $_POST['categoria'];

	if ($nombre_categoria!='') {
		$sql_insertar_categoria = "INSERT INTO bd_integral.categoria_int (categoria) VALUES ('$nombre_categoria')";

	$ejec_sql_insertar_categoria = $conexion->query($sql_insertar_categoria);
	}else{}
//**********************************************************************************
// **** REALIZAR INSERCIÓN PRODUCTOS**** //

// AGREGAR INVENTARIO COMERCIAL: agregar_producto.php //
$codigo_agregar_inv_comercial= $_POST['codigo'];
$producto_agregar_inv_comercial= $_POST['producto'];
$categoria_agregar_inv_comercial= $_POST['categoria_inv_com'];
$costo_agregar_inv_comercial= $_POST['costo'];
$fecha_agregar_inv_comercial= $_POST['fecha'];
$cantidad_agregar_inv_comercial= $_POST['cantidad'];

for ($i=1; $i <= $cantidad_agregar_inv_comercial; $i++) { 
	if ($producto_agregar_inv_comercial != ''){

		// Buscar la categoría en producto de referencia
		$buscando_categoría = "SELECT codigo_categoria FROM $BD.producto_referencia WHERE nombre = '$producto_agregar_inv_comercial' ";
		$ejec_buscando_categoría = $conexion->query($buscando_categoría);
		foreach ($ejec_buscando_categoría as $categoria) {
			$categoria_agregar_inv_comercial = $categoria['codigo_categoria'];
		}

		$sql_agregar_inv_comercial = "INSERT INTO $BD.inv_comercial (codigo,producto,costo,fecha,estado,categoria) VALUES ('$codigo_agregar_inv_comercial','$producto_agregar_inv_comercial','$costo_agregar_inv_comercial','$fecha_agregar_inv_comercial','Disponible','$categoria_agregar_inv_comercial')";
		
		$ejec_sql_agregar_inv_comercial = $conexion->query($sql_agregar_inv_comercial);
	}else{}
}

	// AGREGAR INVENTARIO OTROS: agregar_producto.php //

	$producto_agregar_inv_otros = $_POST['producto_agregar_otros'];
	$descripcion_agregar_inv_otros = $_POST['descripcion_agregar_otros'];
	$comprador_agregar_inv_otros = $_POST['comprador_agregar_otros'];
	$area_agregar_inv_otros = $_POST['area_agregar_otros'];
	$fecha_compra_agregar_inv_otros = $_POST['fecha_compra_agregar_otros'];
	$proveedor_agregar_inv_otros = $_POST['proveedor_agregar_otros'];
	$costo_agregar_inv_otros = $_POST['costo_agregar_otros'];
	$cantidad_agregar_inv_otros = $_POST['cantidad_agregar_otros'];

	for ($i=1; $i <= $cantidad_agregar_inv_otros; $i++) { 
		if ($producto_agregar_inv_otros != ''){

			$sql_agregar_inv_otros = "INSERT INTO $BD.inv_otros (producto, descripcion, comprador, area, fecha_compra, proveedor, costo, unidades) VALUES ('$producto_agregar_inv_otros','$descripcion_agregar_inv_otros','$comprador_agregar_inv_otros','$area_agregar_inv_otros','$fecha_compra_agregar_inv_otros','$proveedor_agregar_inv_otros', '$costo_agregar_inv_otros', '$cantidad_agregar_inv_otros')";
			
			
			$ejec_sql_agregar_inv_otros = $conexion->query($sql_agregar_inv_otros);
		}else{}
	}

	// AGREGAR INVENTARIO DE ACTIVOS: agregar_producto.php //
	$activo_agregar_activo = $_POST['activo_agregar_activo'];
	$fecha_compra_agregar_activo = $_POST['fecha_compra_agregar_activo'];
	$valor_agregar_activo = $_POST['valor_agregar_activo'];
	$depreciacion_agregar_activo = $_POST['depreciacion_agregar_activo'];
	$cantidad_agregar_activo = $_POST['cantidad_agregar_activo'];

	for ($i=1; $i <= $cantidad_agregar_activo; $i++) {
		if ($activo_agregar_activo != ''){
			$sql_agregar_inv_activos = "INSERT INTO $BD.inv_activos (activo, fecha_compra, valor, depreciacion) VALUES ('$activo_agregar_activo','$fecha_compra_agregar_activo','$valor_agregar_activo','$cantidad_agregar_activo')";
			
			$ejec_sql_agregar_inv_activos = $conexion->query($sql_agregar_inv_activos);
			
		}else{}
	}

	//MOSTRAR INVENTARIO DE INSUMOS: inventario_insumo.php
	$sql_inventario_insumos = "SELECT *, COUNT(*) as cantidad FROM $BD.insumos GROUP BY `insumo`, `fecha_compra`";
	$ejec_sql_inventario_insumos = $conexion->query($sql_inventario_insumos);

	//AGREGAR INVENTARIO DE INSUMO: invetario_insumo.php
	$insumo_agregar_insumo = $_POST['insumo_agregar_insumo'];
	$unidad_medida_agregar_insumo = $_POST['unidad_medida_agregar_insumo'];
	$cantidad_agregar_insumo = $_POST['cantidad_agregar_insumo'];
	$costo_agregar_insumo = $_POST['costo_agregar_insumo'];
	$fecha_compra_agregar_insumo = $_POST['fecha_compra_agregar_insumo'];
	$fecha_vencimiento_agregar_insumoo = $_POST['fecha_vencimiento_agregar_insumo'];
	$proveedor_agregar_insumo = $_POST['proveedor_agregar_insumo'];

	for ($i=1; $i <= $cantidad_agregar_insumo; $i++) {
		if ($insumo_agregar_insumo != ''){
			$sql_agregar_insumo = "INSERT INTO $BD.insumos (insumo, unidad_medida, costo, fecha_compra, fecha_vencimiento, proveedor) VALUES ('$insumo_agregar_insumo','$unidad_medida_agregar_insumo','$costo_agregar_insumo','$fecha_compra_agregar_insumo', '$fecha_vencimiento_agregar_insumoo', '$proveedor_agregar_insumo')";
			
			$ejec_sql_agregar_insumo = $conexion->query($sql_agregar_insumo);
			
		}else{}
	}
	

	//AGREGAR SERVICIO
	$nombre_agregar_servicio = $_POST['nombre_agregar_servicio'];
	$valor_agregar_servicio = $_POST['valor_agregar_servicio'];
	$numero_insumos_agregar_servicio = $_POST['numero_insumos_agregar_servicio'];
	
	if($nombre_agregar_servicio != '')
	{
		$sql_agregar_servicio = "INSERT INTO $BD.servicios (nombre, valor) VALUES ('$nombre_agregar_servicio','$valor_agregar_servicio')";
		$ejec_sql_agregar_servicio = $conexion->query($sql_agregar_servicio);
	}

	//MOSTRAR INVENTARIO DE SERVICIOS: servicios.php
	$sql_inventario_servicios = "SELECT * FROM $BD.servicios GROUP BY id";
	$ejec_sql_inventario_servicios = $conexion->query($sql_inventario_servicios);

	//MOSTRAR SERVICIOS EN AGREGAR INSUMO AL SERVICIO: agregar_insumos_servicio.php
	$sql_servicio_agregar_insumo_al_servicio = "SELECT * FROM $BD.servicios ORDER BY id";

	$ejec_sql_servicio_agregar_insumo_al_servicio = $conexion->query($sql_servicio_agregar_insumo_al_servicio);

	//MOTRAR INSUMOS EN AGREGAR INSUMO AL SERVICIO
	$sql_insumo_agregar_insumo_al_servicio = "SELECT * FROM $BD.insumos ORDER BY id";

	$ejec_sql_insumo_agregar_insumo_al_servicio = $conexion->query($sql_insumo_agregar_insumo_al_servicio);

	//AGREGAR INSUMO AL SERVICIO: agregar_insumos_servicio.php
	$servicio_agregar_insumo_al_servicio = $_POST['servicio_agregar_insumo_al_servicio'];
	$insumo_agregar_insumo_al_servicio = $_POST['insumo_agregar_insumo_al_servicio'];
	$cantidad_agregar_insumo_al_servicio = $_POST['cantidad_agregar_insumo_al_servicio'];
	
	$sql_buscar_id_servicio_agregar_insumo_al_servicio = "SELECT id FROM $BD.servicios WHERE nombre='$servicio_agregar_insumo_al_servicio'";

	$sql_buscar_id_insumo_agregar_insumo_al_servicio = "SELECT id FROM $BD.insumos WHERE insumo='$insumo_agregar_insumo_al_servicio'";

	if($servicio_agregar_insumo_al_servicio)
	{
		for ($i=0; $i < $cantidad_agregar_insumo_al_servicio; $i++) { 
			
			$sql_agregar_insumo_al_servicio = "INSERT INTO $BD.insumos_servicio (id_servicio, id_insumo) VALUES ('$servicio_agregar_insumo_al_servicio','$insumo_agregar_insumo_al_servicio')";
			
			
			$ejec_sql_agregar_insumo_al_servicio = $conexion->query($sql_agregar_insumo_al_servicio);
		}
		
	}
	

?>