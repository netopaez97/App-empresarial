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
	    </tr>
	  </thead>
		<?php
     foreach ($ejec_sql_filtro_activos as $filtro) {
			
			$activo = $filtro['activo'];
			$fechacompra = $filtro['fecha_compra'];
			$valor = $filtro['valor'];
			$depreciacion = $filtro['depreciacion'];
			$valor_restante = 0;

      
  ?>
      <tbody>
              <tr>

              <td><?php echo $activo ?></td>
              <td><?php echo $fechacompra ?></td>
              <td>$<?php echo number_format($valor) ?></td>
              <td><?php echo $depreciacion ?></td>
              <td>$<?php echo number_format($valor_restante) ?></td>
              </tr>
          </tbody>
  <?php
  }

?>
  </table>
</div>