<div class="col-md-12 descint">
	<span>Ingresa los siguientes datos para agregar el producto de referencia.</span>
</div>

<div class="col-md-12"> 
	<form action="principal.php?id_prin=8" method="POST">
		<div class="dvint form-group">

		<select name="codigo_categoria" id="codigo">
		<?php

		foreach ($ejec_sql_categoria_prod_ref as $categoria) {
			$id_categoria = $categoria['id'];
			$nombre_categoria = $categoria['categoria'];
		?>
			<option value="<?php echo $id_categoria ?>"><?php echo $nombre_categoria ?></option>
		<?php	
		}

		?>
		</select>
		</div> 


		<div class="dvint form-group"><input class="in form-control" type="text" name="nombre_categoria" placeholder="Nombre del producto de referencia" required></div>

		<div style="margin-bottom: 45px;" class="dvint"><button type="submit" class="btn btn-primary">Agregar</button></div>
	</form>
</div>

