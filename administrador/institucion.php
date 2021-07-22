<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');
?>
<?php 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
$stmt = $conn->prepare("SELECT cod_institucion, nombre_institucion, tipo_gestion, creacion_revalidacion, region, direccion, provincia, distrito FROM info_institucional");
$stmt->execute();   
$result = $stmt->fetch(PDO::FETCH_ASSOC);

?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Mi Información Academica</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active">Mi Información Academica
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
                                        <form class="form-horizontal" action="app/update_info.php" method="post" enctype="multipart/form-data" novalidate>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Código <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="cod" class="form-control mb-1" value="<?=$result['cod_institucion']?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Nombre de la Institución <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control mb-1" value="<?=$result['nombre_institucion']?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Tipo de Gestión <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="gestion" class="form-control mb-1" value="<?=$result['tipo_gestion']?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>D.S. / R.M. de Creación y R.D. de Revalidación <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="creareva" class="form-control mb-1" value="<?=$result['creacion_revalidacion']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Región <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="region" class="form-control mb-1" value="<?=$result['region']?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Dirección <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="direccion" class="form-control mb-1" value="<?=$result['direccion']?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Provincia <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="provincia" class="form-control mb-1" value="<?=$result['provincia']?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Distrito <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="distrito" class="form-control mb-1" value="<?=$result['distrito']?>">
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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
