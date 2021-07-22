<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt1 = $conn->prepare("SELECT idarea,descripcion FROM areas where status = !99");
$stmt1->execute();
$area = $stmt1->fetchAll(); 

$stmt2 = $conn->prepare("SELECT idciclo,descripcion FROM ciclo where status = !99");
$stmt2->execute();
$ciclo = $stmt2->fetchAll();

$stmt3 = $conn->prepare("SELECT idperiodo,descripcion FROM peracad WHERE status = '00'");
$stmt3->execute();
$peracad = $stmt3->fetchAll(); 
?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Agregar Fecha de Promedios</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="fecprom.php">Fecha de Promedios</a>
                                </li>
                                <li class="breadcrumb-item active">Agregar Fecha de Promedios
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
                                        <form class="form-horizontal" action="app/fecprom.php" method="post" enctype="multipart/form-data" novalidate>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Descripción <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="des" class="form-control mb-1" required data-validation-required-message="Descripción es requerido">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Fecha de Inicio <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" name="fec_inc" class="form-control mb-1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Fecha de Finalización <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" name="fec_fin" class="form-control mb-1" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Periodo Academico <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select>
                                                                <option value="0">Elige un periodo</option>
                                                                   <?php foreach ($peracad as $value) { ?>
                                                                   <option value="<?=$value['idperiodo']?>"><?=$value['descripcion']?>
                                                                   </option>
                                                               <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" name="btn_save" class="btn btn-success">Guardar <i class="la la-thumbs-o-up position-right"></i></button>
                                                        <a href="fecprom.php" class="btn btn-danger">Cancelar <i class="la la-close position-right"></i></a>
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
