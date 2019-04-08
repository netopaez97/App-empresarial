<?php $eliminar_prod=$_GET['eliminar_prod'];?>

<div style="margin-top:25px;" class="col-md-12 descint">
	<span>Busca el producto que necesitas sacar del inventario.</span>
</div>


<div class="col-md-12 descint">
	<ul class="list-group">
		<li class="list-group-item"><a href="principal.php?id_prin=7&eliminar_prod=1">Inventario comercial</a></li>
		<li class="list-group-item"><a href="principal.php?id_prin=7&eliminar_prod=2">Inventario otros</a></li><li class="list-group-item"><a href="principal.php?id_prin=7&eliminar_prod=3">Inventario de activos</a></li>
	</ul>
</div>


<div class="container">
	<div class="row">
		<?php
		// Agregar inventario comercial
		if($eliminar_prod=='1') {
		?>
			<div class="col-md-12 titint">Inventario comercial</div>

			<div style="margin-top:25px;" class="col-md-12 descint">
				<span>Busca el producto que necesites.</span>
			</div>

			<div class="col-md-12">
				<div style="margin-top:27px;">

					<form action="principal.php?id_prin=7&eliminar_prod=1" method="POST">
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
							<select class="filtestado" name="esestado_mostrar_comercialtado">
								<option>Disponible</option>
								<option>No diponible y Facturado</option>					
							</select>
						</div>

						<div class="checkbox">
							<label class="filtroproduct">Costo agrupado: Si <input class="cstagrop" name="costoagrup" type="checkbox"></label>
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
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>

			<?php
				foreach ($ejec_sql_invcom as $invcom) {
					$id = $invcom['id'];
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
						<td>
							<!--IR A LA EDICION-->
							<form action="inventario/editar_eliminar/editar_comercial.php" method="post">
								<input name="id" value="<?php echo $id;?>" style="display:none">
								<input name="producto" value="<?php echo $producto;?>" style="display:none">
								<button type="submit" class="btn btn-success" >Editar</button>
              				</form>
						</td>
						<td>
							<!--IR A LA ELIMINACION-->
							<form action="principal.php?id_prin=7&eliminar_prod=1.php" method="post">
								<input name="id_eliminar_comercial" value="<?php echo $id;?>" style="display:none">
								<button type="submit" class="btn btn-danger">Eliminar</button>
              				</form>
						</td>
					</tr>
				</tbody>

				<?php } ?>
				</table>
				
			</div>

		<?php	
		}
		if($eliminar_prod=='2') {
		?>
			
			<div class="col-md-12 titint">Inventario otros</div>
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
					<th>Editar</th>
					<th>Eliminar</th>
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
						$id = $otros['id'];
					
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
					<td>
						<!--IR A LA EDICION-->
						<form action="inventario/editar_eliminar/editar_otros.php" method="post">
							<input name="id" value="<?php echo $id;?>" style="display:none">
							<input name="producto" value="<?php echo $producto;?>" style="display:none">
							<button type="submit" class="btn btn-success" >Editar</button>
						</form>
					</td>
					<td>
						<!--IR A LA ELIMINACION-->
						<form action="principal.php?id_prin=7&eliminar_prod=2.php" method="post">
							<input name="id_eliminar_otros" value="<?php echo $id;?>" style="display:none">
							<button type="submit" class="btn btn-danger">Eliminar</button>
						</form>
					</td>
				</tbody>
					<?php } ?>
			</table>
			</div>

		<?php
		}
		if($eliminar_prod=='3') {
		?>
			
			<div class="col-md-12 titint">Inventario activos</div>

			<div style="margin-top:25px;" class="col-md-12 descint">
				<span>Busca el producto que necesites.</span>
			</div>

			<div class="col-md-12">
				<div style="margin-top:27px;">

					<form class="form-inline" action="principal.php?id_prin=4" method="POST">
						<div class="form-group">
							<label class="filtroproduct" for="estado_produc">Activo: </label>
							<input class="inpbuscar" type="text" name="activo">
						</div>

						<div class="form-group">
							<label class="filtroproduct" for="estado_produc">Fecha de compra entre: </label>
							<input class="inpbuscar" type="date" name="fecha1"><input class="inpbuscar" type="date" name="fecha2">
						</div>
						<button type="submit" class="btn btn-primary">Buscar</button>
					</form>

				</div>
			</div>

			<div style="margin-top:40px;" class="col-md-12 descint">
			<span><b>Inventarios de activos.</b></span>
			</div>

			<div style="margin-top:15px;" class="table-responsive">          
			<table class="table">
				<thead>
					<tr>
					<th>Activo</th>		
					<th>Fecha de compra</th>
					<th>Valor de compra</th>
					<th>Tiempo de depreciaci&oacute;n</th>
					<th>Valor restante</th>
					<th>Editar</th>
					<th>Eliminar</th>
					</tr>
				</thead>
					<?php
				foreach ($ejec_sql_filtro_activos as $filtro) {
						
						$activo = $filtro['activo'];
						$fechacompra = $filtro['fecha_compra'];
						$valor = $filtro['valor'];
						$depreciacion = $filtro['depreciacion'];
						$valor_restante = 0;
						$id=$filtro['id'];

				
			?>
				<tbody>
						<tr>

						<td><?php echo $activo ?></td>
						<td><?php echo $fechacompra ?></td>
						<td>$<?php echo number_format($valor) ?></td>
						<td><?php echo $depreciacion ?></td>
						<td>$<?php echo number_format($valor_restante) ?></td>
						<td>
							<!--IR A LA EDICION-->
							<form action="inventario/editar_eliminar/editar_activos.php" method="post">
								<input name="id" value="<?php echo $id;?>" style="display:none">
								<input name="activo" value="<?php echo $activo;?>" style="display:none">
								<button type="submit" class="btn btn-success" >Editar</button>
							</form>
						</td>
						<td>
							<!--IR A LA ELIMINACION-->
							<form action="principal.php?id_prin=7&eliminar_prod=3" method="post">
								<input name="id_eliminar_activos" value="<?php echo $id;?>" style="display:none">
								<button type="submit" class="btn btn-danger">Eliminar</button>
							</form>
						</td>
						</tr>
					</tbody>
			<?php
			}

			?>
			</table>
			</div>
		
		<?php
		}
		?>
	</div>
</div>
			
Prueba modal
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
	Eliminar
</button>
<!-- Modal -->
<div class="modal fade" id="modal1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class=modal-header>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					&times;
				</button>
				<h5 class="modal-title">Ejemplo</h5>
			</div>
		</div>		
	</div>
</div>