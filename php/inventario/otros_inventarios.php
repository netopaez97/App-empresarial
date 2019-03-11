<div style="margin-top:25px;" class="col-md-12 descint">
	<span>Busca el producto que necesites.</span>
</div>

<div class="col-md-12">
	<div style="margin-top:27px;">

		<form class="form-inline" action="principal.php?id_prin=3" method="POST">
			<div class="form-group">
				<label class="filtroproduct" for="estado_produc">Producto: </label>
				<input class="inpbuscar" type="text" name="producto">
			</div>
			<div class="form-group">
				<label class="filtroproduct" for="estado_produc">Comprado por: </label>
				<input class="inpbuscar" type="text" name="comprador">
			</div>
			<div class="form-group">
				<label class="filtroproduct" for="estado_produc">&Aacute;rea: </label>
				<input class="inpbuscar" type="text" name="area">
			</div>
			<div class="form-group" style="margin-top: 25px;">
				<label class="filtroproduct" for="estado_produc">Proveedor: </label>
				<input class="inpbuscar" type="text" name="proveedor">
			</div>
			<div class="form-group" style="margin-top: 25px;">
		        <label class="filtroproduct" for="estado_produc">Fecha de compra entre: </label>
		        <input class="inpbuscar" type="date" name="fecha1"><input class="inpbuscar" type="date" name="fecha2">
		    </div>
			<button type="submit" class="btn btn-primary" style="margin-top: 25px;">Buscar</button>
		</form>

	</div>
</div>

<div style="margin-top:40px;" class="col-md-12 descint">
  <span><b>Otros inventarios.</b></span>
</div>

<div style="margin-top:15px;" class="table-responsive">          
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
	      <th>Costo total</th>
	    </tr>
	  </thead>

		<?php
			foreach ($ejec_sql_inv_otros as $otros) {
				$producto = $otros['producto'];
				$descripcion = $otros['descripcion'];
				$comprador = $otros['comprador'];
				$area = $otros['area'];
				$fecha_compra = $otros['fecha_compra'];
				$proveedor = $otros['proveedor'];
				$costo = $otros['costo'];
				$unidades = $otros['unidades'];
			
		?>
	  <tbody>	  
	    <tr>
	      <td><?php echo $producto ?></td>		
	      <td><?php echo utf8_encode($descripcion)  ?></td>
	      <td><?php echo $comprador ?></td>
	      <td><?php echo $area ?></td>
	      <td><?php echo $fecha_compra ?></td>
	      <td><?php echo utf8_decode(utf8_encode($proveedor))  ?></td>
	      <td><?php echo number_format($costo) ?></td>
	      <td><?php echo $unidades ?></td>
	      <?php $tototrinvt = $costo*$unidades; ?> 
	      <td>$<?php echo number_format($tototrinvt) ?></td>
	  </tbody>
		<?php } ?>
  </table>
</div>