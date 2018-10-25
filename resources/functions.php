<?php

// helper functions

function row_count($result)
{
    return mysqli_num_rows($result);
}
function clean($string)
{
    return htmlentities($string);
}
function token_generator()
{
 $token=$_SESSION['token']=md5(uniqid(mt_rand(),true));
 return $token;
}
function last_id(){
global $connection;
return mysqli_insert_id($connection);
}
function set_message($msg){
if(!empty($msg)) {
$_SESSION['message'] = $msg;
} else {
$msg = "";
    }
}
function display_message() {
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}
function redirect($location){
return header("Location: $location ");
}

function query($sql) {
global $connection;
return mysqli_query($connection, $sql);
}
function confirm($result){
global $connection;
if(!$result) {
die("QUERY FAILED " . mysqli_error($connection));
	}
}
function escape_string($string){
global $connection;
return mysqli_real_escape_string($connection, $string);
}
function fetch_array($result){
return mysqli_fetch_array($result);
}
/***********************FRONT END FUNCTIONS******************************/
function garage_login()
{
  //SELECT `garageid`, `garagename`, `phonenumber`, `location`, `specialization`, `password` FROM `GARAGE` WHERE 1

            if(isset($_POST['login']))
            {
                $phonenumber = escape_string($_POST['phonenumber']);
                $password = escape_string($_POST['password']);
                $query = query("SELECT * FROM GARAGE WHERE phonenumber = '{$phonenumber}'");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $db_phonenumber=$row['phonenumber'];
                    $db_id=$row['garageid'];
                    $db_password=$row['password'];
                }
                 if(mysqli_num_rows($query) == 0)
                {
                     set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Ooops..phone password missmatch
</div>");
                    redirect("garage_login.php");
                }
                else
                {
                    $decrypted_pass = encrypt_decrypt('decrypt', $db_password);
            
            if ( $decrypted_pass == $password )
            {
                
               
                if($phonenumber==$db_phonenumber )
                {
                    echo $_SESSION['GARAGE'] = $phonenumber;
                  echo $_SESSION['garageid'] = $db_id;
                    redirect("../index.php");
                }
                else if($phonenumber==$db_phoneNo )
                {
                  echo $_SESSION['GARAGE'] = $phonenumber;
                  echo $_SESSION['garageid'] = $db_id;
                    redirect("../tasks.php");
                }
            }
            else
            {
                 set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Wrong password entered
</div>");
            }  
                }
                    
          
                    
                }
    }

function SPD_login()
{
  //SELECT `idspDealer`, `firstname`, `lastname`, `phonenumber`, `location`, `specialty`, `password` FROM `SPD` WHERE 1
            if(isset($_POST['login']))
            {
                $phonenumber = escape_string($_POST['phonenumber']);
                $password = escape_string($_POST['password']);
                $query = query("SELECT * FROM SPD WHERE phonenumber = '{$phonenumber}'");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $db_phonenumber=$row['phonenumber'];
                    $db_id=$row['idspDealer'];
                    $db_password=$row['password'];
                }
                 if(mysqli_num_rows($query) == 0)
                {
                     set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Ooops..phone password missmatch
</div>");
                    redirect("SPD_login.php");
                }
                else
                {
                    $decrypted_pass = encrypt_decrypt('decrypt', $db_password);
            
            if ( $decrypted_pass == $password )
            {
                
               
                if($phonenumber==$db_phonenumber )
                {
                    echo $_SESSION['SPD'] = $phonenumber;
                  echo $_SESSION['idspDealer'] = $db_id;
                    redirect("../index.php");
                }
                else if($phonenumber==$db_phoneNo )
                {
                  echo $_SESSION['SPD'] = $phonenumber;
                  echo $_SESSION['idspDealer'] = $db_id;
                    redirect("../tasks.php");
                }
            }
            else
            {
                 set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Wrong password entered
</div>");
            }  
                }
                    
          
                    
                }
    }


function mechanic_login()
{ 
//SELECT `mechanicid`, `firstname`, `lastname`, `phonenumber`, `location`, `experience`, `specialization`, `garagelocated`, `password` FROM `MECHANIC` WHERE 1
            if(isset($_POST['mechanic_login']))
            {
                $phonenumber = escape_string($_POST['phonenumber']);
                $password = escape_string($_POST['password']);
                $query = query("SELECT * FROM MECHANIC WHERE phonenumber = '{$phonenumber}'");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $db_phonenumber=$row['phonenumber'];
                    $db_id=$row['mechanicid'];
                    $db_password=$row['password'];
                }
                 if(mysqli_num_rows($query) == 0)
                {
                     set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Ooops..phone password missmatch
</div>");
                    redirect("login.php");
                }
                else
                {
                    $decrypted_pass = encrypt_decrypt('decrypt', $db_password);
            
            if ( $decrypted_pass == $password )
            {
                
               
                if($phonenumber==$db_phonenumber )
                {
                    echo $_SESSION['MECHANIC'] = $phonenumber;
                  echo $_SESSION['mechanicid'] = $db_id;
                    redirect("../MECHANIC_tasks.php");
                }
                else if($phonenumber==$db_phonenumber )
                {
                  echo $_SESSION['MECHANIC'] = $db_phoneNo;
                  echo $_SESSION['mechanicid'] = $db_id;
                    redirect("../MECHANIC_tasks.php");
                }
            }
            else
            {
                 set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Wrong password entered
</div>");
            }  
                }
                    
          
                    
                }
    }

function login()
{ 
//  INSERT INTO `CLIENT`(`idcarowner`, `firstname`, ` lastname`, `phonenumber`, `location`, `password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])//
   
            if(isset($_POST['login']))
            {
                $phonenumber = escape_string($_POST['phonenumber']);
                $password = escape_string($_POST['password']);
                $query = query("SELECT * FROM CLIENT WHERE phonenumber = '{$phonenumber}'");
                confirm($query);
                while($row=fetch_array($query))
                {
                    $db_phonenumber=$row['phonenumber'];
                    $db_id=$row['idcarowner'];
                    $db_password=$row['password'];
                }
                 if(mysqli_num_rows($query) == 0)
                {
                     set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Ooops..phone password missmatch
</div>");
                    redirect("login.php");
                }
                else
                {
                    $decrypted_pass = encrypt_decrypt('decrypt', $db_password);
            
            if ( $decrypted_pass == $password )
            {
                
               
                if($phonenumber==$db_phonenumber )
                {
                    echo $_SESSION['CLIENT'] = $phonenumber;
                  echo $_SESSION['idcarowner'] = $db_id;
                    redirect("../tasks.php");
                }
                else if($phonenumber==$db_phoneNo )
                {
                  echo $_SESSION['CLIENT'] = $phonenumber;
                  echo $_SESSION['idcarowner'] = $db_id;
                    redirect("../tasks.php");
                }
            }
            else
            {
                 set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Wrong password entered
</div>");
            }  
                }
                    
          
                    
                }
    }


function register()
//  INSERT INTO `CLIENT`(`idcarowner`, `firstname`, ` lastname`, `phonenumber`, `location`, `password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])//
{
    global $connection;
     if(isset($_POST['register']))
    {
          $password = escape_string($_POST['password']);
          $password2 = escape_string($_POST['password2']);
         if($password==$password2)
         {
                 


              $firstname = escape_string($_POST['firstname']);
              $lastname = escape_string($_POST['lastname']);             
              $phonenumber = escape_string($_POST['phonenumber']);
              $location = escape_string($_POST['location']);              
              $password = escape_string($_POST['password']);
              
             
             if(strlen($firstname)>0 && strlen($lastname)>0  && strlen($phonenumber)>0 && strlen($location)>0)
             {
                    $encrypted_pass = encrypt_decrypt('encrypt', $password);
                    
                    $query = query("INSERT INTO CLIENT(firstname,lastname,phonenumber,location,password) VALUES('{$firstname}',

                      '{$lastname}','{$phonenumber}','{$location}','{$encrypted_pass}')");
                    confirm($query);
                    
                    set_message("<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    Welcome {$firstname} lets finish!
                    </div>");
                    $db_id=mysqli_insert_id($connection);
                    
                    $_SESSION['CLIENT'] = $phonenumber;
                    $_SESSION['idcarowner'] = $db_id;
                    redirect("../admin/login.php");
            }
            else
            {
                 set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    FILL FORM  PLEASE
                    </div>");
                    redirect("../registry.php");
            }     
        }
         else
         {
             set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Please confirm your password again
</div");
         }
    }
}




function register_mechanic()
//SELECT `mechanicid`, `firstname`, `lastname`, `phonenumber`, `location`, `experience`, `specialization`, `garagelocated`, `password` FROM `MECHANIC` WHERE 1
{
    global $connection;
     if(isset($_POST['register_mechanic']))
    {
          $password = escape_string($_POST['password']);
          $password2 = escape_string($_POST['password2']);
         if($password==$password2)
         {
                 


              $firstname = escape_string($_POST['firstname']);
              $lastname = escape_string($_POST['lastname']);             
              $phonenumber = escape_string($_POST['phonenumber']);
              $location = escape_string($_POST['location']); 
              $specialization = escape_string($_POST['specialization']);
              $experience = escape_string($_POST['experience']);  
              $garagelocated = escape_string($_POST['garagelocated']);                 
              $password = escape_string($_POST['password']);
             
            
             
             if(strlen($firstname)>0 && strlen($lastname)>0  && strlen($phonenumber)>0 && strlen($location)>0 && strlen($specialization)>0  && strlen($experience)>0 && strlen($garagelocated)>0 )
             {
                    $encrypted_pass = encrypt_decrypt('encrypt', $password);
                    
                    $query = query("INSERT INTO MECHANIC(firstname,lastname , phonenumber , location ,specialization ,experience ,garagelocated ,password ) VALUES('{$firstname}','{$lastname}','{$phonenumber}','{$location}','{$specialization}','{$experience}','{$garagelocated}','{$encrypted_pass}')");
                    confirm($query);
                    
                    set_message("<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    Welcome {$firstname}!
                    </div>");
                    $db_id=mysqli_insert_id($connection);
                    
                    $_SESSION['MECHANIC'] = $phonenumber;
                    $_SESSION['mechanicid'] = $db_id;
                    redirect("../admin/mechanic_login.php");
            }
            else
            {
                 set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    FILL FORM  PLEASE
                    </div>");
                    redirect("../admin/mechanic_register.php");
            }   
        }     
         else
         {
             set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Please confirm your password again
</div");
         }    
    }
}


function SPD_registration()
//SELECT `idspDealer`, `firstname`, `lastname`, `phonenumber`, `location`, `specialty`, `password` FROM `SPD` WHERE 1
{
    global $connection;
     if(isset($_POST['register_SPD']))
    {
          $password = escape_string($_POST['password']);
          $password2 = escape_string($_POST['password2']);
         if($password==$password2)
         {
                 


              
              $firstname = escape_string($_POST['firstname']);
              $lastname = escape_string($_POST['lastname']);             
              $phonenumber = escape_string($_POST['phonenumber']);
              $location = escape_string($_POST['location']); 
              $specialty = escape_string($_POST['specialty']);                             
              $password = escape_string($_POST['password']);
             
            
             
             if(strlen($firstname)>0 && strlen($lastname)>0  && strlen($phonenumber)>0 && strlen($location)>0 && strlen($specialty)>0)
             {
                    $encrypted_pass = encrypt_decrypt('encrypt', $password);
                    
                    $query = query("INSERT INTO SPD(firstname,lastname , phonenumber , location ,specialty , password ) VALUES('{$firstname}','{$lastname}','{$phonenumber}','{$location}','{$specialty}','{$encrypted_pass}')");
                    confirm($query);
                    
                    set_message("<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    Welcome {$firstname}!
                    </div>");
                    $db_id=mysqli_insert_id($connection);
                    
                    $_SESSION['SPD'] = $phonenumber;
                    $_SESSION['idspDealer'] = $db_id;
                    redirect("../index.php");
            }
            else
            {
                 set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    FILL FORM  PLEASE
                    </div>");
                    redirect("../admin/SPD.php");
            }   
        }     
         else
         {
             set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Please confirm your password again
</div");
         }    
    }
}


function register_garage()
//SELECT `garageid`, `garagename`, `phonenumber`, `location`, `specialization`, `password` FROM `GARAGE` WHERE 1
{
    global $connection;
     if(isset($_POST['register_garage']))
    {
          $password = escape_string($_POST['password']);
          $password2 = escape_string($_POST['password2']);
         if($password==$password2)
         {
                 


              $garagename = escape_string($_POST['garagename']);
              $phonenumber = escape_string($_POST['phonenumber']);
              $location = escape_string($_POST['location']); 
              $specialization = escape_string($_POST['specialization']); 
              $password = escape_string($_POST['password']);
             
            
             
             if(strlen($garagename)>0 && strlen($phonenumber)>0  && strlen($location)>0 && strlen($specialization)>0 && strlen($password)>0)
             {
                    $encrypted_pass = encrypt_decrypt('encrypt', $password);
                    
                    $query = query("INSERT INTO GARAGE(garagename,phonenumber,location,specialization,password ) VALUES(
                      '{$garagename}','{$phonenumber}','{$location}','{$specialization}','{$encrypted_pass}')");
                    confirm($query);
                    
                    set_message("<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    Welcome {$garagename}!
                    </div>");
                    $db_id=mysqli_insert_id($connection);
                    
                    $_SESSION['GARAGE'] = $phonenumber;
                    $_SESSION['garageid'] = $db_id;
                    redirect("../index.php");
            }
            else
            {
                 set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    FILL FORM  PLEASE
                    </div>");
                    redirect("../admin/garage_register.php");
            }   
        }     
         else
         {
             set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
  Please confirm your password again
</div");
         }    
    }
}




function edit()
{
if (isset($_POST['submit'])) {

    
        $firstname      =$_POST['firstname'];
        $lastName       =$_POST['lastName'];
        $phone       =$_POST['phone'];
        $PhoneNo        =$_POST['PhoneNo'];
        $userPassword   =$_POST['userPassword'];
        $location       =$_POST['location'];
        


     $sql = mysql_query("UPDATE user SET firstname='$firstname',lastName='$lastName',phone='$phone',PhoneNo='$PhoneNo',userPassword='$encrypted_pass', location='$location' WHERE iduser ='$iduser'");
}
   }

 function edit_MQ(){
if (isset($_POST['edit_MQ'])){
                 /* $idmechanicrequest=$row['idmechanicrequest'];                                     
                    $details=$row['details'];
                    $dateofrequest = date ('F d, Y');
                    $dateofservice = date('F d, Y');  
                    $location=$row['location'];
                    $carmodel=$row['carmodel'];
SELECT `idserviceMQ`, `mechanicid`, `idmechanicrequest`, `idcarowner`, `servicecost`, `servicedate` FROM `serviceMQ` WHERE 1
                    */
// $dateofrequest = date('Y-m-d', strtotime($_POST['dateofrequest']));    

        $idmechanicrequest =$_POST['idmechanicrequest'];
        $details           =$_POST['details'];
        $dateofrequest     =date('Y-m-d', strtotime($_POST['dateofrequest']));  
        $dateofservice     =date('Y-m-d', strtotime($_POST['dateofservice']));  
        $location          =$_POST['location'];
        $carmodel          =$_POST['carmodel'];
        $idcarowner        =$_POST['idcarowner'];
        $servicecost       =$_POST['servicecost'];
        $servicedate       =date('Y-m-d', strtotime($_POST['servicedate']));  


     $sql = mysql_query("INSERT INTO serviceMQ( idmechanicrequest, details, location, carmodel, idcarowner, servicecost, servicedate)
                      VALUES('{$idmechanicrequest}','{$details}','{$location}','{$carmodel}','{$idcarowner}','{$servicecost}','{$servicedate}')");
        
}

 }
function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}
//INSERT INTO `Sparepart_Order`(`sparepart_id`, `sparepart_name`, `sparepart_image`, `Sparepart_manufacturer`, `Sparepart_model`, `Sparepart_description`, `car_model`, `Sparepart_pieces`, `user_ID`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])



function deleted(){


  if(isset($_SESSION['client']))
{
    $query = query("DELETE FROM client WHERE phoneNo ='{$_SESSION['client']}' ");
                
  confirm($query);
                    
                    redirect("index.php");
    
}
}


 function order_spareparts()
//SELECT `idsparepart`, `idcarowner`, `mechanicid`, `garageid`, `spname`, `spmanufacturer`, `spmodel`, `spdescription`, `carmodel`, `pieces`, `date` FROM `sparepart` WHERE 1
 //SELECT `idsparepart`, `idcarowner`, `mechanicid`, `garageid`, `spmanufacturer`, `spmodel`, `spdescription`, `carmodel`, `pieces`, `date`, `spname` FROM `sparepart` WHERE 1
{
    global $connection;
     if(isset($_POST['Sparepart_Order']))
    {
          $pieces = escape_string($_POST['pieces']);
          $pieces2 = escape_string($_POST['pieces2']);            
         if($pieces == $pieces2)
         {

              
              $spname = escape_string($_POST['spname']);
              $idcarowner = escape_string($_POST['idcarowner']);
              $spmanufacturer = escape_string($_POST['spmanufacturer']);             
              $spmodel = escape_string($_POST['spmodel']);
              $spdescription = escape_string($_POST['spdescription']);  
              $carmodel = escape_string($_POST['carmodel']);  
              $pieces = escape_string($_POST['pieces']);  
              $date = date('Y-m-d', strtotime($_POST['date']));
        
            

              
             
             if(strlen($spname)>0 && strlen($spmanufacturer)>0  && strlen($spmodel)>0 && strlen($spdescription)>0 && strlen($carmodel)>0 && strlen($pieces)>0 && strlen($date)>0 )
             {
             
                    $query = query("INSERT INTO sparepart( spname,idcarowner,spmanufacturer,spmodel,spdescription,carmodel,pieces,date)
                      VALUES('{$spname}','{$idcarowner}','{$spmanufacturer}','{$spmodel}','{$spdescription}','{$carmodel}','{$pieces}','{$date}')");
                   confirm($query);
                    
                  
                    redirect("../public/index.php");
                   
                              }    
                              }
        }        
    
    }




function request_garage(){
//SELECT `idgaragerequest`, `idcarowner`, `details`, `dateofrequest`, `dateofservice`, `location`, `carmodel` FROM `garagerequest` WHERE 1
 global $connection;
     if(isset($_POST['request_garage'])){
       
       
         
               $idcarowner = escape_string($_POST['idcarowner']);
              $details = escape_string($_POST['details']);
              $dateofrequest = date('Y-m-d', strtotime($_POST['dateofrequest']));             
              $dateofservice = date('Y-m-d', strtotime($_POST['dateofservice']));
              $location = escape_string($_POST['location']);  
              $carmodel = escape_string($_POST['carmodel']);  
                          
              
              
             
             if(strlen($details)>0 && strlen($dateofrequest)>0  && strlen($dateofservice)>0 && strlen($location)>0 && strlen($carmodel)>0)
             {
                    
                    $query = query("INSERT INTO garagerequest(idcarowner,details,dateofrequest,dateofservice,location,carmodel) VALUES('{$idcarowner}','{$details}','{$dateofrequest}','{$dateofservice}','{$location}','{$carmodel}')");
                    confirm($query);
                    
                    set_message("<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    order received!!
                    </div>");
                    redirect("../public/index.php");
                   
                                }    
        }   

     }



function request_mechanic(){
//SELECT `idmechanicrequest`, `idcarowner`, `details`, `dateofrequest`, `dateofservice`, `location`, `carmodel` FROM `mechanicrequest` WHERE 1
 global $connection;
     if(isset($_POST['request_mechanic'])){
      {
       
              $idcarowner = escape_string($_POST['idcarowner']);
              $details = escape_string($_POST['details']);
              $dateofrequest = date('Y-m-d', strtotime($_POST['dateofrequest']));             
              $dateofservice = date('Y-m-d', strtotime($_POST['dateofservice']));
              $location = escape_string($_POST['location']);  
              $carmodel = escape_string($_POST['carmodel']);  
                          
              
              
             
             if(strlen($details)>0 && strlen($dateofrequest)>0  && strlen($dateofservice)>0 && strlen($location)>0 && strlen($carmodel)>0)
             {
                    
                    $query = query("INSERT INTO mechanicrequest(idcarowner,details,dateofrequest,dateofservice,location,carmodel) VALUES('{$idcarowner}','{$details}','{$dateofrequest}','{$dateofservice}','{$location}','{$carmodel}')");
                    confirm($query);
                    
                    set_message("<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                  FILL ALL SPACES BELOW
                    </div>");
                    redirect("../public/index.php");
                   
                                }    
      }
        }   

     }




function edit_SPD() 
{
//SELECT `idspDealer`, `firstname`, `lastname`, `phonenumber`, `location`, `specialty`, `password` FROM `SPD` WHERE 1
  global $connection;
if (isset($_POST['update_SPD'])) {

 $query = query("SELECT * FROM SPD WHERE phonenumber ='{$_SESSION['SPD']}' ");
                confirm($query);
          $password = escape_string($_POST['password']);
          $password2 = escape_string($_POST['password2']);
         if($password==$password2)
         {
    
     $firstname = addslashes($_POST['firstname']);
     $lastname = addslashes($_POST['lastname']);
     $phonenumber= addslashes($_POST['phonenumber']);
     $location = addslashes($_POST['location']);
     $specialty = addslashes($_POST['specialty']);
     $password = addslashes($_POST['password']);
    
$encrypted_pass = encrypt_decrypt('encrypt', $password);
    
       $query = query( "UPDATE SPD 
                        SET firstname='$firstname', lastname='$lastname', phonenumber='$phonenumber' , location='$location', specialty='$specialty', password='$encrypted_pass' 
                         where phonenumber ='{$_SESSION['SPD']}';");
        confirm($query);
         redirect("index.php");

    
     
 }


}
}

function edit_GARAGE() 
{
//SELECT `garageid`, `garagename`, `phonenumber`, `location`, `specialization`, `password` FROM `GARAGE` WHERE 1 

global $connection;
if (isset($_POST['update_GARAGE'])) {

 $query = query("SELECT * FROM GARAGE WHERE phonenumber ='{$_SESSION['GARAGE']}' ");
                confirm($query);
          $password = escape_string($_POST['password']);
          $password2 = escape_string($_POST['password2']);
         if($password==$password2)
         {
    
     $garagename = addslashes($_POST['garagename']);    
     $phonenumber= addslashes($_POST['phonenumber']);
     $location = addslashes($_POST['location']);
     $specialization = addslashes($_POST['specialization']);
     $password = addslashes($_POST['password']);
    
$encrypted_pass = encrypt_decrypt('encrypt', $password);
    
       $query = query( "UPDATE GARAGE 
                        SET garagename='$garagename' , phonenumber='$phonenumber' , location='$location', specialization='$specialization', password='$encrypted_pass' 
                         where phonenumber ='{$_SESSION['GARAGE']}';");
        confirm($query);
         redirect("index.php");

    
     
 }


}
}

function edit_MECHANIC() 
{
//SELECT `mechanicid`, `firstname`, `lastname`, `phonenumber`, `location`, `experience`, `specialization`, `garagelocated`, `password` FROM `MECHANIC` WHERE 1

global $connection;
if (isset($_POST['update_MECHANIC'])) {

 $query = query("SELECT * FROM MECHANIC WHERE phonenumber ='{$_SESSION['MECHANIC']}' ");
                confirm($query);
          $password = escape_string($_POST['password']);
          $password2 = escape_string($_POST['password2']);
         if($password==$password2)
         {
    
     $firstname = addslashes($_POST['firstname']);    
     $lastname= addslashes($_POST['lastname']);
      $phonenumber= addslashes($_POST['phonenumber']);
     $location = addslashes($_POST['location']);
     $experience = addslashes($_POST['experience']);
     $specialization = addslashes($_POST['specialization']);
     $garagelocated = addslashes($_POST['garagelocated']);
     $password = addslashes($_POST['password']);
    
$encrypted_pass = encrypt_decrypt('encrypt', $password);
    
       $query = query( "UPDATE MECHANIC 
                        SET firstname='$firstname' , lastname='$lastname' , phonenumber='$phonenumber' , location='$location', experience='$experience' , specialization='$specialization', garagelocated='$garagelocated', password='$encrypted_pass' 
                         where phonenumber ='{$_SESSION['MECHANIC']}';");
        confirm($query);
         redirect("index.php");

    
     
 }


}
}

function edit_CLIENT() 
{
//SELECT `idcarowner`, `firstname`, `lastname`, `phonenumber`, `location`, `password` FROM `CLIENT` WHERE 1

global $connection;
if (isset($_POST['update_CLIENT'])) {

 $query = query("SELECT * FROM CLIENT WHERE phonenumber ='{$_SESSION['CLIENT']}' ");
                confirm($query);
          $password = escape_string($_POST['password']);
          $password2 = escape_string($_POST['password2']);
         if($password==$password2)
         {
    
     $firstname = addslashes($_POST['firstname']);    
     $lastname= addslashes($_POST['lastname']);
      $phonenumber= addslashes($_POST['phonenumber']);
     $location = addslashes($_POST['location']);    
     $password = addslashes($_POST['password']);
    
$encrypted_pass = encrypt_decrypt('encrypt', $password);
    
       $query = query( "UPDATE CLIENT 
                        SET firstname='$firstname' , lastname='$lastname' , phonenumber='$phonenumber' , location='$location', password='$encrypted_pass' 
                         where phonenumber ='{$_SESSION['CLIENT']}';");
        confirm($query);
         redirect("index.php");

    
     
 }


}
}
?>
