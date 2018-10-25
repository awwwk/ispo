<?php 
include "../../resources/config.php";
include "includes/header.php";
?>
<link rel="stylesheet" href="css/datepicker.css" />

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Services</li>
        </ol>
        <!--- Appointments --->
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header text-center">
                <i class="fa fa-table"></i> All Services</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               
                                <th>Service Name</th>
                                <th>Service Price</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                           
                                <?php
                     $services=query("SELECT*FROM services");
while($row=fetch_array($services))
{
   
    $serviceName=$row['service_name'];
    $servicePrice=$row['service_price'];

   
 
                          
                            echo " <tr>
                                  <td>{$serviceName}</td>
                                  <td>{$servicePrice}</td>
                            </tr>
                            
                            
                            ";
                            
                

    
}
    
                    
                    
                    
                    
                    ?>
                                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <?php include "includes/footer.php"; ?>
    <script>
        $('.datepicker').datepicker();

    </script>


    <script type="text/javascript" src="js/bootstrap-datepicker.js">
