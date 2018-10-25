<?php
include "../../resources/config.php";
 include "includes/header.php";

if(isset($_POST['add']))
    {
   
        $id=$_POST['appointmentID'];
        $status=$_POST['payment'];
        
        
        $query=query("UPDATE appointments SET status='{$status}' WHERE appointmentID='{$id}'");
        confirm($query);
        
         
    }
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
            <!-- Appointments-->
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header bg-success text-white text-center">
                    <i class="fa fa-table"></i> Employees</div>
                <?php display_message(); ?>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>No of Jobs</th>
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                     $appointments=query("SELECT*FROM employee");
while($row=fetch_array($appointments))
{
   
    $firstName=$row['emp_first_name'];
    $emp_id   =$row['emp_id'];
    $lastName =$row['emp_last_name'];
    
    
    
    
  $emp=query("SELECT*FROM appointments WHERE emp_id='{$emp_id}'");
   $no=row_count($emp);
                     
                          
                          
                            echo " <tr>
                            <td>{$firstName} {$lastName} </td>
                                  <td>{$no}</td>
                                  
                                  <td> <a href='#modal_edit' class='btn btn-primary modalButton' data-emp-id='{$emp_id}' data-toggle='modal' data-target='#modal_edit' data-popup='tooltip' title='View' data-container='body'>
                  <i class='fa fa-eye '></i></td>
                            </tr>
                            
                            
                            ";
                            
                  
    
    
 
 

 

    
}
                                      

    
                    
                    
                    
                    
                    ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="modal_edit" class="modal fade" style="font-weight: normal;">
                <div class="modal-dialog">
                    <div class="modal-content">

                    </div>
                </div>
            </div>

        </div>
        <?php include "includes/footer.php"; ?>
       

        <script>
            $('.modalButton').click(function() {
                var empID = $(this).attr('data-emp-id');
                $.ajax({
                    url: "ajax_modal_view_clients.php?id=" + empID,
                    cache: false,
                    success: function(result) {
                        $(".modal-content").html(result);
                    }
                });
            });

        </script>
