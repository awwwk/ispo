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
   <!--   Slider-->
   
     <br>
    <br>
      <body style='text-align:center;' class='bg-dark'>
   <center>
   	<div style=' font-style:italic; color:grey'>
    <p ><center><strong>Welcome to the car clinic<br>Order a spare-part below <br> Request  Garage & Mechanic services Below</strong></center></p>
</div>

				   <a  href='trialspareparts.php' ><img style='padding:10px; border-radius:25px; margin-left:0px;  height:130px; width:200px; text-color:#00000 text-size:44px;'  src='images/spares.jpg' alt='company logo' ></a>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <a  href='garage_request.php' ><img style='padding:10px; border-radius:25px; margin-left:0px;  height:130px; width:200px; text-color:#00000 text-size:44px;'  src='images/garag.jpg' alt='company logo' ></a>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <a  href='mechanic_booking.php' ><img style='padding:10px; border-radius:25px; margin-left:0px;  height:130px; width:200px; text-color:#00000 text-size:44px;' src='images/services2.jpg' alt='company logo' ></a>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            <a  href='CVQ.php' ><img style='padding:10px; border-radius:25px; margin-left:0px;  height:130px; width:200px; text-color:#00000 text-size:44px;''  src='images/order.png' alt='company logo' ></a>
                            
                     
                  <div class=""py-5 bg-dark">
  <center>
        
         <a class=" badge badge-success" style="padding:10px; border-radius:25px; margin-left:0px;  height:32px; width:200px; text-color:#00000 text-size:44px;" href="trialspareparts.php"> Order SpareParts</a> 
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <a class=" badge badge-success" style="padding:10px; border-radius:25px; margin-left:0px;  height:32px; width:200px; text-color:#00000 text-size:44px;" href="garage_request.php"> Request Garage Services</a> 
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
             <a class=" badge badge-success" style="padding:10px; border-radius:25px; margin-left:0px;  height:32px; width:200px; text-color:#00000 text-size:44px;" href="mechanic_booking.php"> Request Mechanic Services</a> 
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            <a class=" badge badge-success" style="padding:10px; border-radius:25px; margin-left:0px;  height:32px; width:200px; text-color:#00000 text-size:44px;" href="CVQ.php"> View Sent Quotations</a> 
                    
                     
                   
</center>
</div>   
                 
                  

              
    <div >   
      <!-- Features Section -->
      <div style="margin-top:225px; margin-bottom:-10px; width:100%; font-style:italic;">
          <p><center>"The cars we drive say alot about us" ~someone~ </center> </p>
      </div>
      <!-- /.row -->
      <hr>
      <!-- Call to Action Section -->
    </div>  
</center>
</body>
    <!-- /.container -->
<?php include "includes/footer.php"; ?><li class="nav-item">
                   