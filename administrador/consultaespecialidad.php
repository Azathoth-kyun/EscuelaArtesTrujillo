<?php
require_once('../assets/constants/config.php');
require_once('../assets/constants/conexion.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
    <!-- BEGIN: Content-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/jspdf.min.js"></script> <!--Script de librería jsPDF, para convertir elementos HTML a PDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.2.11/jspdf.plugin.autotable.js"></script>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Consultar Especialidad</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active">Consultar Especialidad
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
                                                        <h5>Especialidad <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_espec" id="grupo_espec"> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Ciclo <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_cic" id="grupo_cic"> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <h5>Sub-Area <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-group" name="grupo_suba" id="grupo_suba"> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                        <button type="submit" name="btn_query" id="btn_query" class="btn btn-success">Consultar <i class="la la-thumbs-o-up position-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="margin-right: 15%; margin-left: 15%;">
                                <div class="card-content collapse show" >
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                                        <div id="imprimir" class="table-responsive">
                                          <div id="tbl_resnotas"></div>

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

    <script type="text/javascript" src="js/especialidad.js"></script>
    <script>
    function pruebaDivAPdf() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        period = document.getElementById("select2-grupo_idperacad-container");
        especialidad = document.getElementById("select2-grupo_espec-container");
        ciclo = document.getElementById("select2-grupo_cic-container");
        curso = document.getElementById("select2-grupo_suba-container");
        res = pdf.autoTableHtmlToJson(document.getElementById('parent-id'));
        pdf.text(80,40, 'ESCUELA SUPERIOR DE ARTE DRAMÁTICO DE TRUJILLO');
        pdf.text(180,60, '"VIRGILIO RODRÍGUEZ NACHE"');
        pdf.text(40,120, 'Periodo: '+ period.textContent);
        pdf.text(40,140, 'Especialidad: '+ especialidad.textContent);
        pdf.text(40,160, 'Ciclo: '+ ciclo.textContent);
        pdf.text(40,180, 'Curso: '+ curso.textContent);
        
        var options = {
        startY: pdf.autoTableEndPosY() + 210
        // margin: {
        // top: 210
        // }
        };

        aux = pdf.autoTable(res.columns, res.data, options);
        pdf.save(curso.textContent + '.pdf');
        
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