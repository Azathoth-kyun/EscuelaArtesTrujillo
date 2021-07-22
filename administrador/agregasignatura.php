<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt1 = $conn->prepare(" SELECT A.idarea AS ID, A.descripcion AS DES, PE.especialidad AS ESP FROM areas A INNER JOIN plan_estudios PE ON A.id_plan = PE.idplan  WHERE A.status= !99");
$stmt1->execute();

$area = $stmt1->fetchAll(); 

$stmt2 = $conn->prepare("SELECT idciclo,descripcion FROM ciclo where status = !99");
$stmt2->execute();
$ciclo = $stmt2->fetchAll();

$stmt3 = $conn->prepare("SELECT idsubarea,descripcion, id_ciclo FROM subareas where status = !99");
$stmt3->execute();
$sub = $stmt3->fetchAll();

$stmt4 = $conn->prepare("SELECT id,descripcion FROM permite_extras");
$stmt4->execute();
$permiso = $stmt4->fetchAll();

?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Agregar Asignatura</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="asignaturas.php">Asignaturas</a>
                                </li>
                                <li class="breadcrumb-item active">Agregar Asignatura
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
                                        <form class="form-horizontal" action="app/subarea.php" method="post" enctype="multipart/form-data" novalidate name="frmasignatura">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Descripción <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="des" class="form-control mb-1" required data-validation-required-message="Descripción es requerido">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Área <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_ida" required>
                                                                <option value=""> Elige un Área</option>
                                                                <?php foreach ($area as $value) { ?>
                                                                    <option value="<?=$value['ID']?>"><?=$value['DES']?> – <?=$value['ESP']?></option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Horas <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="hour" class="form-control mb-1" required data-validation-required-message="Hora es requerido">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Creditos <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="credit" class="form-control mb-1" required data-validation-required-message="Creditos es requerido">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>CICLO <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_idc" required>
                                                                <option value="">Seleccion un Ciclo</option>
                                                                <?php foreach ($ciclo as $value) { ?>
                                                                    <option value="<?=$value['idciclo']?>"><?=$value['descripcion']?></option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Permite Aplazado <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_aplazado" required>
                                                                <option value="">Seleccion una Opción</option>
                                                                <?php foreach ($permiso as $value) { ?>
                                                                    <option value="<?=$value['id']?>"><?=$value['descripcion']?></option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Permite Promedio Jurado <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_jurado" required>
                                                                <option value="">Seleccion una Opción</option>
                                                                <?php foreach ($permiso as $value) { ?>
                                                                    <option value="<?=$value['id']?>"><?=$value['descripcion']?></option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Pre-Requisito <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_idasig">
                                                                <option value="0">Ninguna</option>
                                                                <?php foreach ($sub as $value) { ?>
                                                                    <option value="<?=$value['idsubarea']?>"><?=$value['descripcion']?> - <?=$value['id_ciclo']?></option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" name="btn_save" class="btn btn-success">Guardar <i class="la la-thumbs-o-up position-right"></i></button>
                                                        <a href="asignaturas.php" class="btn btn-danger">Cancelar <i class="la la-close position-right"></i></a>
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
<script>
        function val_a(){
if(document.frmasignatura.grupo_permiso.value == "")
{
    alert("Seleccione Permiso.");
    frmasignatura.grupo_permiso.focus(); 
    return false;
}
return true;
}
</script>