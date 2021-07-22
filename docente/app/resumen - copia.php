<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "docente") {
require_once('../../assets/constants/config.php');
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['btn_save']))
{ 
	$stmt = $conn->prepare("INSERT INTO `resumen_asignatura` (`id_alumno`, `id_profesor`, `id_subarea`, `prom1`, `prom2`, `prom3`, `prom4`, `promfinal`, `aplazado`, `promdoc`, `promjur`, `promdj`, `cred`, `ptj`, `observacion`) VALUES (:idal,:idpr,:idas,:prom1,:prom2,:prom3,:prom4,:promf,:aplz,:promd,:promj,:pf,:cred,:ptj,:obs)");
	$stmt->bindParam(':idal', $_POST['grupo_ida']);
	$stmt->bindParam(':idpr', $_POST['idp']);
	$stmt->bindParam(':idas', $_POST['idasig']);
	$stmt->bindParam(':prom1', $_POST['prom1']);
	$stmt->bindParam(':prom2', $_POST['prom2']);
	$stmt->bindParam(':prom3', $_POST['prom3']);
	$stmt->bindParam(':prom4', $_POST['prom4']);
	$stmt->bindParam(':promf', $_POST['promfinal']);
	$stmt->bindParam(':aplz', $_POST['aplazado']);
	$stmt->bindParam(':promd', $_POST['promdocente']);
	$stmt->bindParam(':promj', $_POST['notajurado']);
	$stmt->bindParam(':pf', $_POST['pf']);
	$stmt->bindParam(':cred', $_POST['credit']);
	$stmt->bindParam(':ptj', $_POST['puntaje']);
	$stmt->bindParam(':obs', $_POST['observation']);
	$stmt->execute();
	$_SESSION['reply'] = "003";
	header("location:../misasignaturas.php");
}
if(isset($_POST['btn_edit']))
{
	$stmt = $conn->prepare("UPDATE `personal` SET `DNI`=:dni,`Apellidos`=:apellidos,`Nombres`=:nombres,`FecNaci`=:fecha,`Direccion`=:direccion,`Telefono`=:tel,`Celular`=:cel,`Email`=:email,`Idtp`=:grupo,`IdEstado`=:estado WHERE `IdPersonal`=:id");
	$stmt->bindParam(':dni', $_POST['dni']);
	$stmt->bindParam(':apellidos', $_POST['surname']);
	$stmt->bindParam(':nombres', $_POST['name']);
	$stmt->bindParam(':fecha', $_POST['date']);
	$stmt->bindParam(':direccion', $_POST['add']);
	$stmt->bindParam(':tel', $_POST['phone']);
	$stmt->bindParam(':cel', $_POST['phone2']);
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':grupo', $_POST['grupo_id']);
	$stmt->bindParam(':estado', $_POST['estado_id']);
	$stmt->bindParam(':id', $_POST['id']);
	$stmt->execute();
	$_SESSION['reply'] = "004";
	header("location:../misasignaturas.php");
}
if(isset($_GET['id']))
{
	$stmt = $conn->prepare("UPDATE `personal` SET `IdEstado`= 99 WHERE IdPersonal = :id");
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
