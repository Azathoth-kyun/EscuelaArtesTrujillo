<?php 
require_once('../../assets/constants/conexion.php');

function getListasRep(){
  $mysqli = getConn();
  $query = "SELECT idperiodo,descripcion FROM peracad WHERE status = !99 ORDER BY idperiodo DESC";
  $result = $mysqli->query($query);
  $peracad = '<option value="0">Elige un periodo</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $peracad .= "<option value='$row[idperiodo]'>$row[descripcion]</option>";
  }
  return $peracad;
}

echo getListasRep();