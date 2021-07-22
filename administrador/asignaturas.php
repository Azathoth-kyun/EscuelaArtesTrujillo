<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT SA.idsubarea AS IDSA ,SA.descripcion AS DESA, PE.especialidad as PEE, A.descripcion as DEA ,SA.horas AS HRS, SA.creditos AS CRD, C.descripcion AS DC, SA.status FROM subareas SA inner join areas A ON SA.id_area = A.idarea INNER JOIN ciclo C ON SA.id_ciclo = C.idciclo inner join plan_estudios AS PE ON A.id_plan = PE.idplan INNER JOIN peracad PA ON PE.id_periodo = PA.idperiodo where SA.status = !99 and PA.status = '00'");
$stmt->execute();
$result = $stmt->fetchAll();

?>
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Asignaturas</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active">Asignaturas
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
                                <div class="card-header">                                    
                                    <h4 class="card-title"><a href="agregasignatura.php" class="btn btn-primary "><i class="la la-plus"></i> Nuevo</a>&nbsp; <a href="ciclo.php" class="btn btn-primary "><i class="la la-eye"></i> Ciclos</a></h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">                                        
                                    <?php require_once('../assets/constants/check-reply.php');?>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered dom-jQuery-events" style="">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="font">Descripcion</th>
                                                        <th class="font">Sub Área</th>
                                                        <th class="font">Especialidad</th>
                                                        <th class="font">Horas</th>
                                                        <th class="font">Creditos</th>
                                                        <th class="font">Ciclo</th>
                                                        <th class="font">Control</th>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                    <?php 
                                                    $i=1;
                                                    foreach ($result as $value) {
                                                     ?>
                                                    <tr>
                                                        <td><?=$i?></td>
                                                        <td class="font"><?=$value['DESA']?></td>
                                                        <td class="font"><?=$value['DEA']?></td>
                                                        <td class="font"><?=$value['PEE']?></td>
                                                        <td class="font"><?=$value['HRS']?></td>
                                                        <td class="font"><?=$value['CRD']?></td>
                                                        <td class="font"><?=$value['DC']?></td>
                                                        <td class="font">
                                                            <a title="Editar" href="editasignacion.php?id=<?=$value['IDSA']?>" class="btn btn-icon btn-primary mr-1 mb-1"><i class="la la-edit"></i></a>
                                                            <button title="Eliminar" type="button" class="btn btn-icon btn-danger mr-1 mb-1 cancel-button" id="<?=$value['IDSA']?>"><i class="la la-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                <?php $i++; } ?>
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
<script>
    $(document).ready(function(){

    $('.cancel-button').on('click',function(){        
        swal({
            title: "Estás seguro?",
            text: "Para borrar este registro!",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "Cancelar",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Borrar",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        })
        .then((isConfirm) => {
            if (isConfirm) {
                var id=this.id;
            $.ajax({
              url: "app/subarea.php?id="+id,
              type: "GET",
              success: function(inputValue){
                swal("Eliminado!", "Su registro ha sido eliminado.", "success");
                setTimeout(function(){// wait for 5 secs(2)
                   location.reload(); // then reload the page.(3)
              }, 1000); 
                }
            });
                
            } else {
                swal("Cancelado ", "Tu registro esta seguro", "error");
            }
        });

    });   

});
</script>
<style type="text/css">
    .font{
        font-size: 12px;
        font-family: Times New Roman;
    }
    .box
    {
        width:25px; 
        height: 25px; 
        border-radius: 0.25em;
        text-align:center;
        border-style: inset;
    }
</style>