<?php
//establishing conenction with the mysqlserver
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

//check if the email entered is empty  
if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
}

 //if the password entered is empty 
if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
}

//if there are no errors, establish the conenction to the database and retrive customer id
if (!$error) {
   $sql = "SELECT c_id FROM UserTable WHERE email='$email' AND passwd='$pass'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);

//if there is a unique c_id that corresponds to the email & password crate a seesion for the user
   if($count == 1) {
    //still working on creating the php sessions
 //   $_SESSION['cid'] = $sql;
    header("location:my_home.php");
   }  

   else {echo "Invalid login Credentials";}
   
   }

 mysqli_close($conn);
?>