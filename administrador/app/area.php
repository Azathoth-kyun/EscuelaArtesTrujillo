<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST["btn_save"]))
{
  extract($_POST);
  $stmt = $conn->prepare("INSERT INTO `areas` (`dscripcion`, `id_plan`, `status`) VALUES (:des, :group, '00')");
  $stmt->bindParam(':des', $_POST['name']);
  $stmt->bindParam(':group', $_POST['grupo_id']);
    $stmt->execute();
       $_SESSION['reply'] = "003";
    header("location:../areas.php");
}
if(isset($_POST["btn_edit"]))
{
  $stmt = $conn->prepare("UPDATE `areas` SET `descripcion`=:des, `id_plan`=:group WHERE `idarea`=:id");
  $stmt->bindParam(':des', $_POST['name']);
  $stmt->bindParam(':group', $_POST['grupo_id']);
  $stmt->bindParam(':id', $_POST['id']);
  $stmt->execute();
      $_SESSION['reply'] = "004";
    header("location:../areas.php");
}
if(isset($_GET['id']))
{
  $stmt = $conn->prepare("UPDATE `areas` SET `status`= 99 WHERE idarea = :id");
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->execute();
}
}
?>
