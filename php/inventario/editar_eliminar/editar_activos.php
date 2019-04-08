<?php
    include('../../conexion.php');

    $id = $_POST['id'];
    $producto = $_POST['activo'];

    $bd = 'bd_integral';
    $sql_producto_activos = "SELECT * FROM $bd.inv_activos WHERE id = '$id'";
    $ejec_sql_producto_activos = $conexion->query($sql_producto_activos);

?>
<!DOCTYPE html> 
<html lang="es">
<head>
    <title>Edición de activos</title>
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
                        <th>Activo</th>		
                        <th>Fecha de compra</th>
                        <th>Valor de compra</th>
                        <th>Tiempo de depreciaci&oacute;n</th>
					</tr>
				</thead>

                <?php
                    foreach ($ejec_sql_producto_activos as $filtro) {
						
						$activo = $filtro['activo'];
						$fechacompra = $filtro['fecha_compra'];
						$valor = $filtro['valor'];
						$depreciacion = $filtro['depreciacion'];
						$id=$filtro['id'];
                    }
                ?>
                <tbody>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $activo; ?>" class="inpbuscar" type="text" name="producto_editar_activos">
                        </div>
                    </td>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $fechacompra; ?>" class="inpbuscar" type="date" name="fechacompra_editar_activos">
                        </div>
                    </td>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $valor; ?>" class="inpbuscar" type="number" name="valor_editar_activos">
                        </div>
                    </td>
                    <td >
                        <div class="dvint form-group">
                            <input value="<?php echo $depreciacion; ?>" class="inpbuscar" type="number" name="depreciacion_editar_activos">
                        </div>
                    </td>
                    <input name="id_editar_activos" type="number" value="<?php echo $id;?>" style="display:none">
                </tbody>
            </table>
            <div ALIGN = "center">
                <button &nsbp; type="submit" class="btn btn-success">Enviar</button>
            </div>
            <div ALIGN = "center" >
                <button style="margin: 10px" type="button" class="btn btn-primary"><a href="../../principal.php?id_prin=7&eliminar_prod=3" style="color:#FFFFFF;">Volver</a></button>
            </div>
        </form>
    </div>
<body>