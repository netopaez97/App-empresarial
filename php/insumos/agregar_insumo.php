<div class="col-md-12 descint">
	<span>Ingresa los siguientes datos para agregar un insumo.</span>
</div>

<div class="col-md-12"> 
	<form action="principal.php?id_prin=13" method="POST">
		<div class="dvint form-group"><input class="in form-control" type="text" name="insumo_agregar_insumo" placeholder="Nombre del insumo" required></div>
		<div class="dvint form-group"><input class="in form-control" type="text" name="unidad_medida_agregar_insumo" placeholder="Unidad de medida del insumo" required></div>
		<div class="dvint form-group"><input class="in form-control" type="number" name="cantidad_agregar_insumo" placeholder="Cantidad del insumo" min='1' required></div>
		<div class="dvint form-group"><input class="in form-control" type="text" name="costo_agregar_insumo" placeholder="Costo del insumo" required></div>	
		<div><b>Fecha de compra</b></div>				
		<div class="dvint form-group"><input class="in form-control" type="date" name="fecha_compra_agregar_insumo" placeholder="Fecha de compra" required></div>
		<div><b>Fecha de vencimiento</b></div>		
		<div class="dvint form-group"><input class="in form-control" type="date" name="fecha_vencimiento_agregar_insumo" placeholder="Fecha de vemcimiento" required></div>
		<div class="dvint form-group"><input class="in form-control" type="text" name="proveedor_agregar_insumo" placeholder="Proveedor" required></div>		

		<div style="margin-bottom: 45px;" class="dvint"><button type="submit" class="btn btn-primary">Agregar</button></div>
	</form>
</div>
	