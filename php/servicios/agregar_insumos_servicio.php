
<div class="col-md-12" style="margin: 16px 0px;">
	<span>Ingresa los insumos necesarios para el servicio que selecciones<b></b></span>
</div>

<div class="col-md-12"> 
	<form action="principal.php?id_prin=14" method="POST">
			
			<div class="dvint form-group">
				<div><b>Servicio:</b></div>		
				<select name="servicio_agregar_insumo_al_servicio" id="codigo">
				<?php
				foreach ($ejec_sql_servicio_agregar_insumo_al_servicio as $servicio) {
					$id_servicio = $servicio['id'];
					$nombre_servicio = $servicio['nombre'];
				?>
					<option value="<?php echo $id_servicio ?>"><?php echo utf8_encode($nombre_servicio) ?></option>
				<?php	
				}
				?>
				</select>
			</div>
		<div class="dvint form-group">
			<div><b>Insumo:</b></div>		
			<select name="insumo_agregar_insumo_al_servicio" id="codigo">
			<?php
			foreach ($ejec_sql_insumo_agregar_insumo_al_servicio as $insumo) {
				$id_insumo = $insumo['id'];
				$nombre_insumo = $insumo['insumo'];
			?>
				<option value="<?php echo $id_insumo ?>"><?php echo utf8_encode($nombre_insumo) ?></option>
			<?php	
			}
			?>
			</select>
		</div>
		<div class="dvint form-group"><input class="in form-control" type="number" name="cantidad_agregar_insumo_al_servicio" placeholder="Cantidad del insumo" min='1' required></div>


		<div style="margin-bottom: 45px;" class="dvint">
			<button type="submit" class="btn btn-primary">Agregar</button>
			<button type="submit" class="btn btn-danger"><a style="color:#FFFFFF" href="../php/index.php">Salir</a></button>
		</div>
	</form>
</div>