
<?php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
try 
    {   
        $stmt = $conn->prepare("SELECT * FROM settings");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $title=$result['title'];
        $footer=$result['footer'];
        $fevicon=$result['fevicon'];
        $logo=$result['logo'];
                          
    }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    } 
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title><?=$title?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/uploads/settings/<?=$fevicon?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/vendors/css/ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/vendors/css/forms/selects/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/vendors/css/tables/datatable/datatables.min.css"><!-- este-->

    <link rel="stylesheet" type="text/css" href="../assets/admin/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/vendors/css/extensions/sweetalert.css">
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="index.php"><img class="brand-logo" alt="modern admin logo" src="../assets/uploads/settings/<?=$logo?>">
                            <h3 class="brand-text">Sistema de Gestion y Control de Notas</h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li> -->
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"><?php echo $myemail; ?></span><span class="avatar avatar-online">
                          <?php
                        if ($myvataor == null) { ?>
                        <img src="../assets/admin/images/avatar.jpg" alt="avatar"><i></i>
                        <?php }else{

                        print ' <img  class="img-crop" src="../assets/uploads/avatar/'.$myvataor.'" alt="avatar" >';
                        }
                        ?></span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="account.php"><i class="ft-user"></i> Editar Perfil</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="../logout.php"><i class="ft-power"></i> Salir</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a class="dropdown-toggle nav-link" href="index.php"><i class="la la-home"></i><span>Escritorio</span></a>
                </li>
                <li class="dropdown nav-item"  data-menu="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href=""><i class="la la-rupee"></i><span>Registro</span></a>
                <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="matricula.php" data-toggle=""><i class="la la-edit"></i><span>Matricula</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="subsanacion.php" data-toggle=""><i class="la la-edit"></i><span>Subsanación</span></a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="" data-toggle="dropdown" ><i class="la la-tags"></i><span>Plan de Estudios</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="planestudios.php" data-toggle=""><i class="la la-edit"></i><span>Malla Curricular</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="areas.php" data-toggle=""><i class="la la-edit"></i><span>Areas</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="asignaturas.php" data-toggle=""><i class="la la-archive"></i><span>Asignaturas</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="periodoacad.php" data-toggle=""><i class="la la-exclamation-circle"></i><span>Periodo Academico</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href=""><i class="la la-edit"></i><span>Profesores</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="profesores.php" data-toggle=""><i class="la la-edit"></i><span>Lista Profesores</span></a>
                        </li>
                         <li data-menu=""><a class="dropdown-item" href="profasignado.php" data-toggle=""><i class="la la-edit"></i><span>Asignar Asignatura</span></a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href=""><i class="la la-edit"></i><span>Alumnos</span></a>
                <ul class="dropdown-menu">
                    <li data-menu=""><a class="dropdown-item" href="alumnos.php" data-toggle=""><i class="la la-edit"></i><span>Lista Alumnos</span></a>
                    </li>
                </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href=""><i class="la la-user-plus"></i><span>Usuarios</span></a>
                <ul class="dropdown-menu">
                    <li data-menu=""><a class="dropdown-item" href="usuarios.php" data-toggle=""><i class="la la-edit"></i><span>Lista Usuarios</span></a>
                    </li>
                </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href=""><i class="la la-archive"></i><span>Consultas</span></a>
                     <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="consultanota.php" data-toggle=""><i class="la la-archive"></i><span>Boleta de Notas</span></a>
                        </li>
                        <li hidden="true" data-menu=""><a class="dropdown-item" href="consultalumno.php" data-toggle=""><i class="la la-archive"></i><span>Consulta Alumno</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="consultalumno.php" data-toggle=""><i class="la la-archive"></i><span>Ficha de Matricula</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="consultaespecialidad.php" data-toggle=""><i class="la la-archive"></i><span>Consulta Especialidad</span></a>
                        </li>
                    </ul>
                </li>
                <?php if($_SESSION['role']=='admin'){ ?>
                <li hidden="true" class="nav-item"><a class="dropdown-toggle nav-link" href="settings.php"><i class="la la-cogs"></i><span>Config</span></a>
                </li>
                <?php } ?>

            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
