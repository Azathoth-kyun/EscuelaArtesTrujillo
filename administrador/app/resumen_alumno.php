<?php 
require_once('../../assets/constants/conexion.php');

function getResumenAlumno(){
  $mysqli = getConn();
  $idalumno = $_POST['ida'];
  $periodo = $_POST['idp'];
  $query = "SELECT SA.descripcion as Asignacion, C.descripcion as Ciclo FROM matricula M INNER JOIN peracad PA ON M.id_periodo = PA.idperiodo INNER JOIN ciclo C ON M.id_ciclo = C.idciclo INNER JOIN areas A ON M.id_plan = A.id_plan INNER JOIN subareas SA ON A.idarea = SA.id_area WHERE M.id_alumno = $idalumno and M.id_periodo = $periodo and SA.id_ciclo = M.id_ciclo";
  $result = $mysqli->query($query); 
  $alumno = "<thead>
                        <tr>
                            <th  style='text-align: center;'>Asignatura</th>
                            <th  style='text-align: center;'>Ciclo</th>
                        </tr>
                </thead>";
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
   //$alumno .= "<option value='$row[Idal]'>$row[Surname], $row[Name]</option>";
     $alumno .= "
                <tbody>
                        <tr>
                            <td>$row[Asignacion]</td>
                            <td  style='text-align:center; border-bottom: 1.2px solid #00A5A8;'>$row[Ciclo]</td>
                        </tr>

                </tbody> ";
  }
  return $alumno;
}

echo getResumenAlumno();
