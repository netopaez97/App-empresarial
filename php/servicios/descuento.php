<?php
	$servicio = $_POST['servicio']; 
	$valor_servicio = $_POST['valor'];
	$desc_porcentr = $_POST['desc_porcentr'];
	$desc_valor = $_POST['desc_valor'];
?>

<?php

if ($desc_porcentr !='' || $desc_valor !='') {

	if ($desc_porcentr!='') {		

		$valor_des_porce = $desc_porcentr/100;
		$valorporcent = $valor_servicio*$valor_des_porce;

		$valorserv = $valor_servicio-$valorporcent;
?>

<div style="margin-top:40px;" class="col-md-12 descint">
  <span><b>Servicio con descuento</b></span>
</div>

<div class="container">
	<div style="margin-top: 11px;" class="row">
		<div class="col-md-3"><b>Servicio</b></div>
		<div class="col-md-3"><b>Valor</b></div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
</div>
<div style="margin-top: 17px;" class="container">
	<div class="row">
		<div class="col-md-3">Servicio 1</div>
		<div class="col-md-3">$<?php echo number_format($valorserv) ?></div>
		<div class="col-md-3"><input type="" class="btn btn-primary" name="" value="Facturar"></div>
		<div class="col-md-3"></div>
	</div>
</div>

<?php
	}else if ($desc_valor!='') {

		$valorserv = $valor_servicio-$desc_valor;
?>

<div style="margin-top:40px;" class="col-md-12 descint">
  <span><b>Servicio con descuento</b></span>
</div>

<div class="container">
	<div style="margin-top: 11px;" class="row">
		<div class="col-md-3"><b>Servicio</b></div>
		<div class="col-md-3"><b>Valor</b></div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
</div>
<div style="margin-top: 17px;" class="container">
	<div class="row">
		<div class="col-md-3">Servicio 1</div>
		<div class="col-md-3">$<?php echo number_format($valorserv) ?></div>
		<div class="col-md-3"><input type="" class="btn btn-primary" name="" value="Facturar"></div>
		<div class="col-md-3"></div>
	</div>
</div>

<?php
	}	
}else{
?>
	<div style="margin-top:40px;" class="col-md-12 descint">
	  <span><b>Servicio</b></span>
	</div>


	<div class="container">
		<div style="margin-top: 11px;" class="row">
			<div class="col-md-3"><b>Servicio</b></div>
			<div class="col-md-3"><b>Valor</b></div>
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
		</div>
	</div>
	<div style="margin-top: 17px;" class="container">
		<div class="row">
			<div class="col-md-3">Servicio 1</div>
			<div class="col-md-3">$<?php echo number_format($valor_servicio) ?></div>
			<div class="col-md-3"><input type="" class="btn btn-primary" name="" value="Facturar"></div>
			<div class="col-md-3"></div>
		</div>
	</div>

<?php
}	
?>