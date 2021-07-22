<?php
session_start();
//configuration file
require_once('../constants/config.php');
//Adaptar tabla nueva a esta funcion, pre-test editable...
$user = $_POST['user'];
$login = $_POST['password'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT U.user as US,U.pw as PW,TU.Descripcion as rol, U.avatar AS avatar FROM usuarios U inner join tipo_usuario TU ON U.id_rol= TU.Id WHERE U.user = :us ");
$stmt->bindParam(':us', $user);
$stmt->execute();
$result = $stmt->fetchAll();
//getting number of records found
$rec = count($result);
if ($rec > 0) {
foreach($result as $row) {
$role = $row['rol'];
//Asginacion de un avatar al usuario
$avatar = $row['avatar'];		
}
switch ($role) {	
	case 'ADMINISTRADOR':
	if (password_verify($login, $row['PW'])) {
	admin_login();
	}else{
	$_SESSION['reply'] = "001";
    header("location:../../");
	}
	break;
	case 'DOCENTE':
	if (password_verify($login, $row['PW'])) {
	doc_login();
	}else{
	$_SESSION['reply'] = "001";
    header("location:../../");
	}
	break;
}
}else{
$_SESSION['reply'] = "001";
header("location:../../");
}
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
function admin_login() {
$_SESSION['logged'] = "1";
$_SESSION['role'] = "admin";
//Toma el nombre de usuario y muestra en el index cuando este es logeado.
$_SESSION['email'] = $GLOBALS['user'];
//Avatar que muestra el usuario.
$_SESSION['avatar'] = $GLOBALS['avatar'];
header("location:../../administrador/");
}
function doc_login() {
$_SESSION['logged'] = "1";
$_SESSION['role'] = "docente";
//Toma el nombre de usuario y muestra en el index cuando este es logeado.
$_SESSION['email'] = $GLOBALS['user'];
//Avatar que muestra el usuario.
$_SESSION['avatar'] = $GLOBALS['avatar'];
header("location:../../docente/");
}
?>
