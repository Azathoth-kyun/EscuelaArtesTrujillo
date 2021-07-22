<?php 
require_once('../../assets/constants/conexion.php');

function getAlumnos(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT PA.idperiodo as IDPA,PA.descripcion as PeriodoAcadémico, C.descripcion as Ciclo, PE.descripcion as DPE, PE.especialidad as Esp FROM matricula M INNER JOIN peracad PA ON M.id_periodo = PA.IdPeriodo INNER JOIN ciclo C ON M.id_ciclo = C.idciclo INNER JOIN plan_estudios PE ON M.id_plan = PE.idplan where M.id_alumno = $id and M.status = !99 ORDER BY PA.idperiodo ASC";
  $result = $mysqli->query($query);
  $alumno = '<option value="0">Elige un Periodo</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $alumno .= "<option value='$row[IDPA]'>$row[PeriodoAcadémico]</option>";
  }
  return $alumno;
}

echo getAlumnos();
