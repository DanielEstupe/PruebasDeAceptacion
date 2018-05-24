<?php $bandera = 0; ?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Año</th>
      <th scope="col">Mes</th>
      <th scope="col">Ingresos</th>
      <th scope="col">Egresos</th>
      <th scope="col">Utilidad Bruta</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(isset($_POST['btnSubmit'])) {
      $anhos = array("y2018", "y2017", "y2016", "y2015", "y2014");
      $meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "agosto", "noviembre", "diciembre");
      $lista_meses = $lista_anhos = "";

      foreach($anhos as $j) {
        if(isset($_POST[$j])) {
          if($lista_anhos != "") {
            $lista_anhos .= ', ';
          }
          $lista_anhos .= $_POST[$j];
        }
      }

      foreach($meses as $k) {
        if(isset($_POST[$k])) {
          if($lista_meses != "") {
            $lista_meses .= ', ';
          }
          $lista_meses .= $_POST[$k];
        }
      }

      $consulta = "exec sp_utilidad_bruta ?, ?" ;
      $param = array($lista_meses, $lista_anhos);
      $ejecutar = sqlsrv_query($conn, $consulta, $param);
      $i = 0;

      while($fila = sqlsrv_fetch_array($ejecutar)) {
        $a = $fila['Año'];
        $b = $fila['Mes'];
        $c = $fila['Ingresos'];
        $d = $fila['Egresos'];
        $e = $fila['Utilidad_Bruta'];
        $i++;
    ?>
    <tr>
      <td class="years" scope="row"><?php echo $a ?></td>
      <td class="months"><?php echo $b ?></td>
      <td class="revenue"><?php echo $c ?></td>
      <td class="expenses"><?php echo $d ?></td>
      <td class="utility"><?php echo $e ?></td>
    </tr>
    <?php
      }
      if($i == 0) {
        $bandera = 1;
      }
    }
    ?>
  </tbody>

</table>
<?php
  if($bandera) {
    echo '<h5 id="mensaje">No hay registros de la fecha solicitada.</h5>';
  } else {
    echo '<h5 id="mensaje"></h5>';
  }
?>
