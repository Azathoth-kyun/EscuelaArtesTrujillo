<?php 
require_once('../../assets/constants/conexion.php');

function getAlumnos(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT A.idalumno as Idal, A.apellidos as Surname, A.nombres as Name FROM matricula M inner join alumno A On M.id_alumno = A.idalumno  INNER JOIN peracad PA ON M.id_periodo = PA.idperiodo where PA.idperiodo = $id ";
  $result = $mysqli->query($query);
  $alumno = '<option value="0">Elige un alumno</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $alumno .= "<option value='$row[Idal]'>$row[Surname], $row[Name]</option>";
  }
  return $alumno;
}

echo getAlumnos();
