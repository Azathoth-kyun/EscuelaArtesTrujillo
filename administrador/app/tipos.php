<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST["btn_submit"]))
{
  extract($_POST);
  $stmt = $conn->prepare("INSERT INTO `Tipo_Personal` (`Descripcion`) VALUES (:des)");
  $stmt->bindParam(':des', $_POST['description']);
    $stmt->execute();

       $_SESSION['reply'] = "003";
    header("location:../tipoprofesor.php");
}
if(isset($_POST["btn_edit"]))
{
  $stmt = $conn->prepare("UPDATE `Tipo_Personal` SET `Descripcion`=:des WHERE `IdTipo`=:id");
  $stmt->bindParam(':des', $_POST['description']);
  $stmt->bindParam(':id', $_POST['id']);
  $stmt->execute();
  $_SESSION['reply'] = "004";
    header("location:../tipoprofesor.php");
}
}
?>
