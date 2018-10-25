<?php include "includes/header.php"; ?>
<?php


if(isset($_SESSION['MECHANIC']))
{
    //SELECT `garageid`, `garagename`, `phonenumber`, `location`, `specialization`, `password` FROM `GARAGE` WHERE 1
    $query = query("SELECT * FROM MECHANIC WHERE phonenumber ='{$_SESSION['MECHANIC']}' ");
                confirm($query);
                while($row=fetch_array($query))
                {
                     $mechanicid=$row['mechanicid'];
                    $firstname=$row['firstname'];
                    $lastname=$row['lastname'];
                    $phonenumber=$row['phonenumber'];
                    $location=$row['location'];
                     $experience=$row['experience'];
                    $specialization=$row['specialization'];
                     $garagelocated=$row['garagelocated'];
                    $password=$row['password'];
                  }    
}
?>

<body>
        <div class="content-wrapper">
            <div class="container">
                <!-- SELECT `idmechanicrequest`, `idcarowner`, `details`, `dateofrequest`, `dateofservice`, `location`, `carmodel` FROM `mechanicrequest` WHERE 1 -->
                <div class="row" style="margin-top:40px; margin-bottom:140px; ">
                    <div class="col-md-12">
                        <?php display_message(); ?>
                        <div class="card text-black  mb-3">
                            <div class="card-header bg-primary text-center text-white"> GARAGE SERVICES ORDER </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">DETAILS</th>
                                            <th scope="col">DATE OF REQUEST</th>
                                            <th scope="col">DATE OF SERVICE</th>
                                            <th scope="col">LOCATION</th>
                                            <th scope="col">CAR MODEL</th>                                            
                                             <th scope="col">Reference Number</th>
                                              <th scope="col">QUOTATION</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                $query = query("SELECT * FROM mechanicrequest INNER JOIN CLIENT ON CLIENT.idcarowner=mechanicrequest.idcarowner
                    where idmechanicrequest = 2
                      ");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $idmechanicrequest=$row['idmechanicrequest'];
                   // $timestamp = strtotime($date);
                   // $formattedDate = date('F d, Y', $timestamp);                   
                    $details=$row['details'];
                    $dateofrequest = date ('F d, Y');
                    $dateofservice = date('F d, Y');  
                    $location=$row['location'];
                    $carmodel=$row['carmodel'];
                     $idcarowner=$row['idcarowner'];
                    
                      
                                 
                    echo "
                      <tr>
                                           
                                            <td>{$details}</td>
                                            <td>{$dateofrequest}</td>
                                            <td>{$dateofservice}</td>
                                            <td>{$location}</td>
                                            <td>{$carmodel}</td>
                                            <td>{$idcarowner}</td>   
                                              <td>  <a class=' badge badge-success' style='padding:10px; border-radius:20px; margin-top:0px; margin-left:10px;  height:30px; width:200px; text-color:#00000 text-size:10px;'  href='GQ.php'>WRITE QUOTATION</a>  </td>
                                        </tr>
                    ";
                    //to add a comment in place of a quotation
                    /*  <a href='#modal_edit' class='btn btn-primary modalButton' data-appointment-id='{$appointmentID}' data-toggle='modal' data-target='#modal_edit' data-popup='tooltip' title='Comment' data-container='body'>
                                      <i class='fa fa-commenting '></i>       
                    */







                   //posting a comment to the database 
                /*    if(isset($_POST['add']))
                    {          
        $comment_text=$_POST['comment_text'];
        $emp_comment_text=$_POST['emp_comment_text'];
        $userID=$_SESSION['userID'];       
        $query = query("INSERT INTO comments(emp_comment_text,commentText,appointmentID,userID)        
                        VALUES('{$emp_comment_text}','{$comment_text}','{$appointmentID}','{$userID}');");
        confirm($query);        
        set_message("<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Thank you for your feedback
</div>");
        redirect("appointments.php");
    }    */   
                }                                      
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- <div id="modal_edit" class="modal fade" style="font-weight: normal;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    </div>
                </div>
            </div> -->
                        <!-- /.container -->
           
           
    <!-- Footer -->
    <footer class="py-5 bg-dark" style="position:fixed; left: 0 ; right: 0; bottom:0;  height:10px; text-align:center;">
     
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; car clinic 2018</p>
      </div>
    </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


  </body>

</html>
  