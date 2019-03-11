<?php
    include("conexion.php");


    //* FILTRO INVENTARIO COMERCIAL *//

    // Recoger los datos de la tabla
    $nombre = $_POST['nombre'];
    $codigo = $_POST['codigo'];
    $costo = $_POST['costo'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];


    for ($i=1; $i < $cantidad ; $i++) { 
        // **** REALIZAR INSERCIÓN **** //
        $sql_insertar_inventario_comercial = "INSERT INTO bd_integral.inv_comercial(nombre,codigo,costo,fecha,estado,categoria) VALUES ('$nombre','$codigo','$costo','$fecha','$estado','$categoria')";

        $ejec_sql_insertar_producto_referencia = $conexion->query($sql_insertar_producto_referencia);
    }
    

    
    echo $nombre;
    echo $codigo;
?>
