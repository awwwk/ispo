<!DOCTYPE html>
<?php include "includes/header.php"; ?>
<?php


if(isset($_SESSION['user']))
{
    $query = query("SELECT * FROM user WHERE userName ='{$_SESSION['user']}' ");
                confirm($query);
                while($row=fetch_array($query))
                {
                    
                    $firstName=$row['firstName'];
                    $lastName=$row['lastName'];
                    $userName=$row['userName'];
                     $email=$row['email'];
                    $phoneNo=$row['phoneNo'];                  
                    $userPassword=$row['userPassword'];
                    $location=$row['location'];                    
                    $category=$row['category'];                    
                }
    
}


  
          


?>

    <body>

        <div class="content-wrapper">
            <div class="container">


                <!-- Appointments-->
                <div class="row" style="margin-top:40px; margin-bottom:140px; ">

                    <div class="col-md-12">
                        <?php display_message(); ?>
                        <div class="card text-black  mb-3">
                            <div class="card-header bg-primary text-center text-white"><i class="fa fa-table"></i> My Appointments</div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col"></th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                $query = query("SELECT * FROM appointments INNER JOIN services ON services.service_id=appointments.service_id  INNER JOIN employee ON employee.emp_id=appointments.emp_id WHERE userID = '{$_SESSION['userID']}' ORDER BY appointmentID DESC");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $date=$row['date'];
                    $timestamp = strtotime($date);
                    $formattedDate = date('F d, Y', $timestamp);

                    
                    
                    $serviceID=$row['service_id'];
                    $status=$row['status'];
                    $service_name=$row['service_name'];
                    $service_price=$row['service_price'];
                    $appointmentID=$row['appointmentID'];
                    
                   
                    
                    echo "
                      <tr>
                                            <th scope='row'>{$formattedDate}</th>
                                            <td>{$service_name}</td>
                                            <td>{$service_price}</td>
                                            <td>{$status}</td>
                                            <td>
                                            <a href='#modal_edit' class='btn btn-primary modalButton' data-appointment-id='{$appointmentID}' data-toggle='modal' data-target='#modal_edit' data-popup='tooltip' title='Comment' data-container='body'>
                  <i class='fa fa-commenting '></i>
                                            
                                           
                                           
                                        </tr>
                    ";
                    
                    
                     if(isset($_POST['add']))
                    {   
       
        $comment_text=$_POST['comment_text'];
        $emp_comment_text=$_POST['emp_comment_text'];
        $userID=$_SESSION['userID'];
     
        
        $query = query("INSERT INTO comments(emp_comment_text,commentText,appointmentID,userID) VALUES('{$emp_comment_text}','{$comment_text}','{$appointmentID}','{$userID}');");

        confirm($query);
        
        set_message("<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Thank you for your feedback
</div>");
        redirect("appointments.php");
       
        
    }
         
                
                }
                                        
                                        
                                        ?>



                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>


            </div>
            <div id="modal_edit" class="modal fade" style="font-weight: normal;">
                <div class="modal-dialog">
                    <div class="modal-content">

                    </div>
                </div>
            </div>

            <!-- /.container -->

            <script>
                $('#commentModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('whatever') // Extract info from data-* attributes
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    modal.find('.modal-title').text('New message to ' + recipient)
                    modal.find('.modal-body input').val(recipient)
                })

            </script>
            <?php include "includes/footer.php"; ?>
            <script>
                $('.modalButton').click(function() {
                    var appointmentID = $(this).attr('data-appointment-id');
                    $.ajax({
                        url: "ajax_modal_comment.php?appointmentID=" + appointmentID,
                        cache: false,
                        success: function(result) {
                            $(".modal-content").html(result);
                        }
                    });
                });

            </script>
           
