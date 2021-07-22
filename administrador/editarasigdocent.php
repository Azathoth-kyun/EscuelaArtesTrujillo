<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');
?>
<?php 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
$stmt = $conn->prepare("SELECT idasdoc, id_asignatura, id_profesor, id_periodo FROM docente_asignatura WHERE idasdoc='".$_GET['id']."'");
$stmt->execute();   
$result = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt1 = $conn->prepare("SELECT idsubarea,descripcion FROM subareas where status != '99'");
$stmt1->execute();
$sub = $stmt1->fetchAll();

$stmt2 = $conn->prepare("SELECT idpersonal, apellidos, nombres FROM personal where status != '99'");
$stmt2->execute();
$doc = $stmt2->fetchAll();  

$stmt3 = $conn->prepare("SELECT idperiodo,descripcion, status FROM peracad WHERE status = '00'");
$stmt3->execute();
$peracad = $stmt3->fetchAll();
?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Editar Asignatura</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="asignaturas.php">Asignaturas</a>
                                </li>
                                <li class="breadcrumb-item active">Editar Asignatura
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
                                            <input type="hidden" name="id" value="<?=$result['idasdoc']?>">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                   
                                                    
                                                    <div class="form-group">
                                                        <h5>Asignatura <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_ida">
                                                                <option value="0">Elige una asignatura</option>
                                                                <?php foreach ($sub as $value) { ?>
                                                                   <option value="<?=$value['idsubarea']?>" <?php if($result['id_asignatura']==$value['idsubarea']){ echo "selected"; }?>><?=$value['descripcion']?>
                                                                    </option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Periodo Académico <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_ida" disabled="true">
                                                                <?php foreach ($peracad as $value) { ?>
                                                                   <option value="<?=$value['idperiodo']?>" <?php if($result['id_periodo']==$value['idperiodo']){ echo "selected"; }?>><?=$value['descripcion']?>
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
                                                            <select class="form-group" name="grupo_idc"  >
                                                                <?php foreach ($doc as $value) { ?>
                                                                   <option value="<?=$value['idpersonal']?>" <?php if($result['id_profesor']==$value['idpersonal']){ echo "selected"; }?>><?=$value['apellidos']?>, <?=$value['nombres']?>
                                                                    </option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="text-right">
                                                        <button type="submit" name="btn_edit" class="btn btn-success">Submit <i class="la la-thumbs-o-up position-right"></i></button>
                                                        <a href="profasignado.php" class="btn btn-danger">Cancel <i class="la la-close position-right"></i></a>
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
