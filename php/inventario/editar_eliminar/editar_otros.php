<?php
    include('../../conexion.php');

    $id = $_POST['id'];
    $producto = $_POST['producto'];

    $bd = 'bd_integral';
    $sql_producto_otros = "SELECT * FROM $bd.inv_otros WHERE id = '$id'";
    $ejec_sql_producto_otros = $conexion->query($sql_producto_otros);

?>
<!DOCTYPE html> 
<html lang="es">
<head>
    <title>Edición de producto otros</title>
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
                    <th>Producto</th>		
                    <th>Descripci&oacute;n de la compra</th>
                    <th>Comprado por</th>
                    <th>&Aacute;rea</th>
                    <th>Fecha de compra</th>
                    <th>Proveedor</th>
                    <th>Costo de la unidad</th>
                    <th>Unidades</th>
                    </tr>
                </thead>

                <?php
                    foreach ($ejec_sql_producto_otros as $otros) {
                        $producto = $otros['producto'];
                        $descripcion = $otros['descripcion'];
                        $comprador = $otros['comprador'];
                        $area = $otros['area'];
                        $fecha_compra = $otros['fecha_compra'];
                        $proveedor = $otros['proveedor'];
                        $costo = $otros['costo'];
                        $unidades = $otros['unidades'];
                        $id = $otros['id'];
                    }
                ?>
                <tbody>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $producto; ?>" class="inpbuscar" type="text" name="producto_editar_otros">
                        </div>
                    </td>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $descripcion; ?>" class="inpbuscar" type="text" name="descripcion_editar_otros">
                        </div>
                    </td>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $comprador; ?>" class="inpbuscar" type="text" name="comprador_editar_otros">
                        </div>
                    </td>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $area; ?>" class="inpbuscar" type="text" name="area_editar_otros">
                        </div>
                    </td>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $fecha_compra; ?>" class="inpbuscar" type="date" name="fecha_compra_editar_otros">
                        </div>
                    </td>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $proveedor; ?>" class="inpbuscar" type="text" name="proveedor_editar_otros">
                        </div>
                    </td>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $costo; ?>" class="inpbuscar" type="number" name="costo_editar_otros">
                        </div>
                    </td>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $unidades; ?>" class="inpbuscar" type="number" name="unidades_editar_otros">
                        </div>
                    </td>
                    <input name="id_editar_otros" type="number" value="<?php echo $id;?>" style="display:none">
                </tbody>
            </table>
            <div ALIGN = "center">
                <button &nsbp; type="submit" class="btn btn-success">Enviar</button>
            </div>
            <div ALIGN = "center" >
                <button style="margin: 10px" type="button" class="btn btn-primary"><a href="../../principal.php?id_prin=7&eliminar_prod=2" style="color:#FFFFFF;">Volver</a></button>
            </div>
        </form>
    </div>
<body>