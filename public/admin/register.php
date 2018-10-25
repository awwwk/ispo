<!DOCTYPE html>
<html lang="en">

<?php
include "../../resources/config.php";   
  
    
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Register to Car Clinic</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="bg-dark">
        <div class="container">
       
            <div class="card card-register mx-auto mt-5">
                <div class="card-header"><center> CAR CLINIC  CAR OWNER REGISTRATION</center></div>
                
                <div class="card-body">
                        <?php display_message(); ?>
                    <form method="post">
                        <div class="form-group">
                        	                 
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="user_name">First Name</label>
                                    <input class="form-control" name="firstname" type="text" aria-describedby="nameHelp" placeholder="Enter First Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="location">Last name</label>
                                    <input class="form-control" name="lastname" type="text" aria-describedby="nameHelp" placeholder="Enter Last name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputName"> Phone Number</label>
                                    <input class="form-control" name="phonenumber" type="text" aria-describedby="nameHelp" placeholder="Enter Phone Number">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputLastName">Location</label>
                                    <input class="form-control" name="location" type="text" aria-describedby="nameHelp" placeholder="Enter Location">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleConfirmPassword">Confirm password</label>
                                    <input class="form-control" name="password2" type="password" placeholder="Confirm password">
                                </div>
                            </div>
                        </div>
                        <input class="form-control btn btn-primary btn-block" name="register" type="submit" value="Register">
                        <?php register(); ?>
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="admin/login.php">Login Page</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>

</html>
