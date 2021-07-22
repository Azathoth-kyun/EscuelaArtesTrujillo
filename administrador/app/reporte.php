<?php
//include("conexion.php");
require_once("../../assets/constants/conexion.php");
$hoy = date("Y-m-d");
$mysqli = getConn();
$query="SELECT A.apellidos as SurName, A.nombres as Name from matricula M INNER JOIN alumno A ON M.id_alumno = A.idalumno where M.id_alumno = '1'";
$result = $mysqli->query($query);

$hoy = date("Y-m-d");
//rowspan="2"
?>
   <img src="../../assets/images/logo.png" width="350px" height="80px"><br>
<?php 
    while($value = $result->fetch_array(MYSQLI_ASSOC)){  
?>
   <table  border="1">
    <thead>
      <tr>
          <th >Apellidos </th>
          <th><?=$value['SurName']?></th>
          <th>Nombres </th>
          <th><?=$value['Name']?></th>
      </tr>
    </thead>
  </table>
<?php
  }  
?> 
   <label>Cedula:<strong>021-3434675-8</strong></label>

    <table  border="1" cellpadding="1" cellspacing="1">
        <tr>
          <td><strong>User</strong></td>
          <td><strong>Personal</strong></td>
          <td><strong>Rol</strong></td>
        </tr>
        <?php

          $query1="SELECT SA.Descripcion AS Des, RA.promdj AS PromFinal, RA.ptj as PTJ from resumen_asignatura RA INNER JOIN subareas SA ON RA.id_subarea = SA.IdSubArea where RA.id_alumno = '1'";
          $result1 = $mysqli->query($query1);
          while($row = $result1->fetch_array(MYSQLI_ASSOC)){
            //Codigo para filtrar los 0 por '-'
            if (preg_grep('/^[0]/',$row)){
            $row= preg_replace('/^[0]/', "-", $row);
            }
?>
          <tr>
            <td><?=$row['Des']?></td>
            <td><?=$row['PromFinal']?></td>
            <td><?=$row['PTJ']?></td>
          </tr>
          <?php
          }  
        ?> 
          <tr>
        </tr>
      </table>
      <strong style="color:red;">Fecha: <?php echo $hoy = date("Y-m-d H:i:s");?></strong>