<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "docente") {

$myemail = $_SESSION['email'];
$myvataor = $_SESSION['avatar'];

}else{

header("location:../");
$_SESSION['logged'] = "0";
$_SESSION['role'] = "";

}

?>