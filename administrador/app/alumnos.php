<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['btn_save']))
{
	$stmt = $conn->prepare("INSERT INTO `alumno` (`Apellidos`, `Nombres`, `FecNaci`, `Direccion`, `Telefono`, `Celular`, `Email`, `Genero`, `status`) VALUES (:apellidos,:nombres,:fecha,:direccion, :tel,:cel,:email, :gen, '00')");
	//$stmt->bindParam(':dni', $_POST['dni']);
	$stmt->bindParam(':apellidos', $_POST['surname']);
	$stmt->bindParam(':nombres', $_POST['name']);
	$stmt->bindParam(':fecha', $_POST['date']);
	$stmt->bindParam(':direccion', $_POST['add']);
	$stmt->bindParam(':tel', $_POST['phone']);
	$stmt->bindParam(':cel', $_POST['phone2']);
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':gen', $_POST['genero']);
	$stmt->execute();
	$_SESSION['reply'] = "003";
	header("location:../alumnos.php");
}
if(isset($_POST['btn_edit']))
{
	$stmt = $conn->prepare("UPDATE `alumno` SET `DNI`=:dni,`Apellidos`=:apellidos,`Nombres`=:nombres,`FecNaci`=:fecha,`Direccion`=:direccion,`Telefono`=:tel,`Celular`=:cel,`Email`=:email,`Genero`=:gen WHERE `IdAlumno`=:id");
	$stmt->bindParam(':dni', $_POST['dni']);
	$stmt->bindParam(':apellidos', $_POST['surname']);
	$stmt->bindParam(':nombres', $_POST['name']);
	$stmt->bindParam(':fecha', $_POST['date']);
	$stmt->bindParam(':direccion', $_POST['add']);
	$stmt->bindParam(':tel', $_POST['phone']);
	$stmt->bindParam(':cel', $_POST['phone2']);
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':gen', $_POST['genero']);
	$stmt->bindParam(':id', $_POST['id']);
	$stmt->execute();
	$_SESSION['reply'] = "004";
	header("location:../alumnos.php");
}
if(isset($_GET['id']))
{
	$stmt = $conn->prepare("UPDATE `alumno` SET `status`= 99 WHERE IdAlumno = :id");
	$stmt->bindParam(':id', $_GET['id']);
	$stmt->execute();
}				  
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
}
else{
header("location:../");
}
?>
