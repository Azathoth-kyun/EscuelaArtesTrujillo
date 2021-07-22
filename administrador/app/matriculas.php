<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['btn_save']))
{
	$asig = $conn->prepare("SELECT SA.IdSubArea AS IDSA ,SA.Descripcion as Asignatura, SA.creditos AS Crdts, C.Descripcion as Ciclo, PE.status as Estado, (SELECT DA.id_profesor FROM docente_asignatura DA WHERE DA.id_asignatura=SA.IdSubArea AND DA.id_periodo=PE.id_periodo) AS profesor FROM plan_estudios PE INNER JOIN areas A ON PE.IdPlan = A.id_plan INNER JOIN subareas SA ON A.IdArea = SA.id_area INNER JOIN ciclo C ON SA.id_ciclo = C.IdCiclo WHERE PE.IdPlan = :plan and SA.id_ciclo = :ciclo");
		// SELECT SA.IdSubArea AS IDSA ,SA.Descripcion as Asignatura, SA.creditos AS Crdts, C.Descripcion as Ciclo, PE.status  as Estado FROM plan_estudios PE INNER JOIN areas A ON PE.IdPlan = A.id_plan INNER JOIN subareas SA ON A.IdArea = SA.id_area INNER JOIN ciclo C ON SA.id_ciclo = C.IdCiclo WHERE PE.IdPlan = :plan and SA.id_ciclo = :ciclo");
	$asig->bindParam(':plan', $_POST['id_plan']);
	$asig->bindParam(':ciclo', $_POST['id_ciclo']);
	$asig->execute();
	$result = $asig->fetchAll();
		foreach ($result as $value)
			{ 
				$stmt1= $conn->prepare("INSERT INTO `resumen_asignatura` (`id_alumno`,`id_profesor`,`id_subarea`,`id_periodo`,`cred`) VALUES (:alumn,:profesor,:asignatura,:periodo, :creditos)");
				$stmt1->bindParam(':alumn', $_POST['id_alum']);
				$stmt1->bindParam(':profesor', $value['profesor']);
				$stmt1->bindParam(':asignatura', $value['IDSA']);
				$stmt1->bindParam(':creditos', $value['Crdts']);
				$stmt1->bindParam(':periodo', $_POST['id_peracad']);
				$stmt1->execute();
			}

	$stmt = $conn->prepare("INSERT INTO `matricula` (`CodMatricula`,`id_alumno`, `tipo_matricula`, `id_plan`, `id_ciclo`, `id_periodo`, `status`) VALUES (:cod,:alum,:tipom,:plan,:ciclo,:periodo,'00')");
	
	$stmt->bindParam(':cod', $_POST['cod']);
	$stmt->bindParam(':alum', $_POST['id_alum']);
	$stmt->bindParam(':tipom', $_POST['id_tpm']);
	$stmt->bindParam(':plan', $_POST['id_plan']);
	$stmt->bindParam(':ciclo', $_POST['id_ciclo']);
	$stmt->bindParam(':periodo', $_POST['id_peracad']);
	$stmt->execute();
	$_SESSION['reply'] = "003";
	header("location:../matricula.php");

	
	
}
if(isset($_POST['btn_edit']))
{	
				$matricula =  $conn->prepare("SELECT id_periodo FROM matricula WHERE IdOrden = :id");
				$matricula->bindParam(':id', $_POST['id']);
				$matricula->execute();
				while ($value1 = mysql_fetch_array($matricula))
				{
					$VL_PeriodoAntiguo=$value1['id_periodo'];
				
				}
				

	$asig = $conn->prepare("SELECT SA.IdSubArea AS IDSA ,SA.Descripcion as Asignatura, SA.creditos AS Crdts ,c.Descripcion as Ciclo, PE.status  as Estado FROM plan_estudios PE INNER JOIN areas A ON PE.IdPlan = A.id_plan INNER JOIN subareas SA ON A.IdArea = SA.id_area INNER JOIN ciclo C ON SA.id_ciclo = C.IdCiclo WHERE PE.IdPlan = :plan and SA.id_ciclo = :ciclo");
	$asig->bindParam(':plan', $_POST['id_plan']);
	$asig->bindParam(':ciclo', $_POST['id_ciclo']);
	$asig->execute();
	$result = $asig->fetchAll();
		foreach ($result as $value)
			{
				//$result1 as $value1;
				//obtener( 'matricula', 'id_periodo',$_POST['id'], 'id_periodo' )
				$stmt1= $conn->prepare("UPDATE `resumen_asignatura` SET `id_subarea` =:asignatura, `id_periodo`= :periodonew, `cred`= :creditos WHERE `id_alumno`= :alumn and `id_periodo` = :periodold");
				$stmt1->bindParam(':asignatura', $value['IDSA']);
				$stmt1->bindParam(':creditos', $value['Crdts']);
				$stmt1->bindParam(':periodonew', $_POST['id_peracad']);
				$stmt1->bindParam(':periodold', $VL_PeriodoAntiguo);
				$stmt1->bindParam(':alumn', $_POST['id_alum']);
				$stmt1->execute();
				}
			

	$stmt = $conn->prepare("UPDATE `matricula` SET `CodMatricula`=:cod, `id_alumno`=:alum, `tipo_matricula`=:tipom, `id_plan`=:plan, `id_ciclo`=:ciclo , `id_periodo`=:periodo WHERE `IdOrden`=:id");
	$stmt->bindParam(':cod', $_POST['cod']);
	$stmt->bindParam(':alum', $_POST['id_alum']);
	$stmt->bindParam(':tipom', $_POST['id_tpm']);
	$stmt->bindParam(':plan', $_POST['id_plan']);
	$stmt->bindParam(':ciclo', $_POST['id_ciclo']);
	$stmt->bindParam(':periodo', $_POST['id_peracad']);
	$stmt->bindParam(':id', $_POST['id']);
	$stmt->execute();
	$_SESSION['reply'] = "004";
	header("location:../matricula.php");

}
if(isset($_GET['id']))
{
	$stmt = $conn->prepare("UPDATE `matricula` SET `status`= 99 WHERE IdOrden = :id");
	$stmt->bindParam(':id', $_GET['id']);
	$stmt->execute();
}			  
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
}else{
header("location:../");
}
?>
