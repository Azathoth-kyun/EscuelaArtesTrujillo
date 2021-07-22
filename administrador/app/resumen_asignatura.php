<?php 
require_once('../../assets/constants/conexion.php');

function getResumenAlumno(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT PA.Descripcion as PeriodoAcadémico, C.Descripcion as Ciclo, SA.Descripcion AS Asignatura FROM MATRICULA M INNER JOIN peracad PA ON M.id_periodo = PA.IdPeriodo INNER JOIN ciclo C ON M.id_ciclo = C.IdCiclo INNER JOIN SubAreas SA ON M.id_ciclo = SA.id_ciclo where M.id_alumno = $id ";
  $result = $mysqli->query($query);
  $alumno = "<thead>
                        <tr>
                            <th>Periodo Académico</th>
                            <th>Ciclo</th>
                            <th>Especilidad</th>
                        </tr>
                </thead>";
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
   //$alumno .= "<option value='$row[Idal]'>$row[Surname], $row[Name]</option>";
     $alumno .= "
                <tbody>
                        <tr>
                            <td>$row[PeriodoAcadémico]</td>
                            <td >$row[Ciclo]</td>
                            <td >$row[Asignatura]</td>
                            
                            </td>
                        </tr>

                </tbody> ";
  }
  return $alumno;
}

echo getResumenAlumno();


