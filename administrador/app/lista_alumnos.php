<?php 
require_once('../../assets/constants/conexion.php');

function getAlumnos(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT IdAlumno, Apellidos, Nombres from alumno where status = !99 ORDER BY Apellidos ASC";
  $result = $mysqli->query($query);
  $alumno = '<option value="0">Elige un alumno</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $alumno .= "<option value='$row[IdAlumno]'>$row[Apellidos], $row[Nombres]</option>";
  }
  return $alumno;
}

echo getAlumnos();
