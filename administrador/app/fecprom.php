<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST["btn_save"]))
{
  extract($_POST);
  $stmt = $conn->prepare("INSERT INTO `fecha_promedios` (`descripcion`, `f_activa`, `f_desactiva`, `status`) VALUES (:des, :fecin, :fecfi, '00')");
  $stmt->bindParam(':des', $_POST['des']);
  $stmt->bindParam(':fecin', $_POST['fec_inc']);
  $stmt->bindParam(':fecfi', $_POST['fec_fin']);
    $stmt->execute();
       $_SESSION['reply'] = "003";
    header("location:../fecprom.php");
}
if(isset($_POST["btn_edit"]))
{
  $stmt = $conn->prepare("UPDATE `fecha_promedios` SET `descripcion`=:des, `f_activa`=:fecin, `f_desactiva`=:fecfi WHERE `id`=:id");
    $stmt->bindParam(':des', $_POST['des']);
  $stmt->bindParam(':fecin', $_POST['fec_inc']);
  $stmt->bindParam(':fecfi', $_POST['fec_fin']);
  $stmt->bindParam(':id', $_POST['id']);
  $stmt->execute();
  $_SESSION['reply'] = "004";
    header("location:../fecprom.php");
}
if(isset($_GET['id']))
{
  $stmt = $conn->prepare("UPDATE `fecha_promedios` SET `status`= '99' WHERE id = :id");
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->execute();
}
}
?>
