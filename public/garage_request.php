<!DOCTYPE html>
<?php include "includes/header.php";
?>

<body>

    <div class="content-wrapper">
        <div class="container">

            <!-- Appointments-->
            <div class="row">

                <div class="col-md-12" style="margin-top:20px">
                    <?php display_message(); ?>
                    <div class="card text-black  mb-3">
                        <div class="card-header bg-success text-center text-white">Enter Garage Request Details</div>
                        <div class="card-body">
                            <form method="post">
                            <!--SELECT `idgaragerequest`, `idcarowner`, `details`, `dateofrequest`, `dateofservice`, `location`, `carmodel` FROM `garagerequest` WHERE 1-->

                                 
                                   <input class="form-control" name="idcarowner" value =<?php echo $_SESSION['idcarowner'] ?> type="text" aria-describedby="nameHelp" placeholder="Enter Sparepart name" readonly hidden>
                                    <div class="form-group">
                                        <!-- Date input -->
                                        <label class="control-label" for="date">Reason for the Request</label>
                                        <textarea placeholder="Enter Appointment Details...." name="details" class="form-control"> </textarea>
                                    </div>
                              <input class="form-control" name="idcarowner" value =<?php echo $_SESSION['CLIENT'] ?> type="text" aria-describedby="nameHelp" placeholder="Enter Sparepart name" readonly hidden>

                                  
                                    <div class="form-group">
                                       <label class="control-label" for="date">Request Date</label>
                                        <div class="form-group input-group date" data-date-format="dd-mm-yyyy">        
                                          <input type="text" class="form-control" name="dateofrequest" placeholder="dd-mm-yyyy">
                                            <div class="input-group-addon">
                                              <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                       <label class="control-label" for="date">Service Date</label>
                                        <div class="form-group input-group date" data-date-format="dd-mm-yyyy">        
                                          <input type="text" class="form-control" name="dateofservice" placeholder="dd-mm-yyyy">
                                            <div class="input-group-addon">
                                              <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>

                                 <div class="form-group">
                                    <label for="exampleInputName">Location </label>
                                    <input class="form-control" name="location" type="text" aria-describedby="nameHelp" placeholder="Enter your location">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputName"> Car Model </label>
                                    <input class="form-control" name="carmodel" type="text" aria-describedby="nameHelp" placeholder="Enter your car model">
                                </div>                                  
                                    <div class="form-group">
                                        <!-- Add Request -->
                                   <input type="submit" class="form-control btn btn-success" name="request_garage" value="MAKE REQUEST">
                                    </div>
                                    <?php  request_garage(); ?>
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
