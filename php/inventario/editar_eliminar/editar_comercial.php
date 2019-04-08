<?php
    include('../../conexion.php');

    $id = $_POST['id'];
    $producto = $_POST['producto'];

    $bd = 'bd_integral';
    $sql_producto_comercial = "SELECT * FROM $bd.inv_comercial WHERE id = '$id'";
    $ejec_sql_producto_comercial = $conexion->query($sql_producto_comercial);

    //Mostrar producto de referencia
    $sql_prod_ref = "SELECT * FROM bd_integral.producto_referencia ORDER BY id";

	$ejec_sql_prod_ref = $conexion->query($sql_prod_ref);
?>
<!DOCTYPE html> 
<html lang="es">
<head>
    <title>Edición de producto comercial</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">	
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../estilos/estilos.css" />
    <link rel="stylesheet" href="../../../estilos/fontello.css" />
    <script>
        function cerrarVentana() {
            self.close();
        }
    </script>
</head>
<body>
    <div style="margin-top:40px;" class="col-md-12 descint">
        <span><b>Edición disponible para <?php echo $producto ?></b></span>
    </div>
    <div style="margin-top:15px;" class="table-responsive">    
        <form action="../../principal.php?id_prin=7" method="POST">
            <table class="table">
                <thead>
                    <tr>
                        <th>C&oacute;digo</th>
                        <th>Producto</th>
                        <th>Costo de la unidad</th>
                        <th>Fecha de compra</th>
                        <th>Estado del inventario</th>
                    </tr>
                </thead>
                <?php
                $iterador = 0;
                foreach ($ejec_sql_producto_comercial as $prod) {
                        $iterador = $iterador + 1;

                    $codigo = $prod['codigo'];
                    $producto = $prod['producto'];
                    $costo = $prod['costo'];
                    $fecha = $prod['fecha'];
                        $fechaBD = new DateTime("$fecha");
                        $fecha_hoy = new DateTime("now");
                        $diferencia = $fecha_hoy->diff($fechaBD);
                    $dias = $diferencia->days;
                    $estado = $prod['estado'];
                }
                ?>
            
                <tbody>
                    <td >
                        <div class="form-group">
                            <input value="<?php echo $codigo; ?>" class="inpbuscar" type="text" name="codigo_editar_comercial">
                        </div>
                    </td>
                    <td >
                        <select class="filtestado" name="producto_editar_comercial">
                            <?php

                            foreach ($ejec_sql_prod_ref as $prod) {
                                $nombre = $prod['nombre'];

                                if($nombre == $producto){
                                ?>
                                    <option selected="true" value="<?php echo $nombre ?>"><?php echo $nombre ?></option>
                                <?php
                                }
                                else{
                                ?>
                                    <option value="<?php echo $nombre ?>"><?php echo $nombre ?></option>
                                <?php
                                }
                            }

                            ?>
                        </select>
                    </td>
                    <td >
                        <div class="form-group">
                            <input value="<?php echo $costo; ?>" class="inpbuscar" type="text" name="costo_editar_comercial">
                        </div>
                    </td>
                    <td >
                        <div class="form-group">
                            <input value="<?php echo $fecha; ?>" class="inpbuscar" type="date" name="fecha_editar_comercial">
                        </div>
                    </td>
                    <td >
                        <div class="form-group">
                            <select class="filtestado" name="estado_editar_comercial">
                                <option>Disponible</option>
                                <option>No diponible</option>
                                <option>Facturado</option>
                            </select>
                        </div>
                    </td>
                    <input name="id_editar_comercial" type="number" value="<?php echo $id;?>" style="display:none">
                    
                </tbody>
            </table>
            <div ALIGN = "center">
                <button &nsbp; type="submit" class="btn btn-success">Enviar</button>
            </div>
            <div ALIGN = "center" >
                <button style="margin: 10px" type="button" class="btn btn-primary"><a href="../../principal.php?id_prin=7&eliminar_prod=1" style="color:#FFFFFF;">Volver</a></button>
            </div>
        </form>
    </div>
    
</body>