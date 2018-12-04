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
            <div class="container" style="padding-left:5px;">
                <!--SELECT `idsparepart`, `idcarowner`, `spname`, `spmanufacturer`, `spmodel`, `spdescription`, `carmodel`, `pieces`, `date` FROM `sparepart` WHERE 1 -->
                <div class="row" style="margin-top:40px; margin-bottom:140px; width:1300px; padding-left:0px;">
                    <div class="col-md-12">
                        <?php display_message(); ?>
                        <div class="card text-black  mb-3" style="padding-left:0px;">
                            <div class="card-header bg-primary text-center text-white"> SPARE-PART ORDERS </div>
                            <div class="card-body" style="padding-left:10px;">
                                <table class="table table-bordered table-hover" style="color:black; padding-left:-10px;">
                                    <thead class="thead-dark" >
                                        <tr>
                                            <th scope="col">Spare-Part</th>
                                            <th scope="col">Manufacturer</th>
                                            <th scope="col">Model Number</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Car Model</th>                                            
                                            <th scope="col">Pieces </th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Price Per Piece</th>
                                            <th scope="col">Total Price</th>
                                            <th scope="col">Delivery Status</th>
                                             <th scope="col">Manufacturer</th>
                                            <th scope="col">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                 
                                        <?php
                $query = query("SELECT * FROM sparepart INNER JOIN SPD ON  SPD.specialty = sparepart.carmodel
                  
                  ");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $idsparepart=$row['idsparepart'];   
                    $idcarowner=$row['idcarowner'];                                
                    $spname=$row['spname'];
                    $spmanufacturer=$row['spmanufacturer'];
                    $spmodel=$row['spmodel'];
                    $spdescription=$row['spdescription'];
                    $carmodel=$row['carmodel'];
                    $pieces=$row['pieces'];
                    $date = date ('F d, Y');
                   
                    
                    //SELECT `idsparepart`, `idcarowner`, `spname`, `spmanufacturer`, `spmodel`, `spdescription`, `carmodel`, `pieces`, `date` FROM `sparepart` WHERE 1 
                    //SELECT `idserviceMQ`, `mechanicid`, `idmechanicrequest`, `idcarowner`, `servicecost`, `servicedate` FROM `serviceMQ` WHERE 1
                      // idgaragerequest, idcarowner, garageid
                    //SELECT `idspQuotation`, `idspDealer`, `idsparepart`, `idcarowner`, `priceperpiece`, `totalprice`, `deliverystatus`, `manufacturer` FROM `spQuotation` WHERE 1
                    //SELECT `idspQuotation`, `idspDealer`, `idsparepart`, `idcarowner`, `priceperpiece`, `totalprice`, `deliverystatus`, `manufacturer`, `SPphonenumber` FROM `spQuotation` WHERE 1
                                 
                    echo "<tr>                   
                                        
                                            <td>{$spname}</td>
                                            <td>{$spmanufacturer}</td>
                                            <td sty>{$spmodel}</td>
                                            <td>{$spdescription}</td>
                                            <td>{$carmodel}</td>
                                             <td>{$pieces}</td>
                                            <td>{$date}</td>

                                             <form method='post'>
                                       <input class='form-control' name='idsparepart' value ={$idsparepart} type='text' aria-describedby='nameHelp' placeholder='Enter idgaragerequest' readonly hidden> 
                                       <input class='form-control' name='idcarowner' value ={$idcarowner} type='text' aria-describedby='nameHelp' placeholder='Enter idcarowner ' readonly hidden> 
                                         <input class='form-control' name='SPphonenumber' value ={$_SESSION['SPD']} type='text' aria-describedby='nameHelp' placeholder='Enter garageid 
                                         ' readonly hidden> 

                                          <input class='form-control' name='idspDealer' value ={$idspDealer} type='text' aria-describedby='nameHelp' placeholder='Enter garageid 
                                         ' readonly hidden> 

                                                           
                                           <td>  <input class='form-control' style='width:75px;' name='priceperpiece' type='text' aria-describedby='nameHelp' placeholder='Ksh'> </td>
                                         
                                           <td> <input class='form-control' style='width:75px;' name='totalprice' type='text' aria-describedby='nameHelp' placeholder='Ksh'></td>

                                           <td> <input class='form-control' style='width:75px;' name='deliverystatus' type='text' aria-describedby='nameHelp' placeholder='yes/no'></td>

                                              <td> <input class='form-control' style='width:75px;' name='manufacturer' type='text' aria-describedby='nameHelp' placeholder='mfr'></td>

                                           <td>  <input type='submit' name='edit_SPQ' value='Save Details' class='form-control btn btn-primary'/></td>
                                           
                                       </form>
                                        
                                 </tr>          

                                        
                                        
                                   
                                      
                    "; }                                      
                                        ?>
                                        

                                   
                <?php  edit_SPQ(); ?>
                
</center>
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
  