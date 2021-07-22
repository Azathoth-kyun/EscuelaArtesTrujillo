<?php 
require_once('../../assets/constants/conexion.php');

function getArea(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT IdCiclo as IdCi, Descripcion as Descrip FROM ciclo";
  $result = $mysqli->query($query);
  $ciclo = '<option value="0">Elige un ciclo</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $ciclo .= "<option name='$id' value='$row[IdCi]'>$row[Descrip]</option>";
  }
  return $ciclo;
}

echo getArea();
