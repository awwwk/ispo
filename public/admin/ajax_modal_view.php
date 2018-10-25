<?php
include "../../resources/config.php";
$appointmentID = $_GET['appointmentID'];


$appointmentID;


?>
    <div class="modal-header">
        <h5 class="modal-title">Appointment
            <?php echo $appointmentID; ?>
        </h5>
    </div>
    <form action="" method="post" id="feedback">
        <div class="modal-body">


            <div class="form-group">
               <label for=""><strong>Comments</strong></label>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                   
                                    <th>Username</th>
                                    <th>Comment Text</th>
                                    <th>Comment Employee</th>
                                </tr>
                            </thead>
                            <tbody>
                <?php
                                    
                                    $query = query("SELECT * FROM comments WHERE appointmentID={$appointmentID}");
                                    confirm($query);
                                    while($row=fetch_array($query))
                                    {
                                        $commentText     =$row['commentText'];
                                        $emp_comment_text=$row['emp_comment_text'];
                                        $userID=$row['userID'];
                                        
                                    $query = query("SELECT * FROM users WHERE userID='{$userID}'");
                                    confirm($query);
                                    while($row=fetch_array($query))
                                    {
                                        $userName=$row['userName'];
                                        
                                        echo "
                                        <tr>
                                        <td>{$userName}</td>
                                        <td>{$commentText}</td>
                                        <td>{$emp_comment_text}</td>
                                        
                                        </tr>
                                        ";
                                    }
                                    }
                                    ?>
           

                                
                            </tbody>
                        </table>
                    </div>

            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Payment</label>
               
                  <select class="form-control" name="payment">
                        <?php
                        $query=query("SELECT*FROM appointments WHERE appointmentID='{$appointmentID}'");
                        while($row=fetch_array($query))
                    {
                            $status=$row['status'];
                            echo " <option value='{$status}'>{$status}</option>";
                            
                            if($status=="Paid")
                            {
                               
                            }
                            else if($status=="On going")
                            {
                                 echo " <option value='Paid'>Paid</option>";
                                 echo " <option value='Canceled'>Canceled</option>";
                            }
                            else if($status=="Canceled")
                            {
                                  echo " <option value='On going'>On going</option>";
                                  echo " <option value='Paid'>Paid</option>";
                                
                            }
    
                    }
                     
    
    
                        ?>
   
  </select>
            </div>
        <div class="form-group">
               <input type="text" name="appointmentID" value="<?php echo $appointmentID; ?>" hidden="true">
            </div>
        
              

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Save" name="add">
        </div>
    </form>

   
   
   
    <?php


?>
