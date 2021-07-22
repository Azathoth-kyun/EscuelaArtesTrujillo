<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT M.id_alumno, A.apellidos, A.nombres from matricula M inner join alumno A ON M.id_alumno = A.idalumno inner join peracad PA ON M.id_periodo = PA.idperiodo where PA.status = '00'");
$stmt->execute();
$alumnos = $stmt->fetchAll();

$stmt1 = $conn->prepare("SELECT idperiodo, descripcion FROM peracad where status = '00'");
$stmt1->execute();
$peracad = $stmt1->fetchAll();  
if(isset($_POST["btn_edit"]))
{
  $name = $_POST['numero'];
  //echo($_POST['id']);
  echo "$name";



}
?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">SubSanación</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active">SubSanación
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
                                            <select name="grupo_idal" id="grupo_idal">
                                              <option value="">Elige un alumno</option>
                                              <?php
                                              foreach ($alumnos as $value) {
                                              ?>
                                              <option value="<?=$value['id_alumno']?>"><?=$value['apellidos']?>, <?=$value['nombres']?></option>
                                              <?php
                                            }
                                              ?>
                                            </select>   
                                        </div>
                                        <div class="form-group"  style="margin-left: 20%;margin-right: 20%;">
                                            <label for="exampleInputEmail1">Periodo Académico</label>
                                            <select  name="grupo_peracad" id="grupo_peracad">
                                              <?php
                                              foreach ($peracad as $value) {
                                              ?>
                                              <option value="<?=$value['idperiodo']?>"><?=$value['descripcion']?></option>
                                              <?php
                                            }
                                              ?>
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
                                          <div id="tbl_resumen">
                                            
                                          </div>
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


$('#btn_query').on('click', function(){
    var idal = $('#grupo_idal').val()
    var idape = $('#grupo_peracad').val()
    $.ajax({
      type: 'POST',
      url: 'app/resumen-subsanacion.php',
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