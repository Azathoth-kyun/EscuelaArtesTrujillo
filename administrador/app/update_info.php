<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
require_once('../../assets/constants/config.php');
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("UPDATE info_institucional SET cod_institucion = :cod, nombre_institucion = :name, tipo_gestion = :ges, creacion_revalidacion = :crev, region = :reg, direccion = :dir, provincia = :pro , distrito = :dis");
$stmt->bindParam(':cod', $_POST['cod']);
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':ges', $_POST['gestion']);
$stmt->bindParam(':crev', $_POST['creareva']);
$stmt->bindParam(':reg', $_POST['region']);
$stmt->bindParam(':dir', $_POST['direccion']);
$stmt->bindParam(':pro', $_POST['provincia']);
$stmt->bindParam(':dis', $_POST['distrito']);

$stmt->execute();
$_SESSION['reply'] = "023";
header("location:../institucion.php");

}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}


}else{

	header("location:../");
}


?>
