<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//connection success
// Escape user inputs for security


//add code to check if email already exist
//$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
//$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
//$message = mysqli_real_escape_string($conn, $_REQUEST['message']);
// 
//// attempt insert query execution
//$sql = "INSERT INTO Contacts (name ,email, message) VALUES ('$name', '$email', '$message')";
//
//if($email!=NULL)
//{
//if(mysqli_query($conn, $sql)){
//echo("Thank you for sending us your data");
//}
//else echo("Sorry!");
//}

$delname = mysqli_real_escape_string($conn, $_REQUEST['delemail']);
$delpass = mysqli_real_escape_string($conn, $_REQUEST['delpass']);
if($delname!=NULL)
{
	
	session_start();

unset($_SESSION['s_id']);
session_destroy();
$del="DELETE FROM UserTable WHERE email='$delname' AND passwd='$delpass'";

if(mysqli_query($conn, $del)){
echo("Data deleted");
	header("location:../index.php");

}
else echo("Sorry could not delete! Check your password or email!");

}




mysqli_close($conn);
?>
