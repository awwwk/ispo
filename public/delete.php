

<!DOCTYPE html>
<?php include "includes/header.php"; ?>
<?php


if(isset($_SESSION['CLIENT']))
    //SELECT `idcarowner`, `firstname`, `lastname`, `phonenumber`, `location`, `password` FROM `CLIENT` WHERE 1
{
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
            <div class="row">              
                <div class="col-md-12" style="margin-top:79.5px">
                    <?php display_message(); ?>
                    <div class="card text-black  mb-3">
                        <div class="card-header bg-primary text-center text-white"><i class="fa fa-user"></i> Profile</div>
                        <div class="card-body">
                            <br>                          
                            <div class="">                               
                                <form method="post" action="" class="">                                   
                                    
                                        
                                            <div class="form-group " style="font:serif; color:blue;">
                                                <label class="" for="firstname" style="font:serif; color:green;">NAME :</label>
                                               <?php echo $firstname ?>
                                               &nbsp; &nbsp;
                                               <?php echo $lastname ?>
                                            </div>
                                             
                                       
                                       
                                            <div class="form-group " style="font:serif; color:blue;">
                                                <label class="" for="phonenumber" style="font:serif; color:green;">PHONE NUMBER:</label>
                                               <?php echo $phonenumber?>
                                            </div>
                                             <div class="form-group " style="font:serif; color:blue;">
                                                <label class="" for="location" style="font:serif; color:green;">LOCATION :</label>
                                                <?php echo $location?>
                                            </div>                                             
                                             
                                       
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">                                    
                                      <input type="submit" name="delete_user" value="DELETE ACCOUNT" class="form-control btn btn-primary"/>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>         
        <br>        
        <!-- /.container -->
        <?php include "includes/footer.php"; ?>
