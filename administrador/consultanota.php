<?php
require_once('../assets/constants/config.php');
require_once('../assets/constants/conexion.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
    <!-- BEGIN: Content-->
    <script src="js/jspdf.min.js"></script> <!--Script de librería jsPDF, para convertir elementos HTML a PDF -->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Consultar Notas</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active">Consultar Notas
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
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form-horizontal" action="app/reporte.php" method="" enctype="multipart/form-data" novalidate>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Periodo Academico <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_idperacad" id="grupo_idperacad"> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Alumno <span class="required">*</span></h5>
                                                        <div class="controls">
                                                                <select class="form-group" name="grupo_idalum" id="grupo_idalum">              
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">


                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                                        <button type="submit" name="btn_query" id="btn_query" class="btn btn-success">Consultar <i class="la la-thumbs-o-up position-right"></i></button>
                                                        <a href="app/reporte.php">Reporte</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="imprimir" style="margin-right: 15%; margin-left: 15%;">
                                <div class="card-content collapse show" >
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                                        <div class="table-responsive">
                                          <div id="tbl_notas"></div>

                                        </div>
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

  <script type="text/javascript" src="js/alumnos.js"></script>
  <script>
    function pruebaDivAPdf() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        span = document.getElementById("select2-grupo_idalum-container");
        period = document.getElementById("select2-grupo_idperacad-container");
        source = $('#imprimir')[0];
        pdf.text(80,40, 'ESCUELA SUPERIOR DE ARTE DRAMÁTICO DE TRUJILLO');
        pdf.text(180,60, '"VIRGILIO RODRÍGUEZ NACHE"');
        pdf.text(40,120,'Alumno:' + span.textContent);
        pdf.text(40,160,'Periodo:' + period.textContent);

        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        };
        margins = {
            top: 210,
            bottom: 60,
            left: 90,
            width: 522
        };

        pdf.fromHTML(
            source, 
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, 
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                pdf.save('Prueba.pdf');
            }, margins
        );
    }
</script>

  <style type="text/css">
  .table-notas {
  width: 100%;
  margin-bottom: 0.4rem;
  color: black;
  text-align: center; }
  .table-notas th,
  .table-notas td {
    padding: 0.40rem;
    border-top: 1.5px solid #00A5A8; }
  .table-notas thead th {
    vertical-align: bottom;
    border-bottom: 1.5px solid #00A5A8; }
  .table-notas tbody + tbody {
    border-top: 2.5px solid #00A5A8; }
  .table-notas {
  border: 1.5px solid #00A5A8; }
  .table-notas th,
  .table-notas td {
    border: 1.5px solid #00A5A8; }
  .table-notas thead th,
  .table-notas thead td {
    border-bottom-width: 2px; }
  .table-notas thead th {
      vertical-align: bottom;
      border-bottom: 2.8px solid #00A5A8;
      border-top: 2.8px solid #00A5A8; }
    /*Bordes de las tablas*/
     .table-notas th, .table-notas td {
      /*Borde Superior*/
      border: 1.5px solid #00A5A8; }
    .table-notas th, .table-notas td { 
    border-bottom: 1.2px solid #00A5A8;
    }
    .table-notas {
      /*Borde Entorno*/
      border: 1.5px solid #00A5A8; }
      .font{
        font-size: 12px;
        font-family: Times New Roman;
    }
    .btn-pdf{
    
      height:22px;
      width:22px;
      background-position:center;
      background-color: transparent;
      border-color: transparent;
      box-shadow: none;
      float: left;
    }
    .btn-pdf:focus {
      outline: none;
    }
      </style>
    