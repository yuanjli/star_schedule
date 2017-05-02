<?php
session_start();
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

//validating user email
$email = trim($_POST['email']);
$email = strip_tags($email);
$email = htmlspecialchars($email);

//validating user password 
$pass = trim($_POST['passwd']);
$pass = strip_tags($pass);
$pass = htmlspecialchars($pass);

  
if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
}

  
if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
}

if (!$error) {
   $sql = "SELECT c_id FROM UserTable WHERE email='$email' AND passwd='$pass'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);

   $row = $result->fetch_assoc();
   $_SESSION['c_id'] = $row["c_id"];


   if($count == 1) {
    $_SESSION['s_id'] = true;

    //if redirected from the transcations page get the user back to the transactions page
    if(isset($_SESSION['trans'])) {
      header("location:./trans.php");
    }
   //else take the user to the index page i.e first time login 
   else {
    header("location:../index.php");
    }
   }  

   else 
{
$message = "Wrong credentials";
echo "<script type='text/javascript'>alert('$message');</script>";
    header("location:../login.php");


}
   }

 mysqli_close($conn);
?>