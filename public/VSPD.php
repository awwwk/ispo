<?php include "includes/header.php"; ?>
<?php


if(isset($_SESSION['SPD']))
{
    //SELECT `idspDealer`, `firstname`, `lastname`, `phonenumber`, `location`, `specialty`, `password` FROM `SPD` WHERE 1
    $query = query("SELECT * FROM SPD WHERE phonenumber ='{$_SESSION['SPD']}' ");
                confirm($query);
                while($row=fetch_array($query))
                {
                     $idspDealer=$row['idspDealer'];
                    $firstname=$row['firstname'];
                    $lastname=$row['lastname'];
                    $phonenumber=$row['phonenumber'];
                    $location=$row['location'];
                    $specialty=$row['specialty'];
                    $password=$row['password'];
                  }    
}
?>

<body>
        <div class="content-wrapper">
            <div class="container">
                <!-- SELECT `idsparepart`, `idcarowner`, `mechanicid`, `garageid`, `spname`, `spmanufacturer`, `spmodel`, `spdescription`, `carmodel`, `pieces`, `date` FROM `sparepart` WHERE 1 -->
                <div class="row" style="margin-top:40px; margin-bottom:140px; ">
                    <div class="col-md-12">
                        <?php display_message(); ?>
                        <div class="card text-black  mb-3">
                            <div class="card-header bg-primary text-center text-white"> SPARE PARTS ORDERS </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark bg-dark text-white" style="background-color:grey;">
                                        <tr>
                                            <th scope="col">SPAREPART</th>
                                            <th scope="col">MANUFACTURER</th>
                                            <th scope="col">MODEL</th>
                                            <th scope="col">DESCRIPTION</th>
                                            <th scope="col">CAR MODEL</th>
                                            <th scope="col">PIECES REQUIRED</th>
                                            <th scope="col">DATE OF ORDER </th>
                                             <th scope="col">REF</th>
                                             <th scope="col">QUOTATION</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //SELECT `idspDealer`, `firstname`, `lastname`, `phonenumber`, `location`, `specialty`, `password` FROM `SPD` WHERE 1
                                        //SELECT `idsparepart`, `idcarowner`, `spname`, `spmanufacturer`, `spmodel`, `spdescription`, `carmodel`, `pieces`, `date` FROM `sparepart` WHERE 1
                $query = query("SELECT * FROM sparepart  INNER JOIN SPD ON SPD.specialty=sparepart.carmodel

                    ORDER BY date DESC");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $idsparepart=$row['idsparepart'];
                   // $timestamp = strtotime($date);
                   // $formattedDate = date('F d, Y', $timestamp);      
                   //             
                    $spname=$row['spname'];
                    $spmanufacturer=$row['spmanufacturer'];
                    $spmodel=$row['spmodel'];
                    $spdescription=$row['spdescription'];
                    $carmodel=$row['carmodel']; 
                    $pieces=$row['pieces'];  
                    $date = date ('F d, Y');
                    $idcarowner=$row['idcarowner'];      
                                 
                    echo "
                      <tr>
                                           
                                            <td>{$spname}</td>
                                            <td>{$spmanufacturer}</td>
                                            <td>{$spmodel}</td>
                                            <td>{$spdescription}</td>
                                            <td>{$carmodel}</td>
                                            <td>{$pieces}</td>
                                             <td>{$date}</td>
                                            <td>{$idcarowner}</td>  
                                             <td>  <a class=' badge badge-success' style='padding:10px; border-radius:20px; margin-top:0px; margin-left:10px;  height:30px; width:200px; text-color:#00000 text-size:10px;'  href='SPQ.php'>WRITE QUOTATION</a>  </td>
                                    </div> 
                                           
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
  