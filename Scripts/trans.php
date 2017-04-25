<body>
<iframe src="../nav_bar.html"  width="1700" frameBorder="0"></iframe>
</body>
<?php
session_start();
/*
echo($_SESSION['start_date']);
echo($_SESSION['end_date']);
echo($_SESSION['v_type']);
echo($_SESSION['c_id']);
echo($_SESSION['d_id']);
*/

$v_type = $_SESSION['v_type'];

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

if(isset($_SESSION['s_id'])) {
    echo ("Redirected to the transactions page")."<br>"."<br>";
    //show the transaction details and total amount payable
    $end = strtotime($_SESSION['end_date']);
    $start = strtotime($_SESSION['start_date']);
    $datediff = $end - $start;

//adding 1 considering purchase and return on the same day
    $no_days = floor($datediff/(60*60*24)) + 1;

//    echo($no_days." ");
//cost of the driver
    if((int)$_SESSION['d_id'] !=0 ){
    	$driver_cost = 100 * $no_days;
    	echo("The cost of the driver for ".$no_days." days is ".$driver_cost)."<br>"."<br>";
    }
//cost of the vehicle
    $sql = "SELECT pp_day FROM vehicles WHERE model_no='$v_type'";
    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    $vehicle_cost = $no_days * $row["pp_day"];
    echo("The cost of the vehicle for ".$no_days." days is ".$vehicle_cost)."<br>"."<br>";

//total amout
    $total_amnt = $driver_cost + $vehicle_cost;

    echo("The Total Amount Payable is ".$total_amnt)."<br>"."<br>";
    $_SESSION['driver_cost'] = $driver_cost;
    $_SESSION['vehicle_cost'] = $vehicle_cost;
    $_SESSION['total_amnt'] = $total_amnt;
    
    //make payment, if payment successful, enter the values to mysql
  }

else {
	echo ("You need to be logged in, to make transactions");
	header("location:../log_in.html");
}

mysqli_close($conn);
?>
<body>
<button><a href="../transaction.php" style="text-decoration:none;">Pay Now</a></button>
</body>