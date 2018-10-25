<?php
include "../../resources/config.php";
$empID = $_GET['id'];


$empID;

$query=query("SELECT*FROM employee WHERE emp_id='{$empID}'");
  confirm($query);
while($row=fetch_array($query))
{
    $firstName=$row['emp_first_name'];
  
    $lastName =$row['emp_last_name'];
}

?>
    <div class="modal-header">
        <h5 class="modal-title">
            <?php echo $firstName." ".$lastName ?>
        </h5>
    </div>
    <form action="" method="post" id="feedback">
        <div class="modal-body">


            <div class="form-group">
               <label for=""><strong>Clients Served</strong></label>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                   
                                    <th>Username</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                <?php
                                    
                                    $query = query("SELECT * FROM appointments WHERE emp_id={$empID}");
                                    confirm($query);
                                    while($row=fetch_array($query))
                                    {
                                        
                                    $userID=$row['userID'];
                                    $query = query("SELECT * FROM users WHERE userID='{$userID}'");
                                    confirm($query);
                                    while($row=fetch_array($query))
                                    {
                                        $userName=$row['userName'];
                                        
                                        echo "
                                        <tr>
                                        <td>{$userName}</td>                                
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
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
        </div>
    </form>

   
   
   
    <?php


?>
