<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST["btn_submit"]))
{
  extract($_POST);
  $stmt = $conn->prepare("INSERT INTO `plan_estudios` (`descripcion`,`especialidad`,`status` ) VALUES (:des,:esp,'00')");
  $stmt->bindParam(':des', $_POST['description']);
  $stmt->bindParam(':esp', $_POST['especialidad']);
  $stmt->execute();
  $_SESSION['reply'] = "003";
  header("location:../planestudios.php");
}
if(isset($_POST["btn_edit"]))
{
  $stmt = $conn->prepare("UPDATE `plan_estudios` SET `descripcion`=:des, `especialidad`=:esp WHERE `idplan`=:id");
  $stmt->bindParam(':des', $_POST['description']);
  $stmt->bindParam(':esp', $_POST['especialidad']);
  $stmt->bindParam(':id', $_POST['id']);
  $stmt->execute();
  $_SESSION['reply'] = "004";
    header("location:../planestudios.php");
}
if(isset($_GET['id']))
{
  $stmt = $conn->prepare("UPDATE `plan_estudios` SET `status`= 99 WHERE idplan = :id");
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->execute();
}
}
?>
