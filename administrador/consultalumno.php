<?php
require_once('../assets/constants/config.php');
require_once('../assets/constants/conexion.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Consultar Alumno</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active">Consultar Alumno
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
                                       <div class="form-group"  style="margin-left: 20%;margin-right: 20%;">
                                            <label for="exampleInputEmail1">Alumno</label>
                                            <select class="form-control form-group" name="grupo_idal" id="grupo_idal">           
                                            </select>
                                        </div>
                                        <div class="form-group"  style="margin-left: 20%;margin-right: 20%;">
                                            <label for="exampleInputEmail1">Periodo Académico</label>
                                            <select class="form-control form-group" name="grupo_peracad" id="grupo_peracad">           
                                            </select>
                                        </div>
                      <div class="form-group col-md-12">
                        <button style="margin-left: 45%" type="submit" name="btn_query" id="btn_query" class="btn btn-success">Consultar</button>
                           </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="margin-right: 20%; margin-left: 20%;">
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">                                        
                                        <?php require_once('../assets/constants/check-reply.php') ;?>
                                        <div class="table-responsive" style="">
                                            <table class="table table-striped table-bordered" id="tbl_resumen">
                                                
                                            </table>

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


<!-- -->
    <?php include 'footer.php'; ?>
    

  <script type="text/javascript">
      $(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'app/lista_alumnos.php'
  })
  .done(function(listas_rep){
    $('#grupo_idal').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar alumnos')
  })
  $('#grupo_idal').on('change', function(){
    var id = $('#grupo_idal').val()
    $.ajax({
      type: 'POST',
      url: 'app/lista_periodo_alumno.php',
      data: {'id': id}
    })
    .done(function(listas_rep){
      $('#grupo_peracad').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar alumnos')
    })
  })
$('#btn_query').on('click', function(){
    var idal = $('#grupo_idal').val()
    var idape = $('#grupo_peracad').val()
    $.ajax({
      type: 'POST',
      url: 'app/resumen_alumno.php',
      data: {'ida': idal,'idp': idape  }
    })
    .done(function(listas_rep){
      $('#tbl_resumen').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar notas')
    })
  })
})
  </script>