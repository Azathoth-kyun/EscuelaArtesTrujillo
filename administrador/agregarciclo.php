<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt->execute();
$result = $stmt->fetchAll(); 
?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Agregar Ciclo</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item"><a href="matricula.php">Matricula</a>
                                </li>
                                <li class="breadcrumb-item"><a href="ciclo.php">Ciclo</a>
                                </li>
                                <li class="breadcrumb-item active">Agregar Ciclo
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
                                        <form  method="POST" action="app/ciclo.php">

                                       <div class="form-group"  style="margin-left: 25%;margin-right: 25%;">
                                            <label for="exampleInputEmail1">Descripción</label>
                                            <input type="text" class="form-control" placeholder="Descripcion" name="description" required autocomplete="off">
                                        </div>

                                  <div class="form-group">
                                        
                                  </div>


                      <div class="form-group col-md-12">
                        <button style="margin-left: 40%;" type="submit" name="btn_submit" class="btn btn-success">Guardar</button> 
                        <a href="ciclo.php" class="btn btn-danger">Cancelar <i class="la la-close position-right"></i></a>
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
