<!DOCTYPE html>
<?php include "includes/header.php"; ?>
<?php


if(isset($_SESSION['GARAGE']))
{
    //SELECT `garageid`, `garagename`, `phonenumber`, `location`, `specialization`, `password` FROM `GARAGE` WHERE 1
    $query = query("SELECT * FROM GARAGE WHERE phonenumber ='{$_SESSION['GARAGE']}' ");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $garageid=$row['garageid'];
                    $garagename=$row['garagename'];
                    $phonenumber=$row['phonenumber'];
                    $location=$row['location'];
                    $specialization=$row['specialization'];
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
                            <div class="card-title text-center" style="font-size:30px;"><strong><?php echo "{$garagename} Garage"; ?></strong></div>
                            <div class="">
                                <form method="post" action="" class="">
                                <!--<?php //updateUser(); ?>-->
                                 <!--method="post" action="db/manage_authentication.php?edit_user=<?php echo $row['iduser'];?>"> -->
                                 <!--//SELECT `garageid`, `garagename`, `phonenumber`, `location`, `specialization`, `password` FROM `GARAGE` WHERE 1-->
                               
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="" for="garagename">Garage Name</label>
                                                <input name="garagename" class="form-control" type="text" value="<?php echo $garagename ?>" placeholder="Enter Garage Name..." />
                                            </div>
                                             <div class="form-group ">
                                                <label class="" for="phonenumber">Phone Number</label>
                                                <input name="phonenumber" class="form-control" type="text" value="<?php echo $phonenumber ?>" placeholder="Enter Phone Number" />
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                           
                                             <div class="form-group ">
                                                <label class="" for="location">Location</label>
                                                <input name="location" class="form-control" type="text" value="<?php echo $location?>" placeholder="Enter location" />
                                            </div>
                                             <div class="form-group ">
                                                <label class="" for="specialization">Garage Main Specialization</label>
                                                <input name="specialization" class="form-control" type="text" value="<?php echo $specialization?>" placeholder="Enter Garage Specialization" />
                                            </div>
                                        </div>
                                                 
                                  </div>
                                 <div class="row">                              
                                <div class="col-md-6">
                                    <label for="InputPassword1">Password</label>
                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label for="ConfirmPassword">Confirm password</label>
                                    <input class="form-control" name="password2" type="password" placeholder="Confirm password">
                                </div>
                                
                            </div>
                        
                       </div>
                      </div>
                     <div class="row">
                        <br>
                    <input type="submit" name="update_GARAGE" value="Save Details" class="form-control btn btn-primary"/>
                   </div>
                    <?php  edit_GARAGE(); ?>
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
