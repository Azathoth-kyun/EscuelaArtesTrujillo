<?php
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1" && $_SESSION['role'] == "docente") {
require_once('../../assets/constants/config.php');
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



	$p1 =$_POST['prom1'];
	$p2 =$_POST['prom2'] ;
	$p3 =$_POST['prom3'] ;
	$p4 =$_POST['prom4'] ;
	$apl = $_POST['aplazado'];
	$idr = $_POST['resumen'];
    $asig = $_POST['asignatura'];

	if ($p2 == null && $p3 == null && $p4 == null || $p2 == 0 && $p3 == 0 && $p4 == 0 ) 
	{
		$promfinal = $p1;
		$stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf  WHERE IdResumen= :id");
		$stmt->bindParam(':p1',$_POST['prom1']);
		$stmt->bindParam(':p2', $_POST['prom2']);
		$stmt->bindParam(':p3', $_POST['prom3']);
		$stmt->bindParam(':p4', $_POST['prom4']);
		$stmt->bindParam(':pf', $promfinal);
		$stmt->bindParam(':id', $_POST['resumen']);
		$stmt->execute();
		$_SESSION['reply'] = "004";

	}
	elseif ($p3 == null && $p4 == null || $p3 == 0 && $p4 == 0) 
	{
		$promfinal = ($p1+$p2)/2;
		$stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1 , prom2= :p2 , prom3 = :p3 , prom4 = :p4 , promfinal = :pf  WHERE IdResumen= :id");
		$stmt->bindParam(':p1',$_POST['prom1']);
		$stmt->bindParam(':p2', $_POST['prom2']);
		$stmt->bindParam(':p3', $_POST['prom3']);
		$stmt->bindParam(':p4', $_POST['prom4']);
		$stmt->bindParam(':pf', $promfinal);
		$stmt->bindParam(':id', $_POST['resumen']);
		$stmt->execute();
		$_SESSION['reply'] = "004";
	}
	elseif ($p4 == null || $p4 == 0 ) {
		$promfinal = ($p1+$p2+$p3)/3;
		$stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1 , prom2= :p2 , prom3 = :p3 , prom4 = :p4 , promfinal = :pf  WHERE IdResumen= :id");
		$stmt->bindParam(':p1',$_POST['prom1']);
		$stmt->bindParam(':p2', $_POST['prom2']);
		$stmt->bindParam(':p3', $_POST['prom3']);
		$stmt->bindParam(':p4', $_POST['prom4']);
		$stmt->bindParam(':pf', $promfinal);
		$stmt->bindParam(':id', $_POST['resumen']);
		$stmt->execute();
		$_SESSION['reply'] = "004";
	}
	else{

		$promfinal = ($p1+$p2+$p3+$p4)/4;
		$stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1 , prom2= :p2 , prom3 = :p3 , prom4 = :p4 , promfinal = :pf  WHERE IdResumen= :id");
		$stmt->bindParam(':p1',$_POST['prom1']);
		$stmt->bindParam(':p2', $_POST['prom2']);
		$stmt->bindParam(':p3', $_POST['prom3']);
		$stmt->bindParam(':p4', $_POST['prom4']);
		$stmt->bindParam(':pf', $promfinal);
		$stmt->bindParam(':id', $_POST['resumen']);
		$stmt->execute();
		$_SESSION['reply'] = "004";
			}
	
    if ($_POST['aplz'] == null || $_POST['aplz'] == 0 || $promfinal>=10.5 ) {
				$stmt = $conn->prepare("UPDATE resumen_asignatura SET  promdoc = :promedio, promjur= :pj WHERE IdResumen= :id");
				$stmt->bindParam(':promedio', $promfinal);
				$stmt->bindParam(':pj', $_POST['promjurad']);
				$stmt->bindParam(':id', $_POST['resumen']);
				$stmt->execute();
				$_SESSION['reply'] = "004";
	    }
	 if ($_POST['promfinal']<=10) 
	    {
				$stmt = $conn->prepare("UPDATE resumen_asignatura SET  aplazado=:aplz , promdoc = :aplz  WHERE IdResumen= :id");
				$stmt->bindParam(':aplz', $_POST['aplz']);
				$stmt->bindParam(':id', $_POST['resumen']);
				$stmt->execute();
				$_SESSION['reply'] = "004";

	    }
	   if ($_POST['promjurad'] == null || $_POST['promjurad'] == 0 ) {
	   		$pd= $_POST['promdocent'];
	   		$crd = $_POST['credit'];
	   		$ptj = $pd * $crd;
	   		$stmt = $conn->prepare("UPDATE resumen_asignatura SET  promdj=:pd, ptj= :ptj WHERE IdResumen= :id");
			$stmt->bindParam(':pd', $_POST['promdocent']);
			$stmt->bindParam(':ptj', $ptj);
			$stmt->bindParam(':id', $_POST['resumen']);
			$stmt->execute();
			$_SESSION['reply'] = "004";
	   }else{
	   		$pd= $_POST['promdocent'];
	   		$pj= $_POST['promjurad'];
	   		$crd = $_POST['credit'];
	   		$pdxj = ($pd+$pj)/2;
	   		$ptj = $pdxj * $crd;
	   		$stmt = $conn->prepare("UPDATE resumen_asignatura SET  promjur= :pj,promdj=:pdxj, ptj= :ptj WHERE IdResumen= :id");
			$stmt->bindParam(':pj', $_POST['promjurad']);
			$stmt->bindParam(':pdxj', $pdxj);
			$stmt->bindParam(':ptj', $ptj);
			$stmt->bindParam(':id', $_POST['resumen']);
			$stmt->execute();
			$_SESSION['reply'] = "004";
	   }



		

}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
}else{
header("location:../");
}
?>
