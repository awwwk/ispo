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
            <li class="breadcrumb-item active">Spare Part Dealers Services</li>
        </ol>
      
        <div class="card mb-3">
            <div class="card-header text-center">
                <i class="fa fa-table"></i>  Spare Part Orders</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <!--SELECT `idsparepart`, `idcarowner`, `spname`, `spmanufacturer`, `spmodel`, `spdescription`, `carmodel`, `pieces`, `date` FROM `sparepart` WHERE 1-->
                                <th>Spare Part Name</th>                               
                                <th>Manufacturer</th>
                                 <th>Spare Part Model</th>
                                <th>Spare Part Description</th>
                                 <th>Car Model</th>
                                 <th>Pieces</th>
                                 <th>Date</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                           
                                <?php
                     $services=query("SELECT*FROM sparepart");
while($row=fetch_array($services))
{
   
    $emp_spname=$row['spname'];  
     $emp_spmanufacturer=$row['spmanufacturer'];
      $emp_spmodel=$row['spmodel'];
      $emp_spdescription=$row['spdescription'];
      $emp_carmodel=$row['carmodel'];
      $emp_pieces=$row['pieces'];
      $emp_date=$row['date'];

   
 
                          
                            echo " <tr>
                                  <td>{$emp_spname}</td>
                                  <td>{$emp_spmanufacturer}</td>
                                  <td>{$emp_spmodel}</td>
                                  <td>{$emp_spdescription}</td>
                                  <td>{$emp_carmodel}</td>
                                  <td>{$emp_pieces}</td>
                                  <td>{$emp_date}</td>




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
