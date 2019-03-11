<div style="margin-top:25px;" class="col-md-12 descint">
	<span>Busca el producto que necesitas sacar del inventario.</span>
</div>

<div class="col-md-12">
	<div style="margin-top:27px;">

		<form>
		<div class="form-group">
			<label class="filtroproduct" for="estado_produc">Producto: </label>
			<input class="inpbuscar" type="text" name="">
		</div>

		<div class="form-group">        
			<label class="filtroproduct" for="estado_produc">Estado del producto: </label>
			<select class="filtestado">
				<option>Disponible</option>
				<option>No diponible y Facturado</option>					
			</select>
		</div>


		<div class="form-group" style="margin-top: 25px;">
			<label class="filtroproduct" for="estado_produc">Fecha de compra entre: </label>
			<input class="inpbuscar" type="date" name=""><input class="inpbuscar" type="date" name="">
		</div>
			
			<button type="submit" class="btn btn-primary" style="margin-top: 25px;">Buscar</button>
		</form>

	</div>
</div>

<div style="margin-top:40px;" class="col-md-12 descint">
  <span><b>Inventario general.</b></span>
</div>

<div style="margin-top:15px;margin-bottom: 20px;" class="table-responsive">  
	<form>        
	  <table class="table">
	  <thead>
	    <tr>
	      <th>C&oacute;digo</th>
	      <th>Producto</th>
	      <th>Costo de la unidad</th>
	      <th>Fecha de compra</th>
	      <th>Dias de inventario</th>
	      <th>Estado del inventario</th>
	      <th></th>
	    </tr>
	  </thead>
	  
	  <tbody>
	    <tr>
	      <td>0001</td>
	      <td>Spark GT</td>
	      <td>$<?php echo number_format(24000000) ?></td>
	      <td>05/12/2018</td>
	      <td>5</td>
	      <td>Disponible</td>
	      <td><input type="checkbox" name="" value=""></td>
	    </tr>
	  </tbody>
	  <tbody>
	    <tr>
	      <td>0002</td>
	      <td>Camaro GT</td>
	      <td>$<?php echo number_format(170000000) ?></td>
	      <td>06/11/2018</td>
	      <td>360</td>
	      <td>No disponible y facturado</td>
	      <td><input type="checkbox" name="" value=""></td>	      
	    </tr>
	  </tbody>	  
	  </table>

	  <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Eliminar</button>
  </form>
</div>