<div style="margin-top:25px;" class="col-md-12 descint">
	<span>Busca el producto que necesites.</span>
</div>

<div class="col-md-12">
	<div style="margin-top:27px;">

		<form action="principal.php?id_prin=1" method="POST">
    <div class="form-group">
        <label class="filtroproduct" for="estado_produc">Categoria: </label>
        <input class="inpbuscar" type="text" name="categoria_mostrar_comercial">
      </div>

      <div class="form-group">
        <label class="filtroproduct" for="estado_produc">Producto: </label>
        <input class="inpbuscar" type="text" name="producto_mostrar_comercial">
      </div>

			<div class="form-group">        
				<label class="filtroproduct" for="estado_produc">Estado del producto: </label>
				<select class="filtestado" name="estado_mostrar_comercial">
					<option>Disponible</option>
					<option>No diponible</option>
          <option>Facturado</option>
				</select>
			</div>

      <div class="checkbox">
        <label class="filtroproduct">Costo agrupado: Si <input class="cstagrop" name="costoagrup_mostrar_comercial" type="checkbox"></label>
      </div>

      <div class="form-group" style="margin-top: 25px;">
        <label class="filtroproduct" for="estado_produc">Fecha de compra entre: </label>
        <input class="inpbuscar" type="date" name="fecha1_mostrar_comercial"><input class="inpbuscar" type="date" name="fecha2_mostrar_comercial">
      </div>
			
			<button type="submit" class="btn btn-primary" style="margin-top: 25px;">Buscar</button>
		</form>

	</div>
</div>

<div style="margin-top:40px;" class="col-md-12 descint">
  <span><b>Inventario general.</b></span>
</div>

<div style="margin-top:15px;" class="table-responsive">  

<table class="table">
  <thead>
    <tr>
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
  foreach ($ejec_sql_invcom as $invcom) {
    $codigo = $invcom['codigo'];
    $producto = $invcom['producto'];
    $costo = $invcom['costo'];
    $fecha = $invcom['fecha'];
          $fechaBD = new DateTime("$fecha");
          $fecha_hoy = new DateTime("now");
    $dias = ($fecha_hoy->diff($fechaBD))->days;
    $estado = $invcom['estado'];  

    $fecha_bd = $fecha;
    $fecha_format = date('d/m/Y', strtotime($fecha_bd));

    $categoria = $invcom['categoria'];
    
?>  
  <tbody>
    <tr>
      <td><?php echo $categoria ?></td>
      <td><?php echo $codigo ?></td>
      <td><?php echo $producto ?></td>
      <td>$<?php echo number_format($costo) ?></td>
      <td><?php echo $fecha_format ?></td>
      <td><?php echo $dias ?></td>
      <td><?php echo $estado ?></td>
    </tr>
  </tbody>

  <?php } ?>
  </table>
  
</div>

<div style="margin-top:40px;" class="col-md-12 descint">
  <span><b>Inventario con costo agrupado.</b></span>
</div>

<div style="margin-top:15px;" class="table-responsive">          
  <table class="table">
  <thead>
    <tr>
      <th>C&oacute;digo</th>
      <th>Producto</th>
      <th>N&uacute;mero de unidades</th>
      <th>Costo de la unidad</th>
      <th>Costo total</th>
      <th>Promedio de dias del inventario</th>
      <th>Detalles</th>
    </tr>
  </thead>
  <?php
     foreach ($ejec_sql_costo_agrupado as $filtro) {

      $codigo = $filtro['codigo'];
      $nombre = $filtro['producto'];
      $costo = $filtro['costo'];
      $costo_total = $costo * $filtro['total'];
      $fecha_hoy = new DateTime("now");

      $sql_contar = "SELECT fecha FROM bd_integral.inv_comercial WHERE producto = '$nombre' AND costo='$costo'";
      $ejec_sql_contar = $conexion->query($sql_contar);

      $suma_dias = 0;
      $contador = 0;
      foreach ($ejec_sql_contar as $contar) {
        $fecha = $contar['fecha'];
        $fechaBD = new DateTime("$fecha");
        $dias = ($fecha_hoy->diff($fechaBD))->days;

        $suma_dias = $suma_dias + $dias;
        $contador = $contador + 1;
      }

      $promedio_dias =  $suma_dias/$contador;

      
  ?>
      <tbody>
              <tr>

              
                <td><?php echo $codigo ?></td>
                <td><?php echo $nombre ?></td>
                <td><?php echo $contador ?></td>
                <td>$<?php echo number_format($costo) ?></td>
                <td><?php echo number_format($costo_total) ?></td>
                <td><?php echo $promedio_dias ?></td>
                <td>
                  <form action="inventario/drill_down.php" target="_blank" method="post">
                    <input name="producto" value="<?php echo $nombre;?>" style="display:none">
                    <button type="submit" class="btn btn-primary" >Mírame</button>
                  </form>
                </td>
              

              </tr>
          </tbody>
  <?php
  }

?>  
  </table>
</div>