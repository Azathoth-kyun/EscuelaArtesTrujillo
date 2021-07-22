<?php 
require_once('../../assets/constants/conexion.php');

function getResumenAlumno(){
  $mysqli = getConn();
  $idalumno = $_POST['ida'];
  $periodo = $_POST['idp'];
  $query = "SELECT RA.idresumen AS IDRA, RA.id_alumno AS IDAL, SA.idsubarea AS IDSB, SA.descripcion AS Asignacion, C.descripcion AS Ciclo, RA.id_periodo as IDPA, PA.descripcion AS DESPA from resumen_asignatura RA inner join subareas SA ON RA.id_subarea = SA.idsubarea INNER JOIN ciclo C ON SA.id_ciclo = C.idciclo INNER JOIN peracad PA ON RA.id_periodo = PA.idperiodo where RA.id_alumno = $idalumno and RA.id_periodo = $periodo";
  $result = $mysqli->query($query); 
  $alumno = "<thead>
                        <tr>
                            <th style='text-align: center;'>Asignatura</th>
                            <th style='text-align: center;'>Antecesor</th>
                            <th style='text-align: center;'>Ciclo</th>
                            <th style='text-align: center;'>Control</th>
                        </tr>
                </thead>";
                foreach ($result as $row) {
   //$alumno .= "<option value='$row[Idal]'>$row[Surname], $row[Name]</option>";
     $alumno .= "
                <tbody>
                        <tr>
                            <td ><input name='id' value='$row[IDRA]'></td>
                            <td>$row[Asignacion]</td>
                            <td>
                            <select style='width:250px;' name='predecesor'>";

                  $query1 = "SELECT S.prioridad AS IDPR, SA.descripcion AS Requisito FROM subareas S inner join subareas SA  ON S.prioridad = SA.idsubarea WHERE S.idsubarea = $row[IDSB]";
                  $subarea = $mysqli->query($query1);
                            //select S.Descripcion, SA.Descripcion from subareas S inner join subareas SA  ON SA.IdSubArea = S.prioridad WHERE S.IdSubArea = '1'
                            foreach ($subarea as $row1) {
        $alumno .= "
                            <option value='$row1[IDPR]'>$row1[Requisito]</option>
                            ";
                            }
         $alumno .= "                   
                            </select>
                            </td>
                            <td  style='text-align:center; border-bottom: 1.2px solid #00A5A8;'>$row[Ciclo]</td>
                            <td>
                             <button type='submit' name='btn_edit' class='btn btn-success'>Actualizar</button>
                             </td>
                        </tr>

                </tbody> ";
  }
  return $alumno;
}
echo getResumenAlumno();
