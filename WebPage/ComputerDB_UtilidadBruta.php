<!DOCTYPE html>
<?php include('config/coneccion.php'); ?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
    <br><br>
    <h1 class="text-center">Utilidad Bruta</h1>

    <div class="container">
      <form name="formulario" id="formulario" action="ComputerDB_UtilidadBruta.php" method="post">
        <h3>Años</h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="y2014" id="y2014" value="2014" >
          <label class="form-check-label" for="y2014">2014</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="y2015" id="y2015" value="2015" >
          <label class="form-check-label" for="y2015">2015</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="y2016" id="y2016" value="2016" >
          <label class="form-check-label" for="y2016">2016</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="y2017" id="y2017" value="2017" >
          <label class="form-check-label" for="y2017">2017</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="y2018" id="y2018" value="2018" >
          <label class="form-check-label" for="y2018">2018</label>
        </div>
        <br><br>
        <h3>Meses</h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="enero" id="enero" value="1" >
          <label class="form-check-label" for="enero">Enero</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="febrero" id="febrero" value="2" >
          <label class="form-check-label" for="febrero">Febrero</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="marzo" id="marzo" value="3" >
          <label class="form-check-label" for="marzo">Marzo</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="abril" id="abril" value="4" >
          <label class="form-check-label" for="abril">Abril</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="mayo" id="mayo" value="5" >
          <label class="form-check-label" for="mayo">Mayo</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="junio" id="junio" value="6" >
          <label class="form-check-label" for="junio">Junio</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="julio" id="julio" value="7" >
          <label class="form-check-label" for="julio">Julio</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="agosto" id="agosto" value="8" >
          <label class="form-check-label" for="agosto">Agosto</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="septiembre" id="septiembre" value="9" >
          <label class="form-check-label" for="septiembre">Septiembre</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="octubre" id="octubre" value="10" >
          <label class="form-check-label" for="octubre">Octubre</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="noviembre" id="noviembre" value="11" >
          <label class="form-check-label" for="noviembre">Noviembre</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="diciembre" id="diciembre" value="12" >
          <label class="form-check-label" for="diciembre">Diciembre</label>
        </div>
        <br><br>
        <button class="btn btn-outline-primary" type="submit" name="btnSubmit" id="btnSubmit">Filtrar</button>
      </form>

      <br><br>
      <?php
        include("showData.php");
      ?>
    </div>

    <br><br>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
