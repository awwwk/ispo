
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

                <!-- SELECT `idspQuotation`, `idspDealer`, `idsparepart`, `idcarowner`, `priceperpiece`, `totalprice`, `deliverystatus`, `manufacturer` FROM `spQuotation` WHERE 1 -->
                <div class="row" style="margin-top:40px; margin-bottom:140px; background-color:#17202A; ">
                    <div class="col-md-12">
                        <?php display_message(); ?>
                        <div class="card text-black  mb-3">
                            <div class="card-header bg-primary text-center text-white"> SPARE-PART ORDERS QUOTATIONS</div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark text-white" style="background-color:#33A2FF; ">
                                        <tr>
                                           
                                            <th scope="col">PRICE PER PIECE</th>
                                            <th scope="col">TOTAL PRICE</th>
                                            <th scope="col">DELIVERY</th>
                                             <th scope="col">MANUFACTURER</th>
                                            <th scope="col">SPAREPART DEALER PHONE NUMBER</th>
                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       //SELECT `idspQuotation`, `idspDealer`, `idsparepart`, `idcarowner`, `priceperpiece`, `totalprice`, `deliverystatus`, `manufacturer`, `SPphonenumber` FROM `spQuotation` WHERE 1
                                        //SELECT `idsparepart`, `idcarowner`, `spname`, `spmanufacturer`, `spmodel`, `spdescription`, `carmodel`, `pieces`, `date` FROM `sparepart` WHERE 1


                $query = query("SELECT * FROM sparepart
                               ");
                
                $query = query("SELECT * FROM spQuotation       order by    totalprice ASC
                               ");

                confirm($query);
                while($row=fetch_array($query))
                {
                    $idspQuotation=$row['idspQuotation'];                            
                    $idspDealer=$row['idspDealer'];
                    $idsparepart=$row['idsparepart'];
                    $idcarowner=$row['idcarowner'];
                    $priceperpiece=$row['priceperpiece'];                   
                    $totalprice=$row['totalprice'];                     
                    $deliverystatus=$row['deliverystatus']; 
                    $manufacturer=$row['manufacturer'];  
                    $SPphonenumber=$row['SPphonenumber'];     
                                 
                    echo "
                      <tr>
                                           
                                            <td>{$priceperpiece}</td>
                                            <td>{$totalprice}</td>
                                            <td>{$deliverystatus}</td>
                                            <td>{$manufacturer}</td>
                                             <td>{$SPphonenumber}</td>
                                           
                                   
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
  