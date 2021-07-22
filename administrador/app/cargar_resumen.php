<?php 
require_once('../../assets/constants/conexion.php');

function getResumen(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT SA.Descripcion AS Des, RA.promdj AS PromFinal, RA.ptj as PTJ from resumen_asignatura RA INNER JOIN subareas SA ON RA.id_subarea = SA.IdSubArea where RA.id_alumno =$id";
  $result = $mysqli->query($query);
  $alumno = "<table class='table-notas'> <thead>
                        <tr>
                            <th class='font'>ASIGNATURAS</th>
                            <th class='font'>PROMEDIO</th>
                            <th class='font'>PUNTAJE</th>
                        </tr>
                </thead>";
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
   //$alumno .= "<option value='$row[Idal]'>$row[Surname], $row[Name]</option>";
     $alumno .= "
                <tbody>
                        <tr>
                            <td class='font'>$row[Des]</td>
                            <td class='font'>$row[PromFinal]</td>
                            <td class='font'>$row[PTJ]</td>
                        </tr>
                </tbody>";
  }

  $alumno .= " 
                  </table> <button onclick='pruebaDivAPdf()' id='btn-pdf'>Generar</button>";
  return $alumno;
}

echo getResumen();
