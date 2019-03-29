<?php $agregar_prod=$_GET['agregar_prod'];?>

<div style="margin-top:40px;" class="col-md-12 descint">
	<span><b>Agregar producto a:</b></span>
</div>
<div class="col-md-12 descint">
	<ul class="list-group">
		<li class="list-group-item"><a href="principal.php?id_prin=5&agregar_prod=1">Inventario comercial</a></li>
		<li class="list-group-item"><a href="principal.php?id_prin=5&agregar_prod=2">Inventario otros</a></li><li class="list-group-item"><a href="principal.php?id_prin=5&agregar_prod=3">Inventario de activos</a></li>
	</ul>
</div>

<div class="container">
	<div class="row">
		<?php
		// Agregar inventario comercial
		if($agregar_prod=='1') {
		?>
		<div class="col-md-12 titint">Inventario comercial</div>

		<div class="col-md-12"> 
			<form action="principal.php?id_prin=5&agregar_prod=1" method="POST">
				<div class="dvint form-group"><input class="in form-control"  id="codigo" type="text" name="codigo" placeholder="Código" required></div>
				<div class="dvint form-group">
				<span><b>Seleccione el producto:</b></span>
				<select name="producto">
					<?php

					foreach ($ejec_sql_prod_ref as $prod) {
						$nombre = $prod['nombre'];
					?>
						<option value="<?php echo $nombre ?>"><?php echo $nombre ?></option>
					<?php	
					}

					?>
					</select>
				</div>
				<div class="dvint form-group"><input class="in form-control" type="number" name="costo" placeholder="Costo de la unidad" min='1' required></div>
				<div class="form-group"><span>Fecha de compra.</span></div>
				<div class="dvint form-group"><input class="in form-control" type="date" name="fecha" required></div>
				<div class="dvint form-group"><input class="in form-control" type="text" name="estado" value="Disponible" placeholder="Disponible" disabled></div>
				<div class="form-group"><span class="alt">Digita el n&uacute;mero de unidades que va a ingresar al inventario de este producto.</span></div>
				<div class="dvint form-group"><input class="in form-control" style="width: 15%;" type="number" name="cantidad" placeholder="numero de unidades" min='1' value="1" required></div>								
				<div style="margin-bottom: 45px;" class="dvint"><button type="submit" class="btn btn-primary">Agregar</button></div>
				<!--onkeydown significa que si escribo una letra, JS la va leyendo-->
			</form>
		</div>

		<?php	
			}
		?>

		<?php
		//Agregar inventario otros
		if($agregar_prod=='2') {
		?>
		<div class="col-md-12 titint">Inventario otros</div>

		<div class="col-md-12"> 
			<form action="principal.php?id_prin=5&agregar_prod=2" method="POST">

				

				<div class="dvint form-group"><input class="in form-control"  id="producto_agregar_otros" type="text" name="producto_agregar_otros" placeholder="Escriba el nombre del producto" required></div>
				<div class="dvint form-group"><input class="in form-control"  id="descripcion_agregar_otros" type="text" name="descripcion_agregar_otros" placeholder="Escriba una breve descripción del producto" required></div>
				<div class="dvint form-group"><input class="in form-control"  id="comprador_agregar_otros" type="text" name="comprador_agregar_otros" placeholder="Comprador del producto" required></div>
				<div class="dvint form-group"><input class="in form-control"  id="area_agregar_otros" type="text" name="area_agregar_otros" placeholder="Escriba el area a la que va dirigida el producto" required></div>
				<div class="form-group"><span>Fecha de compra.</span></div>
				<div class="dvint form-group"><input class="in form-control" type="date" name="fecha_compra_agregar_otros" required></div>
				<div class="dvint form-group"><input class="in form-control"  id="proveedor_agregar_otros" type="text" name="proveedor_agregar_otros" placeholder="Proveedor del producto" required></div>
				<div class="dvint form-group"><input class="in form-control" type="number" name="costo_agregar_otros" placeholder="Costo de la unidad" min='1' required></div>
				<div class="dvint form-group"><input class="in form-control" style="width: 15%;" type="number" name="cantidad_agregar_otros" placeholder="numero de unidades" min='1' value="1" required></div>	

				<div style="margin-bottom: 45px;" class="dvint"><button type="submit" class="btn btn-primary">Agregar</button></div>
				<!--onkeydown significa que si escribo una letra, JS la va leyendo-->
			</form>
		</div>

		<?php	
			}
		?>

		<?php
		// Agregar inventario activos
		if($agregar_prod=='3') {
		?>
		<div class="col-md-12 titint">Inventario de activos</div>

		<div class="col-md-12"> 
			<form action="principal.php?id_prin=5&agregar_prod=3" method="POST">

				<div class="dvint form-group"><input class="in form-control"  id="activo_agregar_activo" type="text" name="activo_agregar_activo" placeholder="Escriba el nombre del activo" required></div>
				<div class="form-group"><span>Fecha de compra.</span></div>
				<div class="dvint form-group"><input class="in form-control" type="date" name="fecha_compra_agregar_activo" required></div>
				<div class="dvint form-group"><input class="in form-control" type="number" name="valor_agregar_activo" placeholder="Costo" min='1' required></div>
				<div class="dvint form-group"><input class="in form-control" type="number" name="depreciacion_agregar_activo" placeholder="Años de depreciación del activo" min='1' required></div>
				<div class="dvint form-group"><input class="in form-control" style="width: 15%;" type="number" name="cantidad_agregar_activo" placeholder="Número de unidades" min='1' value="1" required></div>	


				<div style="margin-bottom: 45px;" class="dvint"><button type="submit" class="btn btn-primary">Agregar</button></div>
				<!--onkeydown significa que si escribo una letra, JS la va leyendo-->
			</form>
		</div>

		<?php	
			}
		?>
	</div>
</div>
			