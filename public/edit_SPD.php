<!DOCTYPE html>
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
                              
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="" for="firstname">First Name</label>
                                                <input name="firstname" class="form-control" type="text" value="<?php echo $firstname ?>" placeholder="Enter Name" />
                                            </div>
                                             <div class="form-group ">
                                                <label class="" for="lastname">Last Name</label>
                                                <input name="lastname" class="form-control" type="text" value="<?php echo $lastname ?>" placeholder="Enter Name" />
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="" for="phonenumber">Phone Number</label>
                                                <input name="phonenumber" class="form-control" type="number" value="<?php echo $phonenumber?>" placeholder="Enter phone Number" />
                                            </div>
                                             <div class="form-group ">
                                                <label class="" for="location">Location</label>
                                                <input name="location" class="form-control" type="text" value="<?php echo $location?>" placeholder="Enter location" />
                                            </div>
                                        </div>
                                                 
                                  </div>
                             <div class="row">  
                             <div class="col-md-6 ">
                                     <label class="" for="specialty">specialty</label>
                                    <input name="specialty" class="form-control" type="text" value="<?php echo $specialty?>" placeholder="Enter your specialty" />
                                 </div> 
                             </div>
                                 <div class="row">                              
                                <div class="col-md-6">
                                    <label for="password">Password</label>
                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label for="password2">Confirm password</label>
                                    <input class="form-control" name="password2" type="password" placeholder="Confirm password">
                                </div>
                                
                            </div>
                        
                       </div>
                      </div>
                     <div class="row">
                        <br>
                    <input type="submit" name="update_SPD" value="Save Details" class="form-control btn btn-primary"/>
                   </div>
                     <?php  edit_SPD(); ?>
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
