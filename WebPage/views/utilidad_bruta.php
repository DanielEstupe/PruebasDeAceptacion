<!DOCTYPE html>
<?php
    include('../config/coneccion.php');
?>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>ComputerDB</title>
  <link rel="shortcut icon" href="../style/img/logo.png" />
  <link type="text/css" rel="stylesheet" href="../style/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <nav class="blue-grey darken-3">
    <div class="nav-wrapper">
      <a class="brand-logo center" id="brand">ComputerDB</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li class="active"><a href="http://localhost:8082/Proyecto_Web/index.html" >Inicio</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">

    <h3 class="center-align" id="util">Utilidad Bruta</h3>

     <form name="formulario" action="utilidad_bruta.php" method="POST" id="form">
       <div class="row">
         <div class="col s6">
           <h5>Meses</h5>
           <p >
            <input type="checkbox" class="filled-in"  id="ene" name="enero" value="1" />
            <label for="ene" id="enero">Enero</label>
          </p>
          <p >
           <input type="checkbox" class="filled-in" id="feb" name="febrero" value="2" />
           <label for="feb" id="febrero">Febrero</label>
          </p>
          <p >
           <input type="checkbox" class="filled-in" id="mar" name="marzo" value="3" />
           <label for="mar" id="marzo">Marzo</label>
          </p>
          <p >
           <input type="checkbox" class="filled-in" id="jul" name="julio" value="7" />
           <label for="jul" id="julio">Julio</label>
          </p>
        </div>
        <div class="col s6">
          <h5>Años</h5>
          <p >
           <input type="checkbox" class="filled-in" id="y2014" name="y2014" value="2014" />
           <label for="y2014" id="yr2014"> 2014</label>
         </p>
         <p >
          <input type="checkbox" class="filled-in" id="y2015" name="y2015" value="2015" />
          <label for="y2015" id="yr2015">2015</label>
        </p>
        <p >
         <input type="checkbox" class="filled-in" id="y2016" name="y2016" value="2016" />
         <label for="y2016" id="yr2016">2016</label>
       </p>
        </div>
        </div>
       <br>
       <div class="row">
       <button class="btn waves-effect waves-light" type="submit" name="Enviar" id="btnSubmit">Filtrar</button>
        </div>
     </form>

     <br><br>
    <table class="highlight" >
      <thead>
        <tr>
          <th>Año</th>
          <th>Mes</th>
          <th>Ingresos</th>
          <th>Egresos</th>
          <th>Utilidad Bruta</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if (isset($_POST['Enviar'])) {
            $meses = array("enero", "febrero", "marzo", "julio");
            $anhos = array("y2014", "y2015", "y2016");

            $lista_meses = $lista_anhos = "";

            foreach ($meses as $key) {
              if(isset($_POST[$key])) {
                if($lista_meses != "") {
                  $lista_meses .= ', ';
                }
                $lista_meses .= $_POST[$key];
              }
            }

            foreach ($anhos as $o) {
              if(isset($_POST[$o])) {
                if($lista_anhos != "") {
                  $lista_anhos .= ', ';
                }
                $lista_anhos .= $_POST[$o];
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
                <td class="years"><?php echo $a ?></td>
                <td class="months"><?php echo $b ?></td>
                <td class="revenue"><?php echo $c ?></td>
                <td class="expenses"><?php echo $d ?></td>
                <td class="utility"><?php echo $e ?></td>
              </tr>
          <?php
            }

          }
          sqlsrv_close( $conn);
          ?>
      </tbody>
    </table>

    </div>
    <br><br>
    <script type="text/javascript" src="../action/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../action/materialize.min.js"></script>
  </body>
