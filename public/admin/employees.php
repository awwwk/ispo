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
            <li class="breadcrumb-item active">Employees</li>
        </ol>
        <!--- Appointments --->
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header text-center">
                <i class="fa fa-table"></i> All Employees</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               
                                <th>First Name</th>
                                <th>Last Name</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                           
                                <?php
                     $services=query("SELECT*FROM employee");
while($row=fetch_array($services))
{
   
    $emp_first_name=$row['emp_first_name'];
    $emp_last_name=$row['emp_last_name'];

   
 
                          
                            echo " <tr>
                                  <td>{$emp_first_name}</td>
                                  <td>{$emp_last_name}</td>
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
