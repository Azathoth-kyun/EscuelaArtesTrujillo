<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['btn_save']))
{
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt = $conn->prepare("INSERT INTO `usuarios`(`user`, `pw`, `id_personal`, `id_rol`,`status`)VALUES (:user,:pw,:group_p, :group_t, '00')");
	$stmt->bindParam(':user', $_POST['usuario']);
	$stmt->bindParam(':pw',$password);
	$stmt->bindParam(':group_p', $_POST['group_personal']);
	$stmt->bindParam(':group_t', $_POST['group_tipo']);
	$stmt->execute();
	$_SESSION['reply'] = "003";
	header("location:../usuarios.php");
}
if(isset($_POST['btn_edit']))
{
	//Faltaaa
	$stmt = $conn->prepare("UPDATE usuarios SET user=:user,id_personal=:group_p, id_rol=:group_t WHERE id=:id");
	$stmt->bindParam(':user', $_POST['usuario']);
	$stmt->bindParam(':group_p', $_POST['group_personal']);
	$stmt->bindParam(':group_t', $_POST['group_tipo']);
	$stmt->bindParam(':id', $_POST['id']);
	$stmt->execute();
	$_SESSION['reply'] = "004";
	header("location:../usuarios.php");
}
if(isset($_GET['id']))
{
	//Faltaaa
	$stmt = $conn->prepare("UPDATE usuarios SET `status`= '99' WHERE id = :id");
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
