<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {
	//require 'php/pdoconnection.php';
require_once('../assets/constants/config.php');
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_POST))
{
	$userposted=$_POST["usuario"];
     
    $stmt = $conn->prepare('SELECT COUNT(*) USER FROM usuarios where user = :user');
    $stmt->execute(array('user' => $userposted));
    $numdefilas = $stmt->fetchColumn();
    if ($numdefilas==0)
    {
    echo "<div class='alert alert-success '><i class='fa fa-check'></i> Usuario Disponible</div>";   
    }
    else 
    {
    echo "<div class='alert alert-danger'><i class='fa fa-close'></i> Usuario ya en uso</div>";
    }
}		  
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
}else{
header("location:../");
}
?>
