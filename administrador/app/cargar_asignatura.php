<?php 
require_once('../../assets/constants/conexion.php');

function getAsginatura(){
  $mysqli = getConn();
  $des = $_POST['des'];
  $query = "SELECT IdSubArea, Descripcion FROM subareas where status = !99 and Descripcion = $des";
  $result = $mysqli->query($query);
  $asignatura = '<option value="0">Elige un alumno</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $asignatura .= "<option value='$row[IdSubArea]'>$row[Descripcion]</option>";
  }
  return $asignatura;
}

echo getAsginatura();
