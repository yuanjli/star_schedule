<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Temp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//connection success
// Escape user inputs for security


//add code to check if email already exist
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$message = mysqli_real_escape_string($conn, $_REQUEST['message']);
 
// attempt insert query execution
$sql = "INSERT INTO Contacts (name ,email, message) VALUES ('$name', '$email', '$message')";
if(mysqli_query($conn, $sql)){
    echo "We have received your data.";
} else{
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($conn);
}


mysqli_close($conn);
?>
