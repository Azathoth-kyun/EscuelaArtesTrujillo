<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST["btn_save"]))
{
  extract($_POST);

  $stmt1 = $conn->prepare("UPDATE resumen_asignatura SET `id_profesor`= :groupp WHERE `id_subarea` = :groupa ");
  $stmt1->bindParam(':groupa', $_POST['grupo_ida']);
  $stmt1->bindParam(':groupp', $_POST['grupo_idp']);
  $stmt1->execute();
  
  $stmt = $conn->prepare("INSERT INTO `docente_asignatura` (`id_asignatura`, `id_profesor`,`id_periodo` ,`status`) VALUES (:groupa,:groupp,:grouppa,'00')");
  $stmt->bindParam(':groupa', $_POST['grupo_ida']);
  $stmt->bindParam(':groupp', $_POST['grupo_idp']);
  $stmt->bindParam(':grouppa', $_POST['grupo_peracad']);
  $stmt->execute();
  $_SESSION['reply'] = "003";
  header("location:../profasignado.php");
}
if(isset($_POST["btn_edit"]))
{
  $stmt = $conn->prepare("UPDATE `docente_asignatura` SET `id_asignatura`=:groupa, `id_profesor`=:groupp,`id_periodo`=:grouppa  WHERE `id`=:id");
  $stmt->bindParam(':groupa', $_POST['grupo_ida']);
  $stmt->bindParam(':groupp', $_POST['grupo_idp']);
  $stmt->bindParam(':grouppa', $_POST['grupo_peracad']);
  $stmt->bindParam(':id', $_POST['id']);
  $stmt->execute();
      $_SESSION['reply'] = "004";
    header("location:../profasignado.php");
}
if(isset($_GET['id']))
{
  $stmt = $conn->prepare("UPDATE `docente_asignatura` SET `status`= 99 WHERE id = :id");
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->execute();
}
}
?>
