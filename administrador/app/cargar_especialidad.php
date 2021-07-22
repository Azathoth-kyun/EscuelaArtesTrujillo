<?php 
require_once('../../assets/constants/conexion.php');

function getEspecialidad(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT P.IdPlan as Ides, P.Especialidad as Especialidad FROM plan_estudios P inner join peracad A On P.id_periodo = A.idperiodo  where A.idperiodo = $id ";
  $result = $mysqli->query($query);
  $especialidad = '<option value="0">Elige una especialidad</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $especialidad .= "<option value='$row[Ides]'>$row[Especialidad]</option>";
  }
  return $especialidad;
}

echo getEspecialidad();
