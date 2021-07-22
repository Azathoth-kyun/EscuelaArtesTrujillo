<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT id,descripcion FROM tipo_usuario where status = !99");
$stmt->execute();
$tipo = $stmt->fetchAll(); 


$stmt1 = $conn->prepare("SELECT idpersonal,apellidos,nombres  FROM personal where status = !99");
$stmt1->execute();
$personal = $stmt1->fetchAll(); 
?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Agregar Usuario</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Incio</a>
                                </li>
                                <li class="breadcrumb-item"><a href="usuarios.php">Usuarios</a>
                                </li>
                                <li class="breadcrumb-item active">Agregar Usuario
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
                                        <form class="form-horizontal" action="app/users.php" method="post" enctype="multipart/form-data" novalidate>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Nombre de Usuario <span class="required">*</span></h5>
                                                        <div class="controls">
                                                        <div id="checkuser" class=""></div>
                                                            <input type="text" name="usuario" id="usuario" class="form-control mb-1" required data-validation-required-message="Nombre de usuario es requerido">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                   <div class="form-group">
                                                        <h5>Personal Encargado <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="group_personal">
                                                                <option value="x" >N/A</option>
                                                                <?php foreach ($personal as $value) { ?>
                                                                    <option value="<?=$value['idpersonal']?>"><?=$value['apellidos']?>, <?=$value['nombres']?></option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Contrasena <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control mb-1" minlength="5" maxlength="15" required data-validation-required-message="Contraseña es requerido">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                 <div class="col-lg-6 col-md-12">
                                                   
                                                     <div class="form-group">
                                                        <h5>Rol <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="group_tipo">
                                                                <option value="x" >N/A</option>
                                                                <?php foreach ($tipo as $value) { ?>
                                                                    <option value="<?=$value['id']?>"><?=$value['descripcion']?></option>
                                                               <?php } ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" name="btn_save" class="btn btn-success">Guardar <i class="la la-thumbs-o-up position-right"></i></button>
                                                        <a href="usuarios.php" class="btn btn-danger">Cancelar <i class="la la-close position-right"></i></a>
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
      $(document).ready(function () {
      $("#usuario").keyup(checarUsuarios);
      });
     $(document).ready(function () {
   $("#usuario").change(checarUsuarios);
    });


function checarUsuarios() {
var usuario= document.getElementById('usuario').value;


var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (xhttp.readyState == 4 && xhttp.status == 200) {
document.getElementById("checkuser").innerHTML = xhttp.responseText;
}
};
xhttp.open("POST", "checarusuario.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("usuario="+usuario+"");


}

</script>
