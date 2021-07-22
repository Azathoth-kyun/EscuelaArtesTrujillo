<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "docente") {

require_once('../../assets/constants/config.php');

$new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $conn->prepare("UPDATE usuarios SET pw = :pws WHERE user = :myuser");
$stmt->bindParam(':pws', $new_password);
$stmt->bindParam(':myuser', $_SESSION['email']);

$stmt->execute();
$_SESSION['reply'] = "023";
header("location:../account.php");

}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}


}else{

	header("location:../");
}


?>
