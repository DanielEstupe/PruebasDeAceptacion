<!DOCTYPE html>
<?php
    include('../config/coneccion.php');
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Documento</title>
  </head>
  <body>
    <form class="" action="prueba.php" method="post">
      <input type="checkbox" name="prueba" id="prueba" value="1">
      <button type="submit" name="button" id="button">Enviar</button>
    </form>

    <table>
      <thead>
        <tr>
          <th>Cliente</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if (isset($_POST['button'])) {
            $consulta = "select idCliente from Clientes";
            $ejecutar = sqlsrv_query($conn, $consulta);

            $i = 0;
            while($fila = sqlsrv_fetch_array($ejecutar)) {
              $cliente = $fila['idCliente'];
              $i++;
        ?>
              <tr>
                <td class="clientes"> <?php echo $cliente ?> </td>
              </tr>
          <?php
            }

          }
         ?>
      </tbody>
    </table>
  </body>
</html>
