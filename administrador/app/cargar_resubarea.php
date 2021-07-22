<?php 
require_once('../../assets/constants/conexion.php');

function getResumen(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT  concat(al.Apellidos,',',al.Nombres) as Nomb, r.promjur as pj, r.promdoc as pd, r.ptj as ptj, r.prom1 as p1, r.prom2 as p2, r.prom3 as p3, r.prom4 as p4, r.promfinal as pfinal FROM resumen_asignatura r inner JOIN subareas sa ON r.id_subarea=sa.IdSubArea INNER JOIN areas a ON sa.id_area=a.IdArea INNER JOIN plan_estudios pl ON a.id_plan=pl.IdPlan inner join alumno al on r.id_alumno = al.IdAlumno where sa.IdSubArea=$id";
  $result = $mysqli->query($query);
  $alumno = "<table id='parent-id' class='table-notas'> <thead>
                        <tr>
                            <th class='nomb font'>ALUMNO</th>
                            <th class='p1 font'>UN1</th>
                            <th class='p2 font'>UN2</th>
                            <th class='p3 font'>UN3</th>
                            <th class='p4 font'>UN4</th>
                            <th class='pj font'>PJ</th>
                            <th class='pd font'>PD</th>
                            <th class='pfinal font'>PF</th>
                            <th class='ptj font'>PT</th>
                        </tr>
                </thead>";
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    //Codigo para filtrar los 0 por '-'
    if (preg_grep('/^[0]/',$row)){
       $row= preg_replace('/^[0]/', "-", $row);
      }
   //$alumno .= "<option value='$row[Idal]'>$row[Surname], $row[Name]</option>";
     $alumno .= "
                <tbody>
                        <tr>
                            <td class='nomb font'>$row[Nomb]</td>
                            <td class='p1 font'>$row[p1]</td>
                            <td class='p2 font'>$row[p2]</td>
                            <td class='p3 font'>$row[p3]</td>
                            <td class='p4 font'>$row[p4]</td>
                            <td class='pj font'>$row[pj]</td>
                            <td class='pd font'>$row[pd]</td>
                            <td class='pfinal font'>$row[pfinal]</td>
                            <td class='ptj font'>$row[ptj]</td>
                        </tr>
                </tbody>";
  }

  $alumno .= " 
                  </table> <button onclick='pruebaDivAPdf()' id='btn-pdf'>Generar</button>";
  return $alumno;
}

echo getResumen();
