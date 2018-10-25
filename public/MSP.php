<!DOCTYPE html>
<?php include "includes/header.php";


?>

<body style="height:1000%;">

    <div class="content-wrapper"  style="height:1000%;" >
        <div class="container"  style="height:1000%;">

            <!-- Appointments-->
            <div class="row">

                <div class="col-md-12"  style="height:1000%;">
                    <!--INSERT INTO `sparepart`(`idsparepart`, `spname`, `spmanufacturer`, `spmodel`, `spdescription`, `carmodel`, `spPieces`, `date`, `spsource`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])// -->
                   
                    <div class="card text-black  mb-3">
                        <div class="card-header bg-success text-center text-white">Enter Spare Part Details</div>
                        <div class="card-body">
           
                           <form method="post">
                        <div class="form-group">
                            
                            <br>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputName">Sparepart Name</label>
                                    <input class="form-control" name="spname" type="text" aria-describedby="nameHelp" placeholder="Enter Sparepart name">
                                </div>
                             
                                 
                                    <input class="form-control" name="idcarowner" value =<?php echo $_SESSION['MECHANIC'] ?> type="text" aria-describedby="nameHelp" placeholder="Enter Sparepart name" readonly hidden>
                                
                                
                                <div class="col-md-6">
                                    <label for="exampleInputLastName">Sparepart Manufacturer</label>
                                    <input class="form-control" name="spmanufacturer" type="text" aria-describedby="nameHelp" placeholder="Enter Sparepart Manufacturer">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Sparepart Model</label>
                                <input class="form-control" name="spmodel" type="text" aria-describedby="nameHelp" placeholder="Enter Sparepart Model">
                            </div>
                            <div class="col-md-6">
                                <label for="mobileNo">Sparepart Description </label>
                                <input class="form-control" name="spdescription" type="text" aria-describedby="nameHelp" placeholder="Enter Sparepart Description">
                            </div>

                        </div>
                         <div class="form-row">
                           
                            <div class="col-md-6">
                                <label for="mobileNo">Number of Pieces </label>
                                <input class="form-control" name="pieces" type="text" aria-describedby="mobileNo" placeholder="Enter Number of Pieces">
                            </div>


                          

                            <div class="col-md-6">
                                <label for="mobileNo">confirm Number of Pieces </label>
                                <input class="form-control" name="pieces2" type="text" aria-describedby="mobileNo" placeholder="Enter Number of Pieces">
                            </div>

                        </div>
                        <div>
                            
                                <label for="exampleInputEmail1">Car Model</label>
                                <input class="form-control" name="carmodel" type="text" aria-describedby="nameHelp" placeholder="Enter Car Model">
                            
                         <label class="control-label" for="date">Date</label>
                                    <div class="form-group input-group date" data-date-format="dd-mm-yyyy">

                                        <input type="text" class="form-control" name="date" placeholder="dd-mm-yyyy">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>

                                    </div>
                          </div>

                        <br>
                        <input class="form-cont
                        rol btn btn-primary btn-block" name="Sparepart_Order" type="submit" value="PLACE ORDER">
                         <?php order_spareparts(); ?>
                    </form>
                        </div>
                        <div class="">


                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div> 

    <!-- /.container -->
   <?php include "includes/footer.php"; ?>
    <script src="admin/js/bootstrap-datepicker.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAMBzWDrliQw71M8TgMnBZAoI9UxT_Kbxw&libraries=places"></script>
    <script src="admin/js/jquery.placepicker.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.input-group.date').datepicker({
                format: "dd-mm-yyyy"



            });
        });
        $(".placepicker").placepicker();

    </script>
