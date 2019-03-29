<div style="margin-top:40px;" class="col-md-12 descint">
  <span><b>Portafolio de servicios</b></span>
</div>

<?php $valor = '1200000' ?>

<?php
	foreach ($ejec_sql_inventario_servicios as $servicios) {
?>
		<div style="text-align: center;margin: 15px 0px;" class="container">
		<div style="margin-bottom: 35px;" class="row">
			<form class="form-inline" action="principal.php?id_prin=11" method="POST">		
				<div class="col-md-3"><b>Tipo de servicio: </b>Servicio1</div>
				<input type="hidden" value="" name="servicio">
	
				<div class="col-md-2"><b>valor: </b>$<?php echo number_format($valor) ?></div>
				<input type="hidden" value="1200000" name="valor">

				<div class="col-md-1"><input type="checkbox" name="desc_apr"></div>
				<div class="col-md-2"><b>Descuento en %: </b><input type="text" name="desc_porcentr"></div>
				<div class="col-md-2"><b>Descuento en valor: </b><input type="text" name="desc_valor"></div>
				<div class="col-md-1"><input type="submit" value="Aplicar" class="btn btn-primary"></div>
				<div class="col-md-1"><input type="submit" value="Siguiente" class="btn btn-primary"></div>
			</form>	
		</div>	
		<div style="margin-bottom: 8px;" class="row">
			<div class="col-md-2">algodon</div>
			<div class="col-md-2">gramos</div>
			<div class="col-md-1">15</div>
			<div class="col-md-2">$<?php echo number_format(3000) ?></div>
			<div class="col-md-4"></div>
		</div>
		<div style="margin-bottom: 8px;" class="row">
			<div class="col-md-2">algodon</div>
			<div class="col-md-2">gramos</div>
			<div class="col-md-1">15</div>
			<div class="col-md-2">$<?php echo number_format(3000) ?></div>
			<div class="col-md-4"></div>
		</div>
		<div style="margin-bottom: 8px;" class="row">
			<div class="col-md-2">algodon</div>
			<div class="col-md-2">gramos</div>
			<div class="col-md-1">15</div>
			<div class="col-md-2">$<?php echo number_format(3000) ?></div>
			<div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-1"><b>Total:</b></div>
			<div class="col-md-2"><b>$<?php echo number_format(9000) ?></b></div>
			<div class="col-md-4"></div>
		</div>
	</div>
<?php
	}
?>

<div style="text-align: center;margin: 15px 0px;" class="container">
	<div style="margin-bottom: 35px;" class="row">
		<form class="form-inline" action="principal.php?id_prin=11" method="POST">		
			<div class="col-md-3"><b>Tipo de servicio: </b>Servicio1</div>
			<input type="hidden" value="" name="servicio">
 
			<div class="col-md-2"><b>valor: </b>$<?php echo number_format($valor) ?></div>
			<input type="hidden" value="1200000" name="valor">

			<div class="col-md-1"><input type="checkbox" name="desc_apr"></div>
			<div class="col-md-2"><b>Descuento en %: </b><input type="text" name="desc_porcentr"></div>
			<div class="col-md-2"><b>Descuento en valor: </b><input type="text" name="desc_valor"></div>
			<div class="col-md-1"><input type="submit" value="Aplicar" class="btn btn-primary"></div>
			<div class="col-md-1"><input type="submit" value="Siguiente" class="btn btn-primary"></div>
		</form>	
	</div>	
	<div style="margin-bottom: 8px;" class="row">
		<div class="col-md-2">algodon</div>
		<div class="col-md-2">gramos</div>
		<div class="col-md-1">15</div>
		<div class="col-md-2">$<?php echo number_format(3000) ?></div>
		<div class="col-md-4"></div>
	</div>
	<div style="margin-bottom: 8px;" class="row">
		<div class="col-md-2">algodon</div>
		<div class="col-md-2">gramos</div>
		<div class="col-md-1">15</div>
		<div class="col-md-2">$<?php echo number_format(3000) ?></div>
		<div class="col-md-4"></div>
	</div>
	<div style="margin-bottom: 8px;" class="row">
		<div class="col-md-2">algodon</div>
		<div class="col-md-2">gramos</div>
		<div class="col-md-1">15</div>
		<div class="col-md-2">$<?php echo number_format(3000) ?></div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-2"></div>
		<div class="col-md-1"><b>Total:</b></div>
		<div class="col-md-2"><b>$<?php echo number_format(9000) ?></b></div>
		<div class="col-md-4"></div>
	</div>
</div>

<div style="text-align: center;margin: 15px 0px;" class="container">
	<div style="margin-bottom: 35px;" class="row">
		<form class="form-inline" action="principal.php?id_prin=11" method="POST">		
			<div class="col-md-3"><b>Tipo de servicio: </b>Servicio1</div>
			<input type="hidden" value="" name="servicio">
 
			<div class="col-md-2"><b>valor: </b>$<?php echo number_format($valor) ?></div>
			<input type="hidden" value="1200000" name="valor">

			<div class="col-md-1"><input type="checkbox" name="desc_apr"></div>
			<div class="col-md-2"><b>Descuento en %: </b><input type="text" name="desc_porcentr"></div>
			<div class="col-md-2"><b>Descuento en valor: </b><input type="text" name="desc_valor"></div>
			<div class="col-md-1"><input type="submit" value="Aplicar" class="btn btn-primary"></div>
			<div class="col-md-1"><input type="submit" value="Siguiente" class="btn btn-primary"></div>
		</form>	
	</div>
	<div style="margin-bottom: 8px;" class="row">
		<div class="col-md-2">algodon</div>
		<div class="col-md-2">gramos</div>
		<div class="col-md-1">15</div>
		<div class="col-md-2">$<?php echo number_format(3000) ?></div>
		<div class="col-md-4"></div>
	</div>
	<div style="margin-bottom: 8px;" class="row">
		<div class="col-md-2">algodon</div>
		<div class="col-md-2">gramos</div>
		<div class="col-md-1">15</div>
		<div class="col-md-2">$<?php echo number_format(3000) ?></div>
		<div class="col-md-4"></div>
	</div>
	<div style="margin-bottom: 8px;" class="row">
		<div class="col-md-2">algodon</div>
		<div class="col-md-2">gramos</div>
		<div class="col-md-1">15</div>
		<div class="col-md-2">$<?php echo number_format(3000) ?></div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-2"></div>
		<div class="col-md-1"><b>Total:</b></div>
		<div class="col-md-2"><b>$<?php echo number_format(9000) ?></b></div>
		<div class="col-md-4"></div>
	</div>	
</div>

<div style="text-align: center;margin: 15px 0px;" class="container">
	<div style="margin-bottom: 35px;" class="row">
		<form class="form-inline" action="principal.php?id_prin=11" method="POST">		
			<div class="col-md-3"><b>Tipo de servicio: </b>Servicio1</div>
			<input type="hidden" value="" name="servicio">
 
			<div class="col-md-2"><b>valor: </b>$<?php echo number_format($valor) ?></div>
			<input type="hidden" value="1200000" name="valor">

			<div class="col-md-1"><input type="checkbox" name="desc_apr"></div>
			<div class="col-md-2"><b>Descuento en %: </b><input type="text" name="desc_porcentr"></div>
			<div class="col-md-2"><b>Descuento en valor: </b><input type="text" name="desc_valor"></div>
			<div class="col-md-1"><input type="submit" value="Aplicar" class="btn btn-primary"></div>
			<div class="col-md-1"><input type="submit" value="Siguiente" class="btn btn-primary"></div>	
		</form>	
	</div>
	<div style="margin-bottom: 8px;" class="row">
		<div class="col-md-2">algodon</div>
		<div class="col-md-2">gramos</div>
		<div class="col-md-1">15</div>
		<div class="col-md-2">$<?php echo number_format(3000) ?></div>
		<div class="col-md-4"></div>
	</div>
	<div style="margin-bottom: 8px;" class="row">
		<div class="col-md-2">algodon</div>
		<div class="col-md-2">gramos</div>
		<div class="col-md-1">15</div>
		<div class="col-md-2">$<?php echo number_format(3000) ?></div>
		<div class="col-md-4"></div>
	</div>
	<div style="margin-bottom: 8px;" class="row">
		<div class="col-md-2">algodon</div>
		<div class="col-md-2">gramos</div>
		<div class="col-md-1">15</div>
		<div class="col-md-2">$<?php echo number_format(3000) ?></div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-2"></div>
		<div class="col-md-1"><b>Total:</b></div>
		<div class="col-md-2"><b>$<?php echo number_format(9000) ?></b></div>
		<div class="col-md-4"></div>
	</div>	
</div>


