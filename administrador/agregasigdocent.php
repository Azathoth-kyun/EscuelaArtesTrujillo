<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');
?>
<?php 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
$stmt = $conn->prepare("SELECT SA.idsubarea as IDSb, SA.descripcion  AS Des, PE.especialidad as PEE, C.descripcion AS DC FROM subareas SA inner join areas A ON SA.id_area = A.idarea inner join plan_estudios AS PE ON A.id_plan = PE.idplan INNER JOIN ciclo C ON SA.id_ciclo = C.idciclo WHERE SA.status = !99");
$stmt->execute();   
$result = $stmt->fetchAll();

$stmt3 = $conn->prepare("SELECT idperiodo,descripcion FROM peracad WHERE status = '00'");
$stmt3->execute();
$peracad = $stmt3->fetchAll(); 

$stmt2 = $conn->prepare("SELECT idpersonal, apellidos, nombres FROM personal where status != '99' order by apellidos ASC");
$stmt2->execute();
$doc = $stmt2->fetchAll(); 
?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Asignar Docente</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="asignaturas.php">Asignaturas</a>
                                </li>
                                <li class="breadcrumb-item active">Asignar Docente
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form-horizontal" action="app/asignaturas.php" method="post" enctype="multipart/form-data" novalidate>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Asignatura <span class="required">*</span></h5>
                                                        <div class="controls">
                                                           <select class="form-group" name="grupo_ida">
                                                                
                                                                   <option value="0">Elige una asignatura</option>
                                                                   <?php foreach ($result as $value) { ?>
                                                                   <option value="<?=$value['IDSb']?>"><?=$value['Des']?>–<?=$value['PEE']?>–<?=$value['DC']?>
                                                                   </option>
                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Periodo Académico <span class="required">*</span></h5>
                                                        <div class="controls">
                                                           <select class="form-group" name="grupo_peracad">
                                                                
                                                                   <option value="0">Elige un periodo</option>
                                                                   <?php foreach ($peracad as $value) { ?>
                                                                   <option value="<?=$value['idperiodo']?>"><?=$value['descripcion']?>
                                                                   </option>
                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Profesor Encargado <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_idp">
                                                                
                                                                   <option value="0">Elige un profesor</option>
                                                                   <?php foreach ($doc as $value) { ?>
                                                                   <option value="<?=$value['idpersonal']?>"><?=$value['apellidos']?>, <?=$value['nombres']?>
                                                                   </option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="text-right">
                                                        <button type="submit" name="btn_save" class="btn btn-success">Guardar <i class="la la-thumbs-o-up position-right"></i></button>
                                                        <a href="profasignado.php" class="btn btn-danger">Cancelar <i class="la la-close position-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <?php include 'footer.php'; ?>
