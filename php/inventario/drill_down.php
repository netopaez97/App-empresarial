<?php
    include('../conexion.php');

    $producto = $_POST['producto'];

    $bd = 'bd_integral';
    $sql_producto_comercial = "SELECT * FROM $bd.inv_comercial WHERE producto = '$producto' ORDER BY id";
    $ejec_sql_producto_comercial = $conexion->query($sql_producto_comercial);
?>
    <!DOCTYPE html> 
    <html lang="es">
    <head>
        <title>Administrador de soluciones</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">	
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="../../estilos/estilos.css" />
        <link rel="stylesheet" href="../../estilos/fontello.css" />
        <script>
            function cerrarVentana() {
                self.close();
            }
        </script>
    </head>
    <body>
        <div style="margin-top:40px;" class="col-md-12 descint">
            <span><b>Detalles específicos de <?php echo $producto ?></b></span>
        </div>
        <div style="margin-top:15px;" class="table-responsive">    
            <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoria</th>
                    <th>C&oacute;digo</th>
                    <th>Producto</th>
                    <th>Costo de la unidad</th>
                    <th>Fecha de compra</th>
                    <th>Dias de inventario</th>
                    <th>Estado del inventario</th>
                </tr>
            </thead>
            <?php
            $iterador = 0;
            foreach ($ejec_sql_producto_comercial as $prod) {
                    $iterador = $iterador + 1;

                $categoria = $prod['categoria'];
                $codigo = $prod['codigo'];
                $nombre = $prod['producto'];
                $costo = $prod['costo'];
                $fecha = $prod['fecha'];
                    $fechaBD = new DateTime("$fecha");
                    $fecha_hoy = new DateTime("now");
                    $diferencia = $fecha_hoy->diff($fechaBD);
                $dias = $diferencia->days;
                $estado = $prod['estado'];
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $iterador ?></th>
                        <td ALIGN = "center"><?php echo $categoria ?></td>
                        <td ALIGN = "center"><?php echo $codigo ?></td>
                        <td ALIGN = "center"><?php echo $nombre ?></td>
                        <td ALIGN = "center"><?php echo $costo ?></td>
                        <td ALIGN = "center"><?php echo $fecha ?></td>
                        <td ALIGN = "center"><?php echo $dias ?></td>
                        <td ALIGN = "center"><?php echo $estado ?></td>
                </tr>
            </tbody>
            <?php
            }
            ?>
            </table>
        </div>
        <div ALIGN = "center">
            <button type="button" onclick="cerrarVentana()" class="btn btn-primary">Cerrar</button>
        </div>
        
    </body>
<?php
?>