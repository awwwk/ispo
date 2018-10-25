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
            <li class="breadcrumb-item active">Mechanic</li>
        </ol>
        <!--- Appointments --->
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header text-center">
                <i class="fa fa-table"></i>  MECHANICS </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <!--SELECT `mechanicid`, `firstname`, `lastname`, `phonenumber`, `location`, `experience`, `specialization`, `garagelocated`, `password` FROM `MECHANIC` WHERE 1-->
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Location</th>
                                <th>experience</th>
                                <th>specialization</th>
                                <th>garagelocated</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                           
                                <?php
                     $services=query("SELECT*FROM MECHANIC");
while($row=fetch_array($services))
{
   
    $emp_first_name=$row['firstname'];
    $emp_last_name=$row['lastname'];
     $emp_phonenumber=$row['phonenumber'];
      $emp_location=$row['location'];
      $emp_experience=$row['experience'];
      $emp_specialization=$row['specialization'];
      $emp_garagelocated=$row['garagelocated'];

   
 
                          
                            echo " <tr>
                                  <td>{$emp_first_name}</td>
                                  <td>{$emp_last_name}</td>
                                  <td>{$emp_phonenumber}</td>
                                  <td>{$emp_location}</td>
                                  <td>{$emp_experience}</td>
                                  <td>{$emp_specialization}</td>
                                  <td>{$emp_garagelocated}</td>
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
