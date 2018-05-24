<?php
$serverName = 'HP\SQLEXPRESS';
$connectionInfo = array("Database"=>"ComputerDB", "UID"=>"DB", "PWD"=>"P1m3sk0ns0la", "CharacterSet"=>"UTF-8");
$conn = sqlsrv_connect($serverName, $connectionInfo);

/*
if($conn) {
  echo "conexion exitosa";
} else {
  echo "fallo en la coneccion";
  die(print_r(sqlsrv_errors(), true));
}
*/
