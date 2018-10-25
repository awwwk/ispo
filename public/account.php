<!DOCTYPE html>
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


            <!-- Appointments-->
            <div class="row">
              
                <div class="col-md-12" style="margin-top:20px">
                    <?php display_message(); ?>
                    <div class="card text-black  mb-3">
                        <div class="card-header bg-primary text-center text-white"><i class="fa fa-user"></i> Profile</div>
                        <div class="card-body">
                            <div class="card-title text-center" style="font-size:30px;"><strong><?php echo "{$firstname} {$lastname}"; ?></strong></div>
                            <div class="">
                                <form method="post" action="" class="">
                                <!--<?php //updateUser(); ?>-->
                                 <!--method="post" action="db/manage_authentication.php?edit_user=<?php echo $row['iduser'];?>"> -->
                                <?php  edit(); ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="" for="firstname">First Name</label>
                                                <input name="firstname" class="form-control" type="text" value="<?php echo $firstname ?>" placeholder="Enter Name" />
                                            </div>
                                             <div class="form-group ">
                                                <label class="" for="lastName">Last Name</label>
                                                <input name="lastName" class="form-control" type="text" value="<?php echo $lastname ?>" placeholder="Enter Name" />
                                            </div>
                                                                                                                                
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="" for="PhoneNo">Phone Number</label>
                                                <input name="PhoneNo" class="form-control" type="text" value="<?php echo $phonenumber?>" placeholder="Enter phone Number" />
                                            </div>
                                             <div class="form-group ">
                                                <label class="" for="location">Location</label>
                                                <input name="location" class="form-control" type="text" value="<?php echo $location?>" placeholder="Enter location" />
                                            </div>
                                              
                                             <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input class="form-control" name="userPassword" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleConfirmPassword">Confirm password</label>
                                    <input class="form-control" name="userPassword2" type="password" placeholder="Confirm password">
                                </div>
                            </div>
                        </div>




                                        </div>
                                    </div>
                                    <div class="row">
                                    
                                      <input type="submit" name="update_details_user" value="Save Details" class="form-control btn btn-primary"/>
  
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
