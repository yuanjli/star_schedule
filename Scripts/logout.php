<html>
<head>
	<title>Logged Out</title>
</head>
<body>
	<iframe src="../nav_bar.php"  width="1700" frameBorder="0"></iframe>
<body>
</html>

<?php 
session_start();

unset($_SESSION['s_id']);
session_destroy();
echo "You have been logged out";
header("location:../index.php");
?>



