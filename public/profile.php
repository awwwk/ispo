

<!DOCTYPE html>
<?php include "includes/header.php"; ?>
<?php


if(isset($_SESSION['user']))
{
    $query = query("SELECT * FROM user WHERE userName ='{$_SESSION['user']}' ");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $firstname=$row['firstname'];
                    $lastName=$row['lastName'];
                    $userName=$row['userName'];
                    $PhoneNo=$row['PhoneNo'];
                    $location=$row['location'];
                    $category=$row['category'];
                    $userPassword=$row['userPassword'];
                  
              //$firstName = escape_string($_POST['firstName']);
              //$lastName = escape_string($_POST['lastName']);
              //$userName = escape_string($_POST['userName']);
              //$email = escape_string($_POST['email']);
              //$phoneNo = escape_string($_POST['phoneNo']);
              //$location = escape_string($_POST['location']);
              //$category = escape_string($_POST['category']);
              //$userPassword = escape_string($_POST['password']);
                }
    
}



?>

<body>

    <div class="content-wrapper">
        <div class="container">


            <!-- Appointments-->
            <div class="row">
              
                <div class="col-md-12" style="margin-top:20px">
                    <?php display_message(); ?>
                    <div class="card text-black  mb-3">
                        <div class="card-header bg-primary text-center text-white"><i class="fa fa-user"></i> Profile</div>
                        <div class="card-body">
                            <div class="card-title text-center" style="font-size:30px;"><strong><?php echo "{$firstname} {$lastName}"; ?></strong></div>
                            <div class="">
                                <form method="post" action="" class="">
                                    <?php updateUser(); ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="" for="firstname">first Name</label>
                                                <input name="firstname" class="form-control" type="text" value="<?php echo $firstname ?>" placeholder="Enter Name" />
                                            </div>
                                             <div class="form-group ">
                                                <label class="" for="lastName">last Name</label>
                                                <input name="lastName" class="form-control" type="text" value="<?php echo $lastName ?>" placeholder="Enter Name" />
                                            </div>
                                              <div class="form-group ">
                                                <label class="" for="user Name">user Name</label>
                                                <input name="userName" class="form-control" type="text" value="<?php echo $userName ?>" placeholder="Enter Name" />
                                            </div>                                                                                  
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="" for="PhoneNo">Phone Number</label>
                                                <input name="PhoneNo" class="form-control" type="text" value="<?php echo $PhoneNo?>" placeholder="Enter phone Number" />
                                            </div>
                                             <div class="form-group ">
                                                <label class="" for="location">Location</label>
                                                <input name="location" class="form-control" type="text" value="<?php echo $location?>" placeholder="Enter location" />
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

s


                                        </div>
                                    </div>
                                    <div class="row">
                                    
                                      <input type="submit" name="submit" value="Save Details" class="form-control btn btn-primary"/>
  
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>

                </div>





            </div>


        </div>
        <br>

        <!-- /.container -->
        <?php include "includes/footer.php"; ?>
