<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt2= $conn->prepare("SELECT idsubarea, descripcion as DES, permite_aplazado, permite_jurado from subareas where status = !99 and idsubarea = '".$_GET['id']."'");
$stmt2->execute();
$asignatura = $stmt2->fetchAll(); 
$prom1 = $conn ->prepare("SELECT FP.id, FP.descripcion, FP.f_activa, FP.f_desactiva, FP.id_periodo FROM fecha_promedios FP INNER JOIN peracad PA ON FP.id_periodo = PA.idperiodo WHERE FP.status = '00' and PA.status = '00' and FP.descripcion = 'P1'");
$prom1->execute();
$f_P1 = $prom1->fetchAll();
$prom2 = $conn ->prepare("SELECT FP.id, FP.descripcion, FP.f_activa, FP.f_desactiva, FP.id_periodo FROM fecha_promedios FP INNER JOIN peracad PA ON FP.id_periodo = PA.idperiodo WHERE FP.status = '00' and PA.status = '00' and FP.descripcion = 'P2'");
$prom2->execute();
$f_P2 = $prom2->fetchAll();
$prom3 = $conn ->prepare("SELECT FP.id, FP.descripcion, FP.f_activa, FP.f_desactiva, FP.id_periodo FROM fecha_promedios FP INNER JOIN peracad PA ON FP.id_periodo = PA.idperiodo WHERE FP.status = '00' and PA.status = '00' and FP.descripcion = 'P3'");
$prom3->execute();
$f_P3 = $prom3->fetchAll();
$prom4 = $conn ->prepare("SELECT FP.id, FP.descripcion, FP.f_activa, FP.f_desactiva, FP.id_periodo FROM fecha_promedios FP INNER JOIN peracad PA ON FP.id_periodo = PA.idperiodo WHERE FP.status = '00' and PA.status = '00' and FP.descripcion = 'P4'");
$prom4->execute();
$f_P4 = $prom4->fetchAll();

foreach ($f_P1 as $P1) {
$f_PS1 = $P1['f_activa'];
$f_PF1 = $P1['f_desactiva'];
}
foreach ($f_P2 as $P2) {
$f_PS2 = $P2['f_activa'];
$f_PF2 = $P2['f_desactiva'];
}
foreach ($f_P3 as $P3) {
$f_PS3 = $P3['f_activa'];
$f_PF3 = $P3['f_desactiva'];
}
foreach ($f_P4 as $P4) {
$f_PS4 = $P4['f_activa'];
$f_PF4 = $P4['f_desactiva'];
}
$f_actual = date("Y-m-d");
$f_P1_iniciar = new DateTime($f_PS1);
$f_P1_finalizar = new DateTime($f_PF1);
$f_P2_iniciar = new DateTime($f_PS2);
$f_P2_finalizar = new DateTime($f_PF2);
$f_P3_iniciar = new DateTime($f_PS3);
$f_P3_finalizar = new DateTime($f_PF3);
$f_P4_iniciar = new DateTime($f_PS4);
$f_P4_finalizar = new DateTime($f_PF4);
$f_de_hoy = new DateTime($f_actual);
$int_p1_start = $f_P1_iniciar->diff($f_de_hoy);
$int_p1_final = $f_P1_finalizar->diff($f_de_hoy);
$int_p2_start = $f_P2_iniciar->diff($f_de_hoy);
$int_p2_final = $f_P2_finalizar->diff($f_de_hoy);
$int_p3_start = $f_P3_iniciar->diff($f_de_hoy);
$int_p3_final = $f_P3_finalizar->diff($f_de_hoy);
$int_p4_start = $f_P4_iniciar->diff($f_de_hoy);
$int_p4_final = $f_P4_finalizar->diff($f_de_hoy);
session_start();
if(isset($_POST['btn_save']))
{       
        $p1 =$_POST['prom1'];
        $p2 =$_POST['prom2'] ;
        $p3 =$_POST['prom3'] ;
        $p4 =$_POST['prom4'] ;
        $promj = $_POST['promjurad']; 

    if ($p2 == "" && $p3 == "" && $p4 == "" || $p2 == 0 && $p3 == 0 && $p4 == 0)
    {
        $promfinal = $p1;
        if ($promfinal >=10.5)
        {
                if ($apl == "" || $apl == 0)
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '5';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        //$criterio = '5';
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        //$stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit  WHERE idresumen= :id");
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        //$stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }

                }
                //Code Extra...
        }
        else
        {
                if ($apl == "" || $apl == 0)
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '6';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        //$criterio = '5';
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }

                }
                else
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '6';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                }

        }

        
    }
    elseif ($p3 == "" && $p4 == "" || $p3 == 0 && $p4 == 0) 
    {
        $promfinal = ($p1+$p2)/2;
        if ($promfinal >=10.5)
        {
                if ($apl == "" || $apl == 0)
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '5';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        //$criterio = '5';
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        //$stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit  WHERE idresumen= :id");
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        //$stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }

                }
                //Code Extra...
        }
        else
        {
                if ($apl == "" || $apl == 0)
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '6';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        //$criterio = '5';
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }

                }
                else
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '6';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                }

        }
    }
    elseif ($p4 == "" || $p4 == 0) 
    {
        $promfinal = ($p1+$p2+$p3)/3;
        if ($promfinal >=10.5)
        {
                if ($apl == "" || $apl == 0)
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '5';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        //$criterio = '5';
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        //$stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit  WHERE idresumen= :id");
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        //$stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }

                }
                //Code Extra...
        }
        else
        {
                if ($apl == "" || $apl == 0)
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '6';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        //$criterio = '5';
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }

                }
                else
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '6';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                }

        }
    }
    else
    {
        $promfinal = ($p1+$p2+$p3+$p4)/4;
        if ($promfinal >=10.5)
        {
                if ($apl == "" || $apl == 0)
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '5';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        //$criterio = '5';
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        //$stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit  WHERE idresumen= :id");
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        //$stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }

                }
                //Code Extra...
        }
        else
        {
                if ($apl == "" || $apl == 0)
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '6';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        //$criterio = '5';
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }

                }
                else
                {
                    if ($promj == "" || $promj == 0) 
                    {
                        $criterio = '6';
                        $cd = $_POST['credit'];
                        $ptj = round($promfinal) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, id_criterio = :crit, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $_POST['promjurad']);
                        $stmt->bindParam(':pfdj', $promfinal);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':crit', $criterio);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                    else
                    {
                        $pj = $_POST['promjurad'];
                        $pdj = ($promfinal + $pj)/ 2;
                        $cd = $_POST['credit'];
                        $ptj = round($pdj) * $cd;
                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = :pf, aplazado = :ap, promdoc = :pd, promjur = :pj, promdj = :pfdj, ptj = :ptj, observacion = :obs WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':pf', $promfinal);
                        $stmt->bindParam(':ap', $_POST['aplz']);
                        $stmt->bindParam(':pd', $promfinal);
                        $stmt->bindParam(':pj', $pj);
                        $stmt->bindParam(':pfdj', $pdj);
                        $stmt->bindParam(':ptj', $ptj);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
                    }
                }

        }
    }
   // $crt = $_POST['criterio'];
    if ($_POST['criterio'] == 7) 
    {

                        $stmt = $conn->prepare("UPDATE resumen_asignatura SET prom1= :p1, prom2= :p2, prom3= :p3, prom4= :p4, promfinal = '0', aplazado = '0', promdoc = '0', promjur = '0', promdj = '0', ptj = '0', id_criterio = :ctr, observacion = :obs  WHERE idresumen= :id");
                        $stmt->bindParam(':p1', $_POST['prom1']);
                        $stmt->bindParam(':p2', $_POST['prom2']);
                        $stmt->bindParam(':p3', $_POST['prom3']);
                        $stmt->bindParam(':p4', $_POST['prom4']);
                        $stmt->bindParam(':ctr', $_POST['criterio']);
                        $stmt->bindParam(':obs', $_POST['observation']);
                        $stmt->bindParam(':id', $_POST['resumen']);
                        $stmt->execute(); 
    }
        
}

//Final
?>
<!-- final-->
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"></h3>
                      <?php foreach ($asignatura as $value) { ?>
                        <div class="row breadcrumbs-top"><?=$value['DES']?>
                        <input type="text" hidden="true" name="asignatura" value="<?=$value['DES']?>">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="misasignaturas.php">Mis Asignaturas</a>
                                </li>
                                <li class="breadcrumb-item active"><?=$value['DES']?>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
               <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">                                        
                                        <?php require_once('../assets/constants/check-reply.php') ;?>
                                          <div class="table-responsive">
                                           
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <?php foreach ($asignatura as $value) { ?>
                                                        <input type="text" value="<?=$value['permite_aplazado']?>" hidden="true">
                                                 
                                                        <th class="font" rowspan="2">#</th>

                                                        <th class="font" rowspan="2">Alumnos</th>
                                                        <th class="font" colspan="5">Resumen</th>
                                                        <th class="font" rowspan="2" <?php if($value['permite_aplazado'] == "0" ){ echo "hidden"; }?>>AP</th>
                                                        <th class="font" colspan="3" <?php if($value['permite_jurado'] == "0" ){ echo "hidden"; }?>>Actuación–Danza</th>
                                                        <th class="font" rowspan="2" >Cred</th>
                                                        <th class="font" rowspan="2">PTJ</th>
                                                        <th rowspan="2">Criterio</th>
                                                        <th rowspan="2">Observación</th>
                                                        <th class="font" rowspan="2">Control</th>
                                                        <?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <?php foreach ($asignatura as $value) { ?>
                                                        <!--Resumen-->
                                                        <th class="font">1°</th>
                                                        <th class="font" >2°</th>
                                                        <th class="font" >3°</th>
                                                        <th class="font" >4°</th>
                                                        <th class="font" >PF</th>
                                                        <!--Actuacion Danza-->
                                                        <th class="font" <?php if($value['permite_jurado'] == "0" ){ echo "hidden"; }?>>PD</th>
                                                        <th class="font" <?php if($value['permite_jurado'] == "0" ){ echo "hidden"; }?>>PJ</th>
                                                        <th class="font" <?php if($value['permite_jurado'] == "0" ){ echo "hidden"; }?>>PF</th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                    <?php 
$stmt= $conn->prepare("SELECT DISTINCT RA.idresumen as IDRA ,AL.idalumno AS IDAL ,AL.apellidos AS Surname, AL.nombres AS Name, RA.prom1 AS P1, RA.prom2 AS P2, RA.prom3 AS P3, RA.prom4 AS P4, RA.promfinal AS PRF, RA.aplazado AS APLZ, RA.promdoc AS PD, RA.promjur AS PJ, RA.promdj AS PDJ, RA.cred AS CRD, RA.ptj AS PTJ, SA.descripcion as DESA, RA.id_criterio as CTR, RA.observacion AS OBS ,SA.permite_aplazado AS PA, SA.permite_jurado AS PJU from resumen_asignatura RA INNER JOIN alumno AL ON RA.id_alumno = AL.idalumno INNER JOIN subareas SA ON RA.id_subarea = SA.idsubarea inner join fecha_promedios FP on RA.id_periodo = FP.id_periodo where SA.idsubarea = '".$_GET['id']."'");
$stmt->execute();
$result = $stmt->fetchAll(); 
        
                                                    $i=1;
                                                    foreach ($result as $value) {
                                                     ?>
                                                   <form method="post">
                                                      <tr>
                                                        <td class="font"><?=$i?></td>
                                                          <input hidden="true" class="font box" value="<?=$value['IDRA']?>" placeholder="0" name="resumen">
                                                          <input  hidden="true" class="font box" value="<?=$value['IDAL']?>" placeholder="0" name="alumno">
                                                        <td>
                                                            
                                                            <div style="text-align: left;" class="font"><?=$value['Surname']?>,<?=$value['Name']?></div>
                                                        </td>
                                                        <td>
                                                            <input class="font box" value="<?=$value['P1']?>" placeholder="0" name="prom1" hidden="true">
                                                            <input class="font box" value="<?=$value['P1']?>" name="prom1" <?php if((preg_match('/^[+]/',$int_p1_start->format('%R%a días'))) && ((preg_match('/^[-]/',$int_p1_final->format('%R%a días'))) || (preg_match('+0 días',$int_p1_final->format('%R%a días')))) ){ echo "enable";} else if (preg_match('/^[+]/',$int_p1_final->format('%R%a días')) || preg_match('/^[-]/',$int_p1_start->format('%R%a días'))){echo "disabled";}?>>
                                                        </td>
                                                        <td>
                                                            <input type="text" value="<?=$int_p2_start->format('%R%a días')?>" hidden="true">
                                                            <input type="" name="" value="<?=$int_p2_final->format('%R%a días')?>" hidden="true">
                                                          <input  class="font box" value="<?=$value['P2']?>" placeholder="0" name="prom2" hidden="true">
                                                        <input  class="font box" value="<?=$value['P2']?>" name="prom2" <?php if((preg_match('/^[+]/',$int_p2_start->format('%R%a días'))) && ((preg_match('/^[-]/',$int_p2_final->format('%R%a días'))) || (preg_match('+0 días',$int_p2_final->format('%R%a días')))) ){ echo "enable";} else if (preg_match('/^[+]/',$int_p2_final->format('%R%a días')) || preg_match('/^[-]/',$int_p2_start->format('%R%a días'))){echo "disabled";}?> >
                                                        </td>
                                                        <td>
                                                            <input type="text" value="<?=$int_p3_start->format('%R%a días')?>" hidden="true">
                                                            <input type="" name="" value="<?=$int_p3_final->format('%R%a días')?>" hidden="true">
                                                          <input class="font box" value="<?=$value['P3']?>" placeholder="0" name="prom3" hidden="true">
                                                          <input class="font box" value="<?=$value['P3']?>" placeholder="0" name="prom3" <?php if((preg_match('/^[+]/',$int_p3_start->format('%R%a días'))) && ((preg_match('/^[-]/',$int_p3_final->format('%R%a días'))) || (preg_match('+0 días',$int_p3_final->format('%R%a días')))) ){ echo "enable";} else if (preg_match('/^[+]/',$int_p3_final->format('%R%a días')) || preg_match('/^[-]/',$int_p3_start->format('%R%a días'))){echo "disabled";}?> >
                                                        </td>
                                                        <td>
                                                        <input type="text" value="<?=$int_p4_start->format('%R%a días')?>" hidden="true">
                                                            <input type="" name="" value="<?=$int_p4_final->format('%R%a días')?>" hidden="true">
                                                          <input class="font box" value="<?=$value['P4']?>" placeholder="0" name="prom4" hidden="true">
                                                          <input class="font box" value="<?=$value['P4']?>" placeholder="0" name="prom4" <?php if((preg_match('/^[+]/',$int_p4_start->format('%R%a días'))) && ((preg_match('/^[-]/',$int_p4_final->format('%R%a días'))) || (preg_match('+0 días',$int_p4_final->format('%R%a días')))) ){ echo "enable";} else if (preg_match('/^[+]/',$int_p4_final->format('%R%a días')) || preg_match('/^[-]/',$int_p4_start->format('%R%a días'))){echo "disabled";}?> >
                                                        </td>
                                                        <td>
                                                          <input class="font box" value="<?=$value['PRF']?>" placeholder="0" name="promfinal" hidden="true">
                                                          <input class="font box" value="<?=$value['PRF']?>" placeholder="0" name="promfinal" disabled>
                                                        </td>
                                                        <input class="font box" value="<?=$value['PA']?>" hidden="true">
                                                        <td <?php if($value['PA'] == "0" ){ echo "hidden"; }?>>
                                                          <input class="font box" value="<?=$value['APLZ']?>" placeholder="0" name="aplz" hidden="true">
                                                          <input class="font box" value="<?=$value['APLZ']?>" placeholder="0" name="aplz" <?php if($value['PA'] == "0" ){ echo "hidden"; } else{ if($value['PRF'] == null || $value['PRF'] == 0){ echo "disabled"; } elseif ($value['PRF'] >= 10.5 ) {echo "disabled"; } }  ?> >
                                                          </td>
                                                        <td <?php if($value['PJU'] == "0" ){ echo "hidden"; }?>>
                                                        <input class="font box" value="<?=$value['PJU']?>" hidden="true">
                                                          <input class="font box" value="<?=$value['PD']?>" name="promdocent" placeholder="0" hidden="true">
                                                          <input class="font box" value="<?=$value['PD']?>" name="promdocent" placeholder="0" disabled <?php if($value['PJU'] == "0" ){ echo "hidden"; }?>>
                                                        </td>
                                                        <td <?php if($value['PJU'] == "0" ){ echo "hidden"; }?>>
                                                          <input class="font box" value="<?=$value['PJ']?>" placeholder="0" name="promjurad" <?php if($value['PJU'] == "0" ){ echo "hidden"; }?> >
                                                        </td>
                                                        <td <?php if($value['PJU'] == "0" ){ echo "hidden"; }?>>
                                                          <input class="font box" value="<?=$value['PDJ']?>" placeholder="0" name="promdxj" hidden="true">
                                                          <input class="font box" value="<?=$value['PDJ']?>" placeholder="0" name="promdxj" disabled <?php if($value['PJU'] == "0" ){ echo "hidden"; }?>>
                                                        </td>
                                                        <td>
                                                          <input class="font box" value="<?=$value['CRD']?>" placeholder="0" name="credit" hidden="true">
                                                          <input class="font box" value="<?=$value['CRD']?>" placeholder="0" name="credit" disabled>
                                                        </td>
                                                        <td>
                                                          <input class="font box" value="<?=$value['PTJ']?>" placeholder="0" name="ptj" hidden="true" >
                                                          <input class="font box" value="<?=$value['PTJ']?>" placeholder="0" name="ptj" disabled >
                                                        </td>
                                                        <td>
                                                            <select style="width:200px; font-size: 12px;" class="form-group" name="criterio">
                                                                <option style="width:320px;" value="0">---Seleccionar---</option>
                                                                <?php 
                                            $stmt3= $conn->prepare("SELECT idclas,descripcion from clasificacion WHERE categoria = 'NOTAS'");
                                            $stmt3->execute();
                                                $obs = $stmt3->fetchAll();
                                                                foreach ($obs as $value1) { ?>
                                                                    <option value="<?=$value1['idclas']?>" <?php if($value['CTR']==$value1['idclas']){ echo "selected"; }?>><?=$value1['descripcion']?>
                        
                                                                <?php } ?>
                                                            </select>
                                                            <td>
                                                                <input class="" name="observation" value="<?=$value['OBS']?>" >
                                                            </td>
                                                        </td>
                                                        <td>
                                                          <button type="submit" name="btn_save" class="btn btn-success">Grabar</button>

                                                        </td>
                                                    </tr>
                                                  </form>
                                                <?php $i++; } ?>
                                                </tbody> 

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- DOM - jQuery events table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php include 'footer.php'; ?>
<style type="text/css">
    .font{
        font-size: 14px;
        font-family: Times New Roman;
    }
    .box
    {
        width:25px; 
        height: 25px; 
        border-radius: 0.25em;
        text-align:center;
        border-style: inset;
    }
</style>