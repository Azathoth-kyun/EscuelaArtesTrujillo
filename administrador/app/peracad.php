<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST["btn_save"]))
{
  extract($_POST);
  $stmt = $conn->prepare("INSERT INTO `peracad` (`descripcion`, `inc_periodo`, `fin_periodo`) VALUES (:des, :fecin, :fecfi)");
  $stmt->bindParam(':des', $_POST['des']);
  $stmt->bindParam(':fecin', $_POST['fec_inc']);
  $stmt->bindParam(':fecfi', $_POST['fec_fin']);
    $stmt->execute();
       $_SESSION['reply'] = "003";
    header("location:../periodoacad.php");
}
if(isset($_POST["btn_edit"]))
{
  $stmt = $conn->prepare("UPDATE `peracad` SET `descripcion`=:des, `inc_periodo`=:fecin, `fin_periodo`=:fecfi WHERE `idperiodo`=:id");
    $stmt->bindParam(':des', $_POST['des']);
  $stmt->bindParam(':fecin', $_POST['fec_inc']);
  $stmt->bindParam(':fecfi', $_POST['fec_fin']);
  $stmt->bindParam(':id', $_POST['id']);
  $stmt->execute();
  $_SESSION['reply'] = "004";
    header("location:../periodoacad.php");
}
if(isset($_GET['id']))
{
  $stmt = $conn->prepare("UPDATE `peracad` SET `status`= '01' WHERE idperiodo = :id");
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->execute();
}
}
?>
