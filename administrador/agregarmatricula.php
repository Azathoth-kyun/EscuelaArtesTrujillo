s<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT idalumno,apellidos,nombres FROM alumno where status != '99'");
$stmt->execute();
$result = $stmt->fetchAll(); 

$stmt1 = $conn->prepare("SELECT idperiodo,descripcion FROM peracad where status = '00'");
$stmt1->execute();
$periodo = $stmt1->fetchAll(); 
$stmt2 = $conn->prepare("SELECT idciclo,descripcion FROM ciclo where status != '99'");
$stmt2->execute();
$ciclo = $stmt2->fetchAll(); 

$stmt3 = $conn->prepare("SELECT idplan,descripcion,especialidad FROM plan_estudios where status != '99'");
$stmt3->execute();
$plan = $stmt3->fetchAll(); 

$stmt4 = $conn->prepare("SELECT idclas,descripcion FROM clasificacion where categoria= 'MATRICULA'");
$stmt4->execute();
$clas = $stmt4->fetchAll(); 
?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Agregar Matricula</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="matricula.php">Matricula</a>
                                </li>
                                <li class="breadcrumb-item active">Agregar Matricula
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
                                        <form class="form-horizontal" action="app/matriculas.php" method="post" enctype="multipart/form-data" novalidate>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Codigo Matricula <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="cod" class="form-control mb-1" required data-validation-required-message="Codigo es requerido" maxlength="10" min="1" placeholder="Escribe un Codigo">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Alumno <span class="required">*</span></h5>
                                                        <div class="controls">
                                                           <select class="form-group" name="id_alum">
                                                                <option value="x">Elige un Alumno</option>
                                                                 <?php foreach ($result as $value) { ?>
                                                                    <option value="<?=$value['idalumno']?>"><?=$value['apellidos']?>, <?=$value['nombres']?>,<?=$value['idalumno']?></option>
                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Tipo de Matricula <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="id_tpm">
                                                                <option value="x">Elige un Tipo</option>
                                                                 <?php foreach ($clas as $value) { ?>
                                                                    <option value="<?=$value['idclas']?>"><?=$value['descripcion']?>,<?=$value['idclas']?></option>
                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Especialidad <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="id_plan">
                                                                <option value="x">Elige una Especialidad</option>
                                                                <?php foreach ($plan as $value) { ?>
                                                                    <option value="<?=$value['idplan']?>"><?=$value['descripcion']?> – <?=$value['especialidad']?>, <?=$value['idplan']?></option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Ciclo <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="id_ciclo">
                                                                <option value="x">Elige un Ciclo</option>
                                                                <?php foreach ($ciclo as $value) { ?>
                                                                    <option value="<?=$value['idciclo']?>"><?=$value['descripcion']?>, <?=$value['idciclo']?></option>
                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Periodo Academico <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="id_peracad">
                                                                <?php foreach ($periodo as $value) { ?>
                                                                    <option value="<?=$value['idperiodo']?>"><?=$value['descripcion']?>, <?=$value['idperiodo']?></option>
                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Fecha de Registro <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input class="form-control mb-1" type="text" name="date" id="fecha" value="<?php echo date("d/m/Y"); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" name="btn_save" class="btn btn-success">Guardar <i class="la la-thumbs-o-up position-right"></i></button>
                                                        <a href="matricula.php" class="btn btn-danger">Cancelar <i class="la la-close position-right"></i></a>
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

