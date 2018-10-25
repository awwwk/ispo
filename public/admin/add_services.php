<?php include "../../resources/config.php";
include "includes/header.php";


$service_price="";
?>
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />

<style>
    .placepicker-map {
        min-height: 250px;
    }

</style>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Appointments</li>
        </ol>
        <!-- Appointments-->
        <div class="row">
            <div class="col-md-12 container-fluid">

                <form method="post">
                    <?php addService() ?>
                    <div class="form-group">
                        <label for="serviceName">Service Name</label>
                        <input type="text" class="form-control" name="serviceName" placeholder="Enter Service Name">
                    </div>
                                       <div class="form-group">
                        <label for="serviceName">Service Price</label>
                        <input type="text" class="form-control" name="servicePrice" placeholder="Enter Service Price">
                    </div>
                                        <div class="form-group">
                        <!-- Add Appointment -->

                        <input type="submit" class="form-control btn btn-primary" name="add" value="Add Service">
                    </div>


                </form>
            </div>


        </div>


    </div>

    <?php include "includes/footer.php"; ?>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.placepicker.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.input-group.date').datepicker({
                format: "dd.mm.yyyy"



            });
        });
        $(".placepicker").placepicker();

    </script>
