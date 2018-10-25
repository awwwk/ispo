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
            <li class="breadcrumb-item active">Garage Services</li>
        </ol>
        <!--- Appointments --->
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header text-center">
                <i class="fa fa-table"></i>  Garage Requests</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <!--SELECT `idgaragerequest`, `idcarowner`, `details`, `dateofrequest`, `dateofservice`, `location`, `carmodel` FROM `garagerequest` WHERE 1-->
                                <th>Details</th>                               
                                <th>Date of Requests</th>
                                 <th>Dtae of Service</th>
                                <th>Location</th>
                                 <th>Car Model</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                           
                                <?php
                     $services=query("SELECT*FROM garagerequest");
while($row=fetch_array($services))
{
   
    $emp_details=$row['details'];  
     $emp_dateofrequest=$row['dateofrequest'];
      $emp_dateofservice=$row['dateofservice'];
      $emp_location=$row['location'];
      $emp_carmodel=$row['carmodel'];

   
 
                          
                            echo " <tr>
                                  <td>{$emp_details}</td>
                                  <td>{$emp_dateofrequest}</td>
                                  <td>{$emp_dateofservice}</td>
                                  <td>{$emp_location}</td>
                                  <td>{$emp_carmodel}</td>
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
   
   
    <script type="text/javascript" src="js/bootstrap-datepicker.js">
    </script>
</div>
</html>
