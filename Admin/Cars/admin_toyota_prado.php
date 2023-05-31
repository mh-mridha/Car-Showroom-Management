
<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Land Cruiser Prado</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body background="images/bg-2.jpg";>


<div class="header">
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="index.php" title="Car Bazar"><img src="images/logo.png" alt="" style ="width:250px; height: 80px;" ></a>
		 </div>
		 
		 
		 <div class="cart">
			
            
		    <div class="menu-main">
		    
			   <ul class="dc_css3_menu">
					  <li class="active"><a href="http://localhost/Car_Showroom/Admin/" title="Car Bazar admin">Home</a></li>
					 <li > <a href="../admincars.php" title="See available cars at showroom">Avaiable Cars</a></li>
                     <li> <a href="../adminaddcar.php" title="Add car to showroom"> Add Car</a></li>
                     <li> <a href="../adminorders.php" title="See order list">See Orders</a></li>
                     <li><a href="../adminlogout.php">Logout</a></li>
                     
		     	</ul>
                
			 <div class="clear"></div>
			 
			 <img src="images/interval.png" alt="" style ="width:1330px; height: 195px;">
			 
			</div>	
						
		</div>	
		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>





<div class="header-bottom">
	<div class="wrap">
		<div class="single">
			<div class="box_wrapper"><center><h1 style="color:#3c40c6;">Toyota Land Cruiser Prado</h1></center></div>
				
				
				    <table border="0">
					  <tbody>
						<tr>
						  <td><img src="images-2/prado.jpg" alt="" style ="width: 310px; height: 160px;" ></td>
						  <td><img src="images-2/prado_back.jpg" alt="" style ="width: 310px; height: 160px;" ></td>
						  <td><img src="images-2/prado_intr.jpg" alt="" style ="width: 310px; height: 160px;" ></td>
						  <td><img src="images-2/prado_intr-2.jpg" alt="" style ="width: 310px; height: 160px;" ></td>
						</tr>
					  </tbody>
					</table>
					
					
					
					<br>
					<br>
					<br>
					<hr>
					
					
					<div class="s">
                 
						
						<h3>Details</h3>
						
                  
                              <?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "car_showroom";
								
								

								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection    basic_spec
								if ($conn->connect_error) {
								  die("Connection failed: " . $conn->connect_error);
								}

								
								$sql = "SELECT * FROM car where model = '71'";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
								  // output data of each row
								  while($row = $result->fetch_assoc()) {
									
									echo "Year: " . $row["year"]. "<br>";
									echo "Chassis Number: " . $row["chassis_number"]. "<br>";
									echo "Color: " . $row["color"]. "<br>";
									echo "Mileage: " . $row["Mileage"]. " kmpl". "<br>";
									echo "Engine Capacity: " . $row["Engine_capacity"]. " CC". "<br>";
									
									echo "Max Power: " . $row["Max_power"]. " kW (hp)". "<br>";
									echo "Max Torque: " . $row["Max_torque"]. " Nm (lb-ft)". "<br>";
									echo "Number of Cylinder: " . $row["Number_of_cylinder"].  "<br>";
									echo "Gear Box: " . $row["Gear_box"]. "<br>";
									echo "Fuel Type: " . $row["Fuel_type"]. "<br>";
									echo "Fuel Tank Capacity: " . $row["Fuel_tank_capacity"]. " Liter". "<br>";
									
									echo "Seating Capacity: " . $row["Seating_capacity"]. "<br>";
									echo "Transmission Type: " . $row["Transmission_type"]. "<br>";
									echo "Wheel Base: " . $row["Wheel_base"]. " mm". "<br>";
									echo "Curb Weight: " . $row["Curb_weight"]. " Kg". "<br>";
									echo "Number of Doors: " . $row["Number_of_doors"]. "<br>";
									echo "ABS: " . $row["ABS"]. "<br>";
									echo "Power Steering: " . $row["Power_steering"]. "<br>";
									echo "Power Windows: " . $row["Power_windows"]. "<br>";
									echo "Cruise Control: " . $row["Cruise_control"]. "<br>";
									echo "Keyless Entry: " . $row["Keyless_entry"]. "<br>";
									
									echo "Air Bag: " . $row["Air_bag"]. "<br>";
									echo "Adjustable Seat: " . $row["Adjustable_seat"]. "<br>";
									echo "360 View Camera: " . $row["A_360_view_camera"]. "<br>";
									echo "Radio: " . $row["radio"]. "<br>";
									echo "Bluetooth: " . $row["bluetooth"]. "<br>";
									echo "WiFi Connectivity: " . $row["wifi_connectivity"]. "<br>";
									echo "USB Input: " . $row["USB_input"]. "<br>";
									echo "Starting price: " . $row["price"]. " Taka". "<br>";
									echo " ". "<br>";
									echo "------------------------------------------------------------------------------ ". "<br>";
									echo " ". "<br>";
								  }
								} else {
								  echo "No Cars Found";
								}
								$conn->close();
								?>
                   

					</div>
					
				
			</div>	
			   
		</div>
	</div>
</div>




<br><br>
<div class="footer">
	<div class="wrap">
	   <div class="footer-top">			
					
				
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
					
						<fieldset>
						<h3>Get in touch</h3>
						<ul>
							
							<li><a href="#" style="opacity: 1;"><img src="images/facebook_icon.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/whatsapp_icon.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/youtube_icon.png" alt=""></a></li>
						</ul>
						<p>Phone: +1 111-111-1111</p>
						<span>E-mail: support@carbazar.com</span>
						</fieldset>
					</div>
				</div>
				
				<div class="clear"></div>
		</div>
	</div>
</div>

</body>
</html>

    	
    	
            