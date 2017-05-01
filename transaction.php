<html>
	<iframe src="./nav_bar.html"  width="1700" frameBorder="0"></iframe>
</html>

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

$driver_cost = $_SESSION['driver_cost'];
$vehicle_cost = $_SESSION['vehicle_cost'];
$total_amnt = $_SESSION['total_amnt'];
$start_date = $_SESSION['start_date'];
$end_date = $_SESSION['end_date'];
$v_type = $_SESSION['v_type'];
$c_id = $_SESSION['c_id'];
$d_id = $_SESSION['d_id'];
?>

<html >
<head>
    <meta charset="UTF-8" /> 
    
    <link rel="stylesheet" type="text/css" href="style.css" />
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
     <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600" rel="stylesheet" type="text/css">
</head>
<body>


<!--  Start here -->

<body>
<div id="wrap">
	<div id="grid">
		<div class="column column1">
		
		<div class="content" id="email">
			
		</div>
		<div class="step" id="step2">
			<div class="number">
				<span>1</span>
			</div>
			<div class="title">
				<h1>Billing Information</h1>
			</div>
		</div>
		<div class="content" id="address">
			<form class="go-right">
				<div>
				<input type="name" name="first_name" id="first_name" placeholder="First Name" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your First Name"/><label for="first_name" required>First Name</label>
        </div>
				<div>
				<input type="name" name="last_name" value="" id="last_name" placeholder="Last Name" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Last Name" required/><label for="last_name" >Last Name</label>
				</div>
				<div>
				<input type="phone" name="telephone" value="" id="telephone" placeholder="Phone(555)-555-5555" data-trigger="change" data-validation-minlength="1" data-type="number" data-required="true" data-error-message="Enter Your Telephone Number" required/><label for="telephone">Telephone</label>
				</div>
				<div>
				<input type="text" name="company" value="" id="company" placeholder="Company" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="false" required/>
          <label for="Company">Company</label>
				</div>
				<div>
				<input type="text" name="address"  id="address" placeholder="Address" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing Address"/><label for="Address" required>Address</label>
				</div>
				<div>
				<input type="text" name="city" value="" id="city" placeholder="City" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing City"/><label for="city" reuiqred>City</label>
				</div>
				<div>
				<input type="text" name="state" value="" id="state" placeholder="State" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing State"/><label for="city" required>City</label>					
          		</div>
          		<div>
				<input type="text" name="zip" value="" id="zip" placeholder="Zip" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing State"/><label for="city" required>Zip</label>					
          		</div>
				</div>
			</form>
		</div>
	</div>
	<div class="column column2">
		
		
		<div class="step" id="step4">
			<div class="number">
				<span>2</span>
			</div>
			<div class="title">
				<h1>Payment Information</h1>
			</div>
			<div class="modify">
				<i class="fa fa-plus-circle"></i>
			</div>
		</div>
		<div class="content" id="payment">
			<div class="left">
			<form class="go-right">
				<div>
				<input type="text" name="card_number" value="" id="card_number" placeholder="xxxx-xxxx-xxxx-xxxx" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Number"/><label for="card_number" required>Card Number</label>
				</div>
				<div>
				  <div class="expiry">	
				      <div class="month_select">
				        <select name="exp_month" value="" id="exp_month" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date" required>
							<option value = "1">01 (Jan)</option>
                   			<option value = "2">02 (Feb)</option>
                   			<option value = "3">03 (Mar)</option>
                   			<option value = "4">04 (Apr)</option>
                   			<option value = "5">05 (May)</option>
                   			<option value = "6">06 (Jun)</option>
                   			<option value = "7">07 (Jul)</option>
                   			<option value = "8">08 (Aug)</option>
                   			<option value = "9">09 (Sep)</option>
                   			<option value = "10">10 (Oct)</option>
                   			<option value = "11">11 (Nov)</option>
                   			<option value = "12">12 (Dec)</option>
                        </select>
                      </div>
                      <div class="year_select">
				        <select name="exp_year" value="" id="exp_year" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date" required>
							<option value = "1">2017 </option>
                   			<option value = "2">2018</option>
                   			
                   			<option value = "3">2019 </option>
                   			<option value = "4">2020 </option>
                   			<option value = "5">2021 </option>
                   			<option value = "6">2022 </option>
                   			<option value = "7">2023 </option>
                   			<option value = "8">2024 </option>
                   			<option value = "9">2025 </option>
                   			<option value = "10">2026 </option>
                        </select>
            	      </div>
                  <label class="exp_date" for="Exp_Date" required>Exp Date</label>
            	    </div>
            	  </div>
            	<div class="sec_num">
              <div>
				        <input type="text" name="ccv" value="" id="ccv" placeholder="123" data-trigger="change" data-validation-minlength="3" data-type="name" data-required="true" data-error-message="Enter Your Card Security Code" required/><label for="ccv">Security Code</label>
				      </div>
				      </div>
			      </form>
			</div>
			<div class="right">
				<div class="accepted">
					<span><img src="img/Z5HVIOt.png"></span>
					<span><img src="img/Le0Vvgx.png"></span>
					<span><img src="img/D2eQTim.png"></span>
					<span><img src="img/Pu4e7AT.png"></span>
					<span><img src="img/ewMjaHv.png"></span>
					<span><img src="img/3LmmFFV.png"></span>
				</div>
				<div class="secured">
					<img class="lock" src="img/lock.png">
					<p class="security info">What, well you mean like a date? Doc? Am I to understand you're still hanging around with Doctor Emmett Brown, McFly? Tardy slip for you, Miss Parker. And one for you McFly I believe that makes four in a row.</p>
				</div>
			</div>
		<form action="" method="post">
			<input class="continue" type="submit" id="submit_button" name="Submit" value="Pay Now">
		</form>
		<?php
			if(!empty($_POST['Submit'])){
				$execute = "INSERT INTO transactions(c_id,start_date,end_date,total_amnt,d_id,v_type) VALUES('$c_id','$start_date','$end_date','$total_amnt','$d_id','$v_type')";

				if ($conn->query($execute) === TRUE) {
    						echo "Transaction Successful";
				} 
				else {
    						echo "Error: " . $sql . "<br>" . $conn->error;
					 }
		}
		?>
 		</div>
 	</div>
 	<div class="column column3">
 		<div class="step" id="step5">
			<div class="number">
				<span>5</span>
			</div>
			<div class="title">
				<h1>Finalize Order</h1>
			</div>
			<div class="modify">
				<i class="fa fa-plus-circle"></i>
			</div>
		</div>
		<div class="content" id="final_products">
			<div class="left" id="ordered">
				<div class="products">
					
					
				</div>
				<div class="totals">
					<span class="subtitle">Vehicle Cost <span id="sub_vehicle"><?php echo "$ ".$vehicle_cost ?></span></span>
					<span class="subtitle">Driver Cost <span id="sub_driver"><?php echo "$".$driver_cost?></span></span>
				</div>
				<div class="final">
					<span class="title">Total <span id="calculated_total"><?php echo "$".$total_amnt?></span></span>
				</div>
			</div>	
		
	</div>
</div>

</body>
</html>

