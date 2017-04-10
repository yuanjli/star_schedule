<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  


  $(function() {
    $( "#start_date" ).datepicker({dateFormat: "yy-mm-dd"});
    $("#end_date").datepicker({dateFormat: "yy-mm-dd"});
  });



var date1=start_date;
var date2=end_date;
  </script>
</head>
<body>

<form action="" method="post">
  <ul style="list-style:none;">
      
     <li><label for="vehicle type" ></label>Vehicle Type<br>
     <select name="v_type" id="v_type">
        <option value="dlx_coach">Deluxe Coach</option>
        <option value="dlx_mini">Deluxe Mini</option>
        <option value="bus">Bus</option>
        <option value="mini_bus">Mini Bus</option>
        <option value="micro_bus">Micro Bus</option>
      </select>
      
      <li><label for="start_date" >Start Date</label><br>
      <input type="text" id="start_date" name="start_date" required></li>
      <li><label for="end_date" ></label>End Date <br>
      <input type="text" id="end_date" name="end_date" required></li>

      <!-- default checkbox value is 0 and is stored hidden-->
      <input type="hidden" id="default_want_driver" name="want_driver" value="0"> 
      <input type="checkbox" id="want_driver" name="want_driver" value="1"> I need a driver <br>
      <input type="submit" id="submit_button" value="Submit">
  </ul>
</form><br>

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

$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$v_type = $_POST['v_type'];
$want_driver = (int)$_POST['want_driver'];


//caluclate the cost per day

$date1 = explode("-",$start_date);
$date2 = explode("-",$end_date);

echo((int)$start_date[2]);
$year = (int)$start_date[2] - (int)$end_date[2];
//$month = (int)$start_date[1] - (int)$end_date[1];
//$day = (int)$start_date[2] - (int)$

echo($year);
//customer need not a driver
//  $trans1 = "SELECT v_id,pp_day,d_id FROM vehicles,drivers WHERE vehicles.vehicle_avail='1' AND vehicles.model_no='$v_type' AND drivers.driver_avail='1' LIMIT 1";
 

 $execute = "SELECT * FROM transactions WHERE '$end_date' > start_date AND end_date > '$start_date'";
 $result = mysqli_query($conn,$execute);
 $num_exec = mysqli_num_rows($result);


 echo("Execute value ".$num_exec);

if($num_exec>=4)
  echo("\nSorry. No cars are available for these dates!!");
else
  echo("Car available");



/*$numdayssql = "SELECT date_diff('$end_date','$start_date')";
$result  = mysqli_query($conn,$numdayssql);

$row = mysqli_fetch_assoc($result);
echo("Days are: " .$row);
*/

/*$result = mysql_query('SELECT date_diff('$end_date','$start_date')');
echo mysql_result($result, 2); // outputs third employee's name

*/
    




//check for vehicles with the same start date and end date
/*  $trans1 = "SELECT t_id FROM transactions WHERE v_type='$v_type' AND start_date='$start_date' AND end_date='$end_date'";
  $result = mysqli_query($conn,$trans1);   
  $count = mysqli_num_rows($result);

  echo("Vehicles with same start date and end date = ".$count);


//checking vehicles with the same start date
  $trans2 = "SELECT t_id FROM transactions WHERE v_type='$v_type' AND start_date='$start_date'";
  $result2 = mysqli_query($conn,$trans2);
  $count2 = mysqli_num_rows($result2);

  echo("Vehicles with same start date = ".$count2);

//checking vehicles with the same date
  $trans3 = "SELECT t_id FROM transactions WHERE v_type='$v_type' AND end_date='$end_date'";
  $result3 = mysqli_query($conn,$trans3);
  $count3 = mysqli_num_rows($result3);

  echo("Vehicles with same end date = ".$count3);

*/
/*  if($count == 1){
    echo ("Generating your transcationpage");
  }*/
/*
  else {
    $trans2 = ""
    $result = mysqli_query($conn,$trans2);
    $count = mysqli_num_rows($result);

    if($count == 1) {
      echo ("Generating your transaction page");
    }
  }
*/


//customer do not need a driver
/*
else {
 $trans1 = "SELECT v_id,pp_day,d_id FROM vehicles WHERE vehicles.vehicle_avail='1' AND vehicles.model_no='$v_type' limit 1;"

}*/


?>

<!--<p>Date: <input type="text" id="startdate`"></p>
<p>Date: <input type="text" id="enddate"></p>-->

 
 
</body>
</html>
