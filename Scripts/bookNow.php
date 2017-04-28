<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Star Schedule</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#start_date" ).datepicker({dateFormat: "yy-mm-dd"});
    $("#end_date").datepicker({dateFormat: "yy-mm-dd"});
  });
  </script>
</head>
<body>
<iframe src="../nav_bar.php"  width="1700" frameBorder="0"></iframe>
<form action="" method="post">
  <ul style="list-style:none;">
      
     <li><label for="vehicle type" ></label>Vehicle Type<br>
     <select name="v_type" id="v_type">
        <option value="dlx_coach">Deluxe Coach</option>
        <option value="dlx_lux">Deluxe Luxuary</option>
        <option value="mega_bus">Mega Bus</option>
        <option value="mini_bus">Mini Bus</option>
        <option value="school_bus">School Bus</option>
        <option value="party_bus">Party Bus</option>
        <option value="sprinter">Sprinter</option>
        <option value="ford_transit">Ford Transit</option>
      </select>
      
      <li><label for="start_date" >Start Date</label><br>
      <input type="text" id="start_date" name="start_date" required></li>
      <li><label for="end_date" ></label>End Date <br>
      <input type="text" id="end_date" name="end_date" required></li>

      <!-- default checkbox value is 0 and is stored hidden-->
      <input type="hidden" id="default_want_driver" name="want_driver" value="0" > 
      <input type="checkbox" id="want_driver" name="want_driver" value="1"> I need a driver <br>

      <!-- Driver Dropdown list -->
      <select id="driver_id" name="driver_id">
          <option value="1">Jessica Wally</option>
          <option value="2">Mike Sloan</option>
          <option value="3">Michele Doe</option>
          <option value="4">Linda Evans</option>
          <option value="5">Mario Puzo</option>
          <option value="6">John Smith</option>
          <option value="7">Kelly Mathews</option>
          <option value="8">Michael Crichton</option>
          <option value="9">Tom Hiddleston</option>
          <option value="10">Marilyn Monroe</option>
          <option value="11">Leo Mathew</option>
          <option value="12">John Deree</option>
     </select>

      <input type="submit" id="submit_button" name="Submit" value="Submit">
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


$driver = 0;
$car_avail = 0;


//Check if the car is available on the select date 
if(!empty($_POST['Submit'])){

$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$v_type = $_POST['v_type'];
$want_driver = (int)$_POST['want_driver'];


          $execute = "SELECT * FROM transactions WHERE '$end_date' > start_date AND end_date > '$start_date' AND v_type='$v_type' ";
          $result = mysqli_query($conn,$execute);
          $num_exec = mysqli_num_rows($result);


          if($num_exec >= 4) {
              echo("\nSorry. No cars are available for these dates!!");
          }

          else {
              $car_avail = 1;
              echo("Car Available check");
          }

//If customer needs driver check the availability of the driver
          if($want_driver == 1) {
            $driver = (int)$_POST['driver_id'];
            echo("Want Driver is set"); 
            $execute = "SELECT * FROM transactions WHERE '$end_date' > start_date AND end_date > '$start_date' AND d_id='$driver'";
            $result = mysqli_query($conn,$execute);
            $num_exec = mysqli_num_rows($result);

            if($num_exec > 0) {
                  echo("\nSorry. The Driver is not available for these days. Pick a different driver");
            }

            else {
                  $driver_avail = 1;
            }
          }
}          
//we have atleast one car in the time frame mentioned
if($car_avail==1) {
  
  echo "Car available last loop";
  // initailising session after checking if cust. needs driver or not
    if (($want_driver == 1 and $driver_avail == 1) or $want_driver == 0){

//          echo("Want Driver = ".$want_driver."Driver Avail = ".$driver_avail);
          session_start();
          $_SESSION['start_date'] = $start_date;
          $_SESSION['end_date'] = $end_date;
          $_SESSION['v_type'] = $v_type;
          $_SESSION['d_id'] = $driver;
          $_SESSION['trans'] = true;
          header("location:./trans.php");
    }
}
mysqli_close($conn);
?> 

</body>
</html>
