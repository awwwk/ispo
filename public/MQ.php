<?php include "includes/header.php"; ?>
<?php


if(isset($_SESSION['MECHANIC']))
{
    //SELECT `mechanicid`, `firstname`, `lastname`, `phonenumber`, `location`, `experience`, `specialization`, `garagelocated`, `password` FROM `MECHANIC` WHERE 1
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
                            <div class="card-header bg-primary text-center text-white"> MECHANIC SERVICES ORDERS </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">ISSUES TO BE ADDRESSED</th>
                                            <th scope="col">REQUEST DATE</th>
                                            <th scope="col">PREFFERED DATE</th>
                                            <th scope="col">LOCATION</th>
                                            <th scope="col">CAR MODEL</th>                                            
                                                <th scope="col">SERVICE COST</th>
                                                <th scope="col">SERVICE DATE AVAILABLE</th>
                                                <th scope="col">SERVICE TIME AVAILABLE</th>
                                                <th scope="col">ACTION</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                $query = query("SELECT * FROM mechanicrequest INNER JOIN CLIENT ON CLIENT.idcarowner=mechanicrequest.idcarowner join MECHANIC
                  where MECHANIC.specialization = carmodel
                  ");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $idmechanicrequest=$row['idmechanicrequest']; 
                     $idcarowner=$row['idcarowner'];                                   
                    $details=$row['details'];
                    $dateofrequest = date ('F d, Y');
                    $dateofservice = date('F d, Y');  
                    $location=$row['location'];
                    $carmodel=$row['carmodel'];
                    
                    //SELECT `idserviceMQ`, `mechanicid`, `idmechanicrequest`, `idcarowner`, `servicecost`, `servicedate` FROM `serviceMQ` WHERE 1
                      // idmechanicrequest, idcarowner, mechanicid
                                 
                    echo "<tr>
                    

                       <td>{$details}</td>
                                            <td>{$dateofrequest}</td>
                                            <td>{$dateofservice}</td>
                                            <td>{$location}</td>
                                            <td>{$carmodel}</td>

                                             <form method='post'>
                                       <input class='form-control' name='idmechanicrequest' value ={$idmechanicrequest} type='text' aria-describedby='nameHelp' placeholder='Enter idmechanicrequest' readonly hidden> 
                                       <input class='form-control' name='idcarowner' value ={$idcarowner} type='text' aria-describedby='nameHelp' placeholder='Enter idcarowner ' readonly hidden> 
                                         <input class='form-control' name='mechanicid' value ={$mechanicid} type='text' aria-describedby='nameHelp' placeholder='Enter mechanicid' readonly hidden> 

                                                           
                                           <td>  <input class='form-control' style='width:100px;' name='servicecost' type='text' aria-describedby='nameHelp' placeholder='Ksh'> </td>
                                           <td>   <div class='form-group input-group date'  style='width:130px;' data-date-format='dd-mm-yyyy'>
                                        <input type='text' class='form-control' name='servicedate' placeholder='dd-mm-yyyy'> </div>
                                    </td>
                                           <td> <input class='form-control' style='width:100px;' name='servicetime' type='text' aria-describedby='nameHelp' placeholder='hh:mm'></td>

                                           <td>  <input type='submit' name='edit_MQ' value='Save Details' class='form-control btn btn-primary'/></td>
                                           
                                       </form>
                                        </tr>
                                   
                                      
                    "; }                                      
                                        ?>
<?php

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
               ?>
                  <?php  edit_MQ(); ?>

                                    </tbody>                                    
                                </table>                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
                        <!-- /.container -->
           
           
    <!-- Footer -->
    <footer class="py-5 bg-dark" style="position:fixed; left: 0 ; right: 0; bottom:0;  height:10px; text-align:center;">
     
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; car clinic 2018</p>
      </div>
    </div>
      <!-- /.container -->
    </footer>
     <script type="text/javascript">
        $(function() {
            $('.input-group.date').datepicker({
                format: "dd-mm-yyyy"



            });
        });
        $(".placepicker").placepicker();

    </script>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


  </body>

</html>
  