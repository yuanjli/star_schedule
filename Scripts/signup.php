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
$f_name = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$l_name = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$passwd = mysqli_real_escape_string($conn, $_REQUEST['passwd']);
$street = mysqli_real_escape_string($conn, $_REQUEST['street']);
$city = mysqli_real_escape_string($conn, $_REQUEST['city']);
$zip = mysqli_real_escape_string($conn, $_REQUEST['zip']);
$phno = mysqli_real_escape_string($conn, $_REQUEST['phno']);


//add code to check if email already exist

$chk_email = "SELECT email FROM UserTable WHERE email='$email'";
$result = mysqli_query($conn,$chk_email);
$count = mysqli_num_rows($result);

if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   echo("Please enter valid email address.");
}

elseif($count != 0){
	echo ("Already Registered E-mail. Please login");
}

else {
$sql = "INSERT INTO UserTable (fname,lname,email,street,city,zip,phno,passwd) VALUES('$f_name','$l_name','$email','$street','$city','$zip','$phno','$passwd')";
}

if(mysqli_query($conn, $sql)){
    echo "We have Submitted your information successfully";
} 
else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}

mysqli_close($conn);
?>
