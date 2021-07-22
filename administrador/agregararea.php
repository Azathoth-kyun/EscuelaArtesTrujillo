<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT idplan,descripcion,especialidad FROM plan_estudios WHERE status = !99");
$stmt->execute();
$plan = $stmt->fetchAll(); 
?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Agregar Area</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="areas.php">Area</a>
                                </li>
                                <li class="breadcrumb-item active">Agregar Area
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
                                        <form class="form-horizontal" action="app/area.php" method="post" enctype="multipart/form-data" novalidate>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Descripción <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control mb-1" required data-validation-required-message="Nombres es requerido">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Plan de Estudios <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_id">
                                                                <option value="0">Seleccione un plan</option>
                                                                <?php foreach ($plan as $value) { ?>
                                                                    <option value="<?=$value['idplan']?>"><?=$value['descripcion']?>-<?=$value['especialidad']?></option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" name="btn_save" class="btn btn-success">Guardar <i class="la la-thumbs-o-up position-right"></i></button>
                                                        <a href="areas.php" class="btn btn-danger">Cancelar <i class="la la-close position-right"></i></a>
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
