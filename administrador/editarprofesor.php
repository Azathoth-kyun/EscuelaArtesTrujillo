<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');
?>
<?php 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
$stmt = $conn->prepare("SELECT idPersonal, dni, apellidos, nombres, fecnaci, direccion, telefono, celular,email,idtp   FROM personal WHERE idpersonal='".$_GET['id']."'");
$stmt->execute();   
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt1 = $conn->prepare("SELECT idtipo,descripcion FROM tipo_personal");
$stmt1->execute();
$groups = $stmt1->fetchAll(); 

$stmt2 = $conn->prepare("SELECT idestado,descripcion FROM estado");
$stmt2->execute();
$status = $stmt2->fetchAll(); 

?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Editar Profesor</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active">Editar Profesor
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
                                        <form class="form-horizontal" action="app/profesores.php" method="post" enctype="multipart/form-data" novalidate>
                                            <input type="hidden" name="id" value="<?=$result['IdPersonal']?>">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>D.N.I. <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="number" name="dni" class="form-control mb-1" value="<?=$result['dni']?>" required data-validation-required-message="Supplier name is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Apellidos <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="surname" class="form-control mb-1" value="<?=$result['apellidos']?>" required data-validation-required-message="Address is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Nombres <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control mb-1" value="<?=$result['nombres']?>" required data-validation-required-message="Telephone is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Fecha de Nacimiento <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" name="date" class="form-control mb-1" value="<?=$result['fecnaci']?>"required data-validation-required-message="Fecha de Nacimiento es requerido">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Dirección <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="add" class="form-control mb-1" value="<?=$result['direccion']?>" required data-validation-required-message="Fax is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Telefono <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input name="phone" class="form-control mb-1" value="<?=$result['telefono']?>" required data-validation-required-message="Telefono es requerido" maxlength="9">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Celular <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input name="phone2" class="form-control mb-1" value="<?=$result['celular']?>" required data-validation-required-message="Telefono es requerido" maxlength="9">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Correo Electronico <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control mb-1" value="<?=$result['email']?>" required data-validation-required-message="Telefono es requerido">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Contratado / Nombrado <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_id">
                                                                <?php foreach ($groups as $value) { ?>
                                                                   <option value="<?=$value['IdTipo']?>" <?php if($result['Idtp']==$value['idtipo']){ echo "selected"; }?>><?=$value['descripcion']?>
                                                                    </option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" name="btn_edit" class="btn btn-success">Guardar <i class="la la-thumbs-o-up position-right"></i></button>
                                                        <a href="profesores.php" class="btn btn-danger">Cancelar <i class="la la-close position-right"></i></a>
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
