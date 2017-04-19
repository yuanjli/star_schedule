<?php 
session_start();

unset($_SESSION['s_id']);
session_destroy();
echo "You have been logged out";
//header("location:../index.php");
?>

<html>
<head>
	<title>Logged Out</title>
</head>
<body>
<body>
</html>
