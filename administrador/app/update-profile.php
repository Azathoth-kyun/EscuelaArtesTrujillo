<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "admin") {

require_once('../../assets/constants/config.php');

$new_avatar  = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$old_avatar = $_POST['current'];
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$new_file_name = ''.rand(10000,90000).'.png';
$target_dir = "../../assets/uploads/avatar/";
$target_file = '../../assets/uploads/avatar/'.$new_file_name.'';
$unlink = '../../assets/uploads/avatar/'.$old_avatar.'';

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

if (!unlink($unlink))
  {

  }
else
  {

  }
//}

$stmt = $conn->prepare("UPDATE usuarios SET avatar = :avatar WHERE user = :myuser");
$stmt->bindParam(':avatar', $new_file_name);
$stmt->bindParam(':myuser', $_SESSION["email"]);
$stmt->execute();

$_SESSION['avatar'] = $new_file_name;

$_SESSION['reply'] = "022";
header("location:../account.php");
}
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
//do not toouch


}else{
	header("location:../");
}

?>
