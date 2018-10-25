<?php

    global $connection;
     if(isset($_POST['register']))
    {
          $password = escape_string($_POST['password']);
          $password2 = escape_string($_POST['password2']);
         if($password==$password2)
         {
                 


              $firstName = escape_string($_POST['firstName']);
              $lastName = escape_string($_POST['lastName']);
              $userName = escape_string($_POST['userName']);
              $email = escape_string($_POST['email']);
              $phoneNo = escape_string($_POST['phoneNo']);
              $location = escape_string($_POST['location']);
              $category = escape_string($_POST['category']);
              $userPassword = escape_string($_POST['password']);
              //INSERT INTO `user`(`iduser`, `Fname`, `LName`, `userName`, `email`, `PhoneNo`, `userPassword`, `location`, `category`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
    
            
             
             if(strlen($fisrtName)>0 && strlen($lastName)>0 && strlen($userName)>0 && strlen($email)>0 && strlen($phoneNo)>0 && strlen($location)>0 && strlen($category)>0)
             {
                    $encrypted_pass = encrypt_decrypt('encrypt', $userPassword);
                    
                    $query = query("INSERT INTO user(firstName,lastName,userName,email,phoneNo,userpassword,location,category,userPassword) VALUES('{$firstName}','{$lastName}','{$userName}','{$email}','{$phoneNo}','{$location}','{$category}','{$encrypted_pass}')");
                  //  INSERT INTO `user`(`iduser`, `Fname`, `LName`, `userName`, `email`, `PhoneNo`, `userPassword`, `location`, `userRole`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
                    
                    confirm($query);
                    
                    set_message("<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    Welcome {$userName}!
                    </div>");
                    $db_id=mysqli_insert_id($connection);
                    
                    $_SESSION['user'] = $userName;
                    $_SESSION['userID'] = $db_id;
                    redirect("../index.php");
            }
            else
            {
                 set_message("<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    Please fill all the fields in the form Correctly
                    </div>");
                    redirect("register.php");
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
?>

//$userName = escape_string($_POST['userName']);
              $firstName = escape_string($_POST['firstName']);
              $lastName = escape_string($_POST['lastName']);
              $userEmail = escape_string($_POST['email']);
              $mobileNo = escape_string($_POST['mobileNo']);
              $userPassword = escape_string($_POST['password']);
            
             
             if(strlen($userName)>0 && strlen($firstName)>0 && strlen($userEmail)>0 && strlen($mobileNo)>0)
             {
                    $encrypted_pass = encrypt_decrypt('encrypt', $userPassword);
                    
                    $query = query("INSERT INTO users(userName,userFirstName,userLastName,userEmail,userMobileNo,userPassword) VALUES('{$userName}','{$firstName}','{$lastName}','{$userEmail}','{$mobileNo}','{$encrypted_pass}')");
                    