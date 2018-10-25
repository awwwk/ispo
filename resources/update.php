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
//UPDATE `user` SET `iduser`=[value-1],`firstname`=[value-2],`lastName`=[value-3],`userName`=[value-4],`PhoneNo`=[value-5],`userPassword`=[value-6],`location`=[value-7],`category`=[value-8] WHERE 1

function updateUser()

{
if(isset($_POST['new']) && $_POST['new']==1)
{
$iduser=$_REQUEST['iduser'];
$firstname=$_REQUEST['firstname'];
$lastName=$_REQUEST['lastName'];
$userName = $_SESSION["userName"];
$PhoneNo=$_REQUEST['PhoneNo'];
$userPassword=$_REQUEST['userPassword'];
$location=$_REQUEST['location']
$category=$_REQUEST['category']
$submittedby = $_SESSION["username"];
$update="update user set firstname='".$firstname."',lastName='".$lastName."',userName='".$userName."',PhoneNo='".$PhoneNo."', userPassword='".$userPassword."',location='".$location."', category='".$category."'
     where iduser='".$id."'";

mysqli_query($connection, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
}
?>