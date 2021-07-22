<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
include('header.php');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT id, descripcion, f_activa, f_desactiva, status FROM fecha_promedios where status != '99'");
$stmt->execute();
$result = $stmt->fetchAll();

?>
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="conte, fin_periodont-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Fecha de Promedios</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active">Fecha de Promedios
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
                                    <h4 class="card-title"><a href="agregfecprom.php" class="btn btn-primary "><i class="la la-plus"></i> Nuevo</a></h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">                                        
                                        <?php require_once('../assets/constants/check-reply.php') ;?>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered dom-jQuery-events">
                                                <thead>
                                                    <tr>
                                                        <th class="font">#</th>
                                                        <th class="font">Descripcion</th>
                                                        <th class="font">Incio</th>
                                                        <th class="font">Fin</th>
                                                        <th class="font">Control</th>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                    <?php 
                                                    $i=1;
                                                    foreach ($result as $value) {
                                                     ?>
                                                    <tr>
                                                        <td class="font"><?=$i?></td>
                                                        <td class="font"><?=$value['descripcion']?></td>
                                                        <td class="font"><?=$value['f_activa']?></td>
                                                        <td class="font"><?=$value['f_desactiva']?></td>
                                                        <td>
                                                            <a title="Editar" href="editfecprom.php?id=<?=$value['id']?>" class="btn btn-icon btn-primary "><i class="la la-edit"></i></a>
                                                            <button type="button" title="Finalizar" class="btn btn-icon btn-danger cancel-button" id="<?=$value['id']?>"><i class="la la-trash"></i></button>
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
            title: "Deseas finalizar este periodo ácademico?",
            //text: "Para borrar este registro!",
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
                    text: "Finalzar",
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
              url: "app/peracad.php?id="+id,
              type: "GET",
              success: function(inputValue){
                swal("Finalizado!", "Su registro ha sido finalizado.", "success");
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
    .label
    {
      display: inline-block;
      font-weight: 400;
      color: #ffff;
      text-align: center;
      vertical-align: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-color: transparent;
      border: 1px solid transparent;
      padding: 0.05rem 0.55rem;
      font-size: 0.95rem;
      line-height: 1.25;
      border-radius: 0.50rem;
    }
    .activo
    {
        background-color: #5BB826;
        color: #fff;
        border-color: #fff; 
    }
    .finally
    {
        background-color: red;
        color: #fff;
        border-color: #fff; 
    }
</style>