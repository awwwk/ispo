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
  <title>Login to Car Clinic</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
  
    <div class="card card-login mx-auto mt-5">
     
      <div class="card-header">Login</div>
     
      <div class="card-body">
       
        <form  method="post" action="">
           <?php display_message(); ?>
          <div class="form-group">
            <label>phone Number</label>
            <input class="form-control"  name="phonenumber" type="text"  placeholder="Enter Phone Number">
          </div>
          <div class="form-group">
            <label >Password</label>
            <input class="form-control" name="password" type="password" placeholder="Password">
          </div>
         
           <div class="form-group">
               <input class="btn btn-primary btn-block" type="submit" name="login" value="Login" >
          </div>
          <?php 
            
           SPD_login();
            ?>
         
        </form>
         <div class="text-center">
          <a class="d-block small mt-3" href="../admin/SPD.php">Register an Account</a>
         
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
