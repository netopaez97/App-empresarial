<div style="margin-top:40px;" class="col-md-12 descint">
  <span><b>Compras de insumos.</b></span>
</div>

<div style="margin-top:15px;" class="table-responsive">          
  <table class="table">
  <thead>
    <tr>
      <th>Insumo</th>
      <th>Unidad de medida</th>
      <th>Cantidad</th>  
      <th>Costo</th>
      <th>Fecha de compra</th>      
      <th>Fecha de vencimiento</th>    
      <th>Proveedor</th> 
    </tr>
  </thead>
  <?php
    foreach ($ejec_sql_inventario_insumos as $inv_insumos) {
      $insumo = $inv_insumos['insumo'];
      $unidad_medida = $inv_insumos['unidad_medida'];
      $costo = $inv_insumos['costo'];
      $fecha_compra = $inv_insumos['fecha_compra'];
      $fecha_vencimiento = $inv_insumos['fecha_vencimiento'];
      $proveedor = $inv_insumos['proveedor'];
      $cantidad = $inv_insumos['cantidad'];
  ?>
      <tbody>
        <tr>
          <td><?php echo utf8_encode($insumo) ?></td>
          <td><?php echo $unidad_medida ?></td>
          <td><?php echo $cantidad ?></td>
          <td>$<?php echo number_format($costo) ?></td>
          <td><?php echo $fecha_compra ?></td>       
          <td><?php echo $fecha_vencimiento ?></td>             
          <td><?php echo $proveedor ?></td>
        </tr>
      </tbody>
  <?php
    }
  ?>
  </table>
</div>

<div style="margin-top:40px;" class="col-md-12 descint">
  <span><b>Inventario de insumos.</b></span>
</div>

<div style="margin-top:15px;" class="table-responsive">          
  <table class="table">
  <thead>
    <tr>
      <th>Insumo</th>
      <th>Unidad de medida</th>
      <th>Cantidad</th> 
    </tr>
  </thead>
  <?php
    foreach ($ejec_sql_inventario_insumos as $inv_insumos) {
      $insumo = $inv_insumos['insumo'];
      $unidad_medida = $inv_insumos['unidad_medida'];
      $cantidad = $inv_insumos['cantidad'];
  ?>
      <tbody>
        <tr>
          <td><?php echo utf8_encode($insumo) ?></td>
          <td><?php echo $unidad_medida ?></td>
          <td><?php echo $cantidad ?></td>
        </tr>
      </tbody>
  <?php
    }
  ?>
  </table>
</div>