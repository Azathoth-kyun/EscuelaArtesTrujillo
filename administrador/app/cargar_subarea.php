<?php 
require_once('../../assets/constants/conexion.php');
function getSA(){
  $mysqli = getConn();
  $id = isset(($_POST['id'])) ? $_POST['id']: '';
  $datos = isset(($_POST['datos'])) ? $_POST['datos']: '1';
  $query = "SELECT SA.IdSubArea as IdSa, SA.Descripcion as Descrip FROM subareas SA inner join areas AR on SA.id_area = AR.IdArea inner join plan_estudios P On AR.id_plan = P.IdPlan inner join peracad A on P.id_periodo = A.idperiodo where SA.id_ciclo=$id and P.IdPlan= $datos";
  $result = $mysqli->query($query);
  $alumno = '<option value="0">Elige una subarea</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $alumno .= "<option value='$row[IdSa]'>$row[Descrip]</option>";
  }
  return $alumno;
}

echo getSA();
?>