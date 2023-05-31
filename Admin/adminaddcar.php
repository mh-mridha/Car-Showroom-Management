
<?php
    session_start();
if(!isset($_SESSION["admin_name"]))
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Add Car</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body background="images/bg-8.png";>

<div class="header">	
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="admin.php"><img src="images/logo.png" alt="" style="width:250px; height: 80px"></a>
		 </div>
		 
		 
		 <div class="cart">
			
            
		    <div class="menu-main">
		    
			   <ul class="dc_css3_menu">
					 <li class="active"><a href="admin.php" title="Car Bazar admin">Home</a></li>
					 <li > <a href="admincars.php" title="See available cars at showroom">Avaiable Cars</a></li>
                     <li> <a href="adminaddcar.php" title="Add car to showroom"> Add Car</li>
                     <li> <a href="adminorders.php" title="Add car to showroom"> See Orders</li>
                     <li><a href="adminlogout.php">Logout</a></li> 
		     	</ul>
                
			 <div class="clear"></div>
			</div>	
						
		</div>	
		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>
<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>Add a Car
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
          
        <form class="text-center" action="adminaddcar.php" method="post" >
                    
           <div>
              <label>Select Your Car Model</label><br>
               
              <select name = "model" style="width:566px; height: 40px;" >
                <option value = "">|--select car--|</option>
                <option value = ""> </option>
                
                
				<option value = "Land Cruiser Prado">Toyota Land Cruiser Prado</option>
				<option value = "Fortuner"> Toyota Fortuner </option>
				<option value = "Camry"> Toyota Camry </option>
				<option value = "Innova Crysta"> Toyota Innova Crysta </option>
				<option value = "Etios Cross">Toyota Etios Cross</option>
				
				<option value = ""> </option>
				
				<option value = "R8"> Audi R8</option>
				<option value = "Q7"> Audi Q7 </option>
				<option value = "RS7"> Audi RS7 </option>
				<option value = "A8">Audi A8</option>
				<option value = "TT"> Audi TT</option>
				
				<option value = ""> </option>
				
				<option value = "M4"> BMW M4 </option>
				<option value = "X6"> BMW X6 </option>
				<option value = "i8">BMW i8</option>
				<option value = "M3"> BMW M3</option>
				<option value = "X3"> BMW X3 </option>
				
				<option value = ""> </option>
				
				<option value = "Trailblazer"> Chervolet Trailblazer </option>
				<option value = "Cruze">Chervolet Cruze</option>
				<option value = "Sail"> Chervolet Sail</option>
				<option value = "Beat"> Chervolet Beat </option>
				<option value = "Volt"> Chervolet Volt</option>
								
				<option value = ""> </option>
			</select>
             </div>
             
    
             
             
            <div><br/>
               <label>Chassis Number</label>
      <input type="number" class="form-control transparent-input"  name="chasis">
             </div>
             
             
            <div><br/>
               <label>Color</label>
      <input type="text" class="form-control transparent-input" size="50" name="color">
             </div>
			 
			 <div><br/>
               <label>Year</label>
      <input type="text" class="form-control transparent-input" size="50" name="year">
             </div>
			 
			 <div><br/>
               <label>Mileage (kmpl)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Mileage">
             </div>
			 
			 <div><br/>
               <label>Engine capacity (cc)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Engine_capacity">
             </div>
			 
			 <div><br/>
               <label>Max power</label>
      <input type="text" class="form-control transparent-input" size="50" name="Max_power">
             </div>
			 
			 <div><br/>
               <label>Max torque</label>
      <input type="text" class="form-control transparent-input" size="50" name="Max_torque">
             </div>
			 
			  <div><br/>
               <label>Number of cylinder</label>
      <input type="text" class="form-control transparent-input" size="50" name="Number_of_cylinder">
             </div>
			 
			 <div><br/>
               <label>Gear box</label>
      <input type="text" class="form-control transparent-input" size="50" name="Gear_box">
             </div>
			 
			 <div><br/>
               <label>Fuel type</label>
      <input type="text" class="form-control transparent-input" size="50" name="Fuel_type">
             </div>
			 
			 <div><br/>
               <label>Fuel tank capacity (L)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Fuel_tank_capacity">
             </div>
			 
			 <div><br/>
               <label>Seating capacity</label>
      <input type="text" class="form-control transparent-input" size="50" name="Seating_capacity">
             </div>
			 
			 <div><br/>
               <label>Transmission type (Automatic/Manual)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Transmission_type">
             </div>
			 
			 <div><br/>
               <label>Wheel base(mm)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Wheel_base">
             </div>
			 
			 <div><br/>
               <label>Curb weight (kg)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Curb_weight">
             </div>
			 
			 <div><br/>
               <label>Number of doors</label>
      <input type="text" class="form-control transparent-input" size="50" name="Number_of_doors">
             </div>
			 
			 <div><br/>
               <label>ABS (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="ABS">
             </div>
			 
			 <div><br/>
               <label>Power steering (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Power_steering">
             </div>
			 
			 <div><br/>
               <label>Power windows (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Power_windows">
             </div>
			 
			 <div><br/>
               <label>Cruise control (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Cruise_control">
             </div>
			 
			 <div><br/>
               <label>Keyless entry (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Keyless_entry">
             </div>
			 
			 <div><br/>
               <label>Air bag (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Air_bag">
             </div>
			 
			 <div><br/>
               <label>Adjustable seat (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Adjustable_seat">
             </div>
			 
			 <div><br/>
               <label>360 view camera (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="A_360_view_camera">
             </div>
			 
			 <div><br/>
               <label>Radio (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="radio">
             </div>
			 
			 <div><br/>
               <label>Bluetooth (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="bluetooth">
             </div>
			 
			 <div><br/>
               <label>WiFi connectivity (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="wifi_connectivity">
             </div>
			 
			 <div><br/>
               <label>USB input (yes/no)</label>
      <input type="text" class="form-control transparent-input" size="50" name="USB_input">
             </div>
			 
			 <div><br/>
               <label>Price starting at (BDT)</label>
      <input type="text" class="form-control transparent-input" size="50" name="Price">
             </div>
			 
 
            <div><br/>
                <button type="submit" name="add" class="btn btn-warning" value="add" onClick='alert("Car added to the Database")'>Add car</button>
             </div>
         </form>     
          </div>
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>








<div class="footer">
	<div class="wrap">
	   <div class="footer-top">				
				
		</div>
	</div>
</div>		

</body>
</html>





<?php 

$db=mysqli_connect("localhost","root","","car_showroom");

// REGISTER USER
if(isset($_POST['add'])) 
{
    // receive all input values from the form
	
    $cmodel = $_POST['model'];	
    $chasis = $_POST['chasis'];    
	$color = $_POST['color'];
	$year = $_POST['year'];
	$Mileage = $_POST['Mileage'];
	$Engine_capacity = $_POST['Engine_capacity'];
	$Max_power = $_POST['Max_power'];
	
	$Max_torque = $_POST['Max_torque'];
	$Number_of_cylinder = $_POST['Number_of_cylinder'];
	$Gear_box = $_POST['Gear_box'];
	$Fuel_type = $_POST['Fuel_type'];
	$Fuel_tank_capacity = $_POST['Fuel_tank_capacity'];
	$Seating_capacity = $_POST['Seating_capacity'];
	
	$Transmission_type = $_POST['Transmission_type'];
	$Wheel_base = $_POST['Wheel_base'];
	$Curb_weight = $_POST['Curb_weight'];
	$Number_of_doors = $_POST['Number_of_doors'];
	$ABS = $_POST['ABS'];
	
	$Power_steering = $_POST['Power_steering'];
	$Power_windows = $_POST['Power_windows'];
	$Cruise_control = $_POST['Cruise_control'];
	$Keyless_entry = $_POST['Keyless_entry'];
	$Air_bag = $_POST['Air_bag'];
	$Adjustable_seat = $_POST['Adjustable_seat'];
	$A_360_view_camera = $_POST['A_360_view_camera'];
	$radio = $_POST['radio'];
	$bluetooth = $_POST['bluetooth'];
	$wifi_connectivity = $_POST['wifi_connectivity'];
	$USB_input = $_POST['USB_input'];
	$Price = $_POST['Price'];
	
	
	
    
    
    $getmodelno= mysqli_query($db, "SELECT model from model where name = '".$cmodel."'");
                
                $numrows =mysqli_num_rows($getmodelno);
                if($numrows !=0)
                {
                    while($row=mysqli_fetch_assoc($getmodelno))
                    {
                        $dbmodelno=$row['model'];

                    }
                }
    
        $query = "INSERT into car values ('$chasis','$dbmodelno','$color', '$year', '$Mileage', '$Engine_capacity', '$Max_power', '$Max_torque', '$Number_of_cylinder', '$Gear_box', '$Fuel_type',
											'$Fuel_tank_capacity', '$Seating_capacity', '$Transmission_type', '$Wheel_base', '$Curb_weight', '$Number_of_doors', '$ABS', '$Power_steering', '$Power_windows',
											'$Cruise_control', '$Keyless_entry', '$Air_bag', '$Adjustable_seat', '$A_360_view_camera', '$radio', '$bluetooth', '$wifi_connectivity', '$USB_input', '$Price')";
        
		mysqli_query($db, $query);

}

 ?>

    	
    	
            