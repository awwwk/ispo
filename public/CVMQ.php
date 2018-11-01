<?php include "includes/header.php"; ?>
<?php


if(isset($_SESSION['CLIENT']))
{
    //SELECT `idcarowner`, `firstname`, `lastname`, `phonenumber`, `location`, `password` FROM `CLIENT` WHERE 1
    $query = query("SELECT * FROM CLIENT WHERE phonenumber ='{$_SESSION['CLIENT']}' ");
                confirm($query);
                while($row=fetch_array($query))
                {
                     $idcarowner=$row['idcarowner'];
                    $firstname=$row['firstname'];
                    $lastname=$row['lastname'];
                    $phonenumber=$row['phonenumber'];
                    $location=$row['location'];                    
                    $password=$row['password'];
                  }    
}
?>

<body>
        <div class="content-wrapper">
            <div class="container">
                <!--SELECT `idserviceMQ`, `mechanicid`, `idmechanicrequest`, `idcarowner`, `servicecost`, `servicedate`, `servicetime` FROM `serviceMQ` WHERE 1 -->
                <div class="row" style="margin-top:40px; margin-bottom:140px; background-color:#17202A; ">
                    <div class="col-md-12">
                        <?php display_message(); ?>
                        <div class="card text-black  mb-3">
                            <div class="card-header bg-primary text-center text-white"> MECHANIC REQUEST QUOTATIONS</div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark text-white" style="background-color:#33A2FF; ">
                                        <tr>
                                           
                                            <th scope="col">SERVICE COST</th>
                                            <th scope="col">SERVICE TIME</th>
                                            <th scope="col">SERVICE DATE</th>
                                            <th scope="col">MECHANIC PHONE NUMBER</th>
                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        //SELECT `idserviceMQ`, `mechanicid`, `idmechanicrequest`, `idcarowner`, `servicecost`, `servicedate`, `servicetime`, `MECHphonenumber` FROM `serviceMQ` WHERE 1
                                        //SELECT `idmechanicrequest`, `idcarowner`, `details`, `dateofrequest`, `dateofservice`, `location`, `carmodel` FROM `mechanicrequest` WHERE 1
                                        //SELECT `mechanicid`, `firstname`, `lastname`, `phonenumber`, `location`, `experience`, `specialization`, `garagelocated`, `password` FROM `MECHANIC` WHERE 1

                $query = query("SELECT * FROM serviceMQ       order by    servicecost ASC
                               ");

                confirm($query);
                while($row=fetch_array($query))
                {
                    $idserviceMQ=$row['idserviceMQ'];                            
                    $mechanicid=$row['mechanicid'];
                    $idmechanicrequest=$row['idmechanicrequest'];
                    $idcarowner=$row['idcarowner'];
                    $servicecost=$row['servicecost'];
                     $servicedate = date ('F d, Y');
                    $servicetime=$row['servicetime'];  
                   
                    $MECHphonenumber=$row['MECHphonenumber'];      
                                 
                    echo "
                      <tr>
                                           
                                            <td>{$servicecost}</td>
                                            <td>{$servicedate}</td>
                                            <td>{$servicetime}</td>
                                            <td>{$MECHphonenumber}</td>
                                           
                                   
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
  