<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST["btn_save"]))
{
  extract($_POST);
  $stmt = $conn->prepare("INSERT INTO `subareas` (`descripcion`, `id_area`,`horas`,`creditos`,`id_ciclo`, `prioridad`,`permite_aplazado`,`permite_jurado`,`status`) VALUES (:des, :groupa, :horas, :credito, :groupc, :grouppasig,:groupap,:groupjur, '00')");
  $stmt->bindParam(':des', $_POST['des']);
  $stmt->bindParam(':groupa', $_POST['grupo_ida']);
  $stmt->bindParam(':horas', $_POST['hour']);
  $stmt->bindParam(':credito', $_POST['credit']);
  $stmt->bindParam(':groupc', $_POST['grupo_idc']);
  $stmt->bindParam(':grouppasig', $_POST['grupo_idasig']);
  $stmt->bindParam(':groupap', $_POST['grupo_aplazado']);
  $stmt->bindParam(':groupjur', $_POST['grupo_jurado']);
  $stmt->execute();
  $_SESSION['reply'] = "003";
  header("location:../asignaturas.php");
}
if(isset($_POST["btn_edit"]))
{
  $stmt = $conn->prepare("UPDATE `subareas` SET `descripcion`=:des, `id_area`=:groupa, `horas`=:horas, `creditos`=:credito, `id_ciclo`=:groupc, `prioridad`= :grouppasig, `permite_aplazado` = :groupap, `permite_jurado` = :groupjur WHERE `idsubarea`=:id");
  $stmt->bindParam(':des', $_POST['des']);
  $stmt->bindParam(':groupa', $_POST['grupo_ida']);
  $stmt->bindParam(':horas', $_POST['hour']);
  $stmt->bindParam(':credito', $_POST['credit']);
  $stmt->bindParam(':groupc', $_POST['grupo_idc']);
  $stmt->bindParam(':grouppasig', $_POST['grupo_idasig']);
  $stmt->bindParam(':groupap', $_POST['grupo_aplazado']);
  $stmt->bindParam(':groupjur', $_POST['grupo_jurado']);
  $stmt->bindParam(':id', $_POST['id']);
  $stmt->execute();
  $_SESSION['reply'] = "004";
    header("location:../asignaturas.php");
}
if(isset($_GET['id']))
{
  $stmt = $conn->prepare("UPDATE `subareas` SET `status`= 99 WHERE idsubarea = :id");
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->execute();
}

}
?>
