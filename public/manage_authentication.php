<?php

include_once '../include/Config.php';

 
 //Update User Profile
 
 if (isset($_POST['update_details_user'])) {
     $UserID = addslashes($_POST['UserID']);
     $UserName = addslashes($_POST['UserName']);
     $FirstName = addslashes($_POST['FirstName']);
     $LastName = addslashes($_POST['LastName']);
     $Email = addslashes($_POST['Email']);
     $Password = addslashes($_POST['Password']);
     $Password2 = addslashes($_POST['Password2']);

     if ($Password == $Password2) {
		 $Password = md5($Password);
		 $Password2 = md5($Password2);
      
        
		
		$user_update_details = "UPDATE user SET UserName='$UserName', FirstName='$FirstName', LastName='$LastName' , Email='$Email', Password='$Password', Confirm_Password='$Password2' WHERE UserID='$UserID'";

     if ($db->query($user_update_details) === TRUE) {
         @header("Location:../Admin_Homepage.php");
         exit();
     }else{
        echo "An error Occured while updating profile";
     }
     }
 }
 
 //Delete a user
 if (isset($_GET['delete_user'])) {
	$UserID = $_GET['delete_user'];

	$delete_user = "DELETE FROM user WHERE UserID='$UserID'";

	if ($db->query($delete_user) === TRUE) {
		@header("Location:../Admin_Homepage.php");
		exit();
	}else{
		echo "An error occured" .$delete_user . '' . $db->error;
	}
}


?>