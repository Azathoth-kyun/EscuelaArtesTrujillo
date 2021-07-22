<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_start();

if(isset($_POST['btn_save']))
{
    $idresumen = $_POST['idresumen'];
    $idprioridad = $_POST['group-prioridad'];
    if ($idprioridad == '0') {
        //
    }
    else
    {
        $stmt = $conn->prepare("UPDATE resumen_asignatura SET id_subarea = :idp WHERE idresumen = :idr");
        $stmt->bindParam(':idp',$_POST['group-prioridad']);
        $stmt->bindParam(':idr', $_POST['idresumen']);
        $stmt->execute();
    }
}

?>
<!-- final-->
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"></h3>

                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="misasignaturas.php">Mis Asignaturas</a>
                                </li>
                                <li class="breadcrumb-item active">saa
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
               <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">                                        
                                        <?php require_once('../assets/constants/check-reply.php') ;?>
                                          <div class="table-responsive">
                                           
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                 
                                                        <th class="font">#</th>
                                                        <th class="font">Asignatura</th>
                                                        <th class="font">C2</th>
                                                        <th class="font">C3</th>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                    <?php
                            $stmt= $conn->prepare("SELECT RA.idresumen AS IDR ,RA.id_alumno, SA.idsubarea as IDSA, SA.descripcion, RA.id_periodo from resumen_asignatura RA inner join subareas SA ON RA.id_subarea = SA.idsubarea INNER JOIN peracad PA  ON RA.id_periodo = PA.idperiodo where RA.id_alumno = '".$_GET['id']."'");
                            $stmt->execute();
                            $result = $stmt->fetchAll(); 
                                                    $i=1;
                                                    foreach ($result as $value) {
                                                    ?>
                                                   <form method="post">
                                                      <tr>
                                                        <td class="font"><?=$i?></td>
                                                        <td class="font box">
                                                            <input type="text" name="idresumen" value="<?=$value['IDR']?>" hidden="true"><?=$value['descripcion']?>
                                                        </td>
                                                        <td>
                                                           <select style="width:200px; font-size: 12px;" class="form-group" name="group-prioridad">
                                                                <option style="width:320px;" value="0">---Seleccionar---</option>
                                                                
                                                        <?php 
                            $stmt1= $conn->prepare("SELECT S.prioridad AS IDPR, SA.descripcion AS Requisito FROM subareas S inner join subareas SA  ON S.prioridad = SA.idsubarea WHERE S.idsubarea = $value[IDSA]");
                            $stmt1->execute();
                            $prioridad = $stmt1->fetchAll(); 
                                                        foreach ($prioridad as $value1) {
                                                        
                                                        ?>
                                                                    <option value="<?=$value1['IDPR']?>"><?=$value1['Requisito']?></option>
                                                        <?php
                                                    }
                                                        ?>
                                                            </select>
                                                        </td>
                                                        <td>
                                                          <button type="submit" name="btn_save" class="btn btn-success">Grabar</button>

                                                        </td>
                                                    </tr>
                                                  </form>
                                                  <?php
                                              $i++;
                                              }
                                                  ?>
                                                </tbody> 

                                            </table>
                                        </div>
                                    </div>
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
<style type="text/css">
    .font{
        font-size: 14px;
        font-family: Times New Roman;
    }
    .box
    {
        width:450px; 
        height: 25px; 
        border-radius: 0.25em;
        text-align:center;
        border-style: inset;
    }
</style>