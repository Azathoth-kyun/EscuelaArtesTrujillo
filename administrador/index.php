<?php
require_once('../assets/constants/config.php');
require_once('constants/check-login.php');
require_once('constants/fetch-my-info.php');
include('header.php');
?>
<?php 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT count(*) as Alumnos FROM alumno where status = !99");
$stmt->execute();
$alumnos = $stmt->fetchColumn(); 

?>
<!-- BEGIN: Content-->

    <div class="col-md-12">

        <div class="card-content table-responsive">
        <div class="row">


            
          </div>
        </div>
    </div>
</div>
    <!-- END: Content-->

    <?php include 'footer.php'; ?>