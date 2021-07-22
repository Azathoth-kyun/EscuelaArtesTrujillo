<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT id_alumno, id_subarea, promdj, ptj FROM resumen_asignatura where id_alumno= '".$_GET['id']."'");
$stmt->execute();
$result = $stmt->fetchAll(); 
?>
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"></h3>
                                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="misasignaturas.php">Mis Asignaturas</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">                                        
                                        <?php require_once('../assets/constants/check-reply.php') ;?>
                                        <div class="table-responsive" style="padding-left: 150px; padding-right: 150px;">
                                          
                                           <table style="text-align: center;" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">#</th>
                                                        <th rowspan="2" style="width:200px;">Asignaturas</th>
                                                        <th style="text-align: center;" colspan="2">Resumen</th>
                                                    </tr>
                                                    <tr>
                                                        <!--Resumen-->
                                                        <th>Promedio</th>
                                                        <th>Puntaje</th>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <input style="width:300px; height: 38px; border-radius: 0.25em;" disabled value="">
                                                        </td>
                                                        <td>
                                                          <input style="width:45px; height: 38px; border-radius: 0.25em; text-align:center;" disabled value="">
                                                        </td>
                                                        <td>
                                                          <input style="width:45px; height: 38px; border-radius: 0.25em; text-align:center;" disabled value="">
                                                        </td>
                                                    </tr>
                                                </tbody> 
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                </section>
                <!-- DOM - jQuery events table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php include 'footer.php'; ?>