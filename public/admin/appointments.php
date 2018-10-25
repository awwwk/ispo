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
                <li class="breadcrumb-item active">Appointments</li>
            </ol>
            <!-- Appointments-->
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header text-center">
                    <i class="fa fa-table"></i> All Appointments</div>
                <?php display_message(); ?>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Service</th>
                                    <th>Mobile No</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Price in KES</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                     $appointments=query("SELECT*FROM appointments
                     INNER JOIN services ON appointments.service_id=services.service_id
                     INNER JOIN users ON users.userID=appointments.userID ORDER BY appointmentID DESC");
while($row=fetch_array($appointments))
{
    $appointmentID=$row['appointmentID'];
    $firstName=$row['userFirstName'];
    $lastName=$row['userLastName'];
    $time=$row['time'];
    $email=$row['userEmail'];
    $mobileNo=$row['userMobileNo'];
    $date=$row['date'];
    $status=$row['status'];

    $service_id=$row['service_id'];
    
    $trueStatus="";
    
    if($status=="On going")
    {
        $trueStatus="<span class='badge badge-pill badge-primary'>{$status}</span>";
    
    }
    else if($status=="Canceled")
    {
            $trueStatus="<span class='badge badge-pill badge-danger'>{$status}</span>";
        
    }
    else if($status=="Paid")
    {
            $trueStatus="<span class='badge badge-pill badge-success'>{$status}</span>";
    
    }
    else if($status=="Overdue")
    {
            $trueStatus="<span class='badge badge-pill badge-warning'>{$status}</span>";
        
    }
  $services=query("SELECT*FROM services WHERE service_id='{$service_id}' ");
                        while($row=fetch_array($services))
                    {
                          
                            $service_name=$row['service_name'];
                            $service_price=$row['service_price'];
                          
                            echo " <tr>
                            <td>{$firstName} {$lastName} </td>
                                  <td>{$service_name}</td>
                                  <td>{$mobileNo}</td>
                                  <td>{$date}</td>
                                  <td>{$time}</td>
                                  <td>{$service_price}</td>
                                  <td>{$trueStatus}</td>
                                  <td> <a href='#modal_edit' class='btn btn-primary modalButton' data-appointment-id='{$appointmentID}' data-toggle='modal' data-target='#modal_edit' data-popup='tooltip' title='View' data-container='body'>
                  <i class='fa fa-eye '></i></td>
                            </tr>
                            
                            
                            ";
                            
                  
    
                    }
 
 

 

    
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
                var appointmentID = $(this).attr('data-appointment-id');
                $.ajax({
                    url: "ajax_modal_view.php?appointmentID=" + appointmentID,
                    cache: false,
                    success: function(result) {
                        $(".modal-content").html(result);
                    }
                });
            });

        </script>
