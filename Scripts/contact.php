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
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$message = mysqli_real_escape_string($conn, $_REQUEST['message']);


//add code to check if email already exist


$sql = "INSERT INTO Contact (name,email,message) VALUES('$name','$email','$message')";


if(mysqli_query($conn, $sql)){
    echo "We have Submitted your information successfully";
} 
else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}

mysqli_close($conn);
?>
