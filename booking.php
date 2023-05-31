<?php 
session_start();
if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}


$db=mysqli_connect("localhost","root","","car_showroom");

// REGISTER USER
if(isset($_POST['book'])) 
{   // receive all input values from the form
    $cmodel = $_POST['model'];
	$chassis_number = $_POST['chassis_number'];
    $user = $_SESSION["s_name"];

   $getmodelno= mysqli_query($db, "SELECT model from model where name = '".$cmodel."'");
   $getchassis= mysqli_query($db, "SELECT chassis_number from car where chassis_number = '".$chassis_number."'");
    $numrows1 =mysqli_num_rows($getmodelno);
	$numrows4 =mysqli_num_rows($getchassis);
	if($numrows1 !=0 && $numrows4 !=0)
	{
        while($row1=mysqli_fetch_assoc($getmodelno))
        {
            $dbmodelno=$row1['model'];
	    }
    }
    
    $checkcar= mysqli_query($db, "SELECT * from car where model = '".$dbmodelno."'");
    $numrows3 =mysqli_num_rows($checkcar);
   
    if($numrows3 !=0)
    {
              $getuserid= mysqli_query($db, "SELECT c_id from customer where name = '".$user."'");
                $numrows2 =mysqli_num_rows($getuserid);
                if($numrows2 !=0)
                {
                    while($row2=mysqli_fetch_assoc($getuserid))
                    {
                        $dbuserid=$row2['c_id'];
                    }
                }
				$carupdate = " DELETE from car where chassis_number = '".$chassis_number."' LIMIT 1 ";
				mysqli_query($db, $carupdate);
                $orderupdate = " INSERT into sale2 (customer_id,carmodel,chassis_number) VALUES ('$dbuserid', '$dbmodelno', '$chassis_number')";
				
                 
                
                mysqli_query($db, $orderupdate);
            $message = "Booking succesfull! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
       $message = "Oops ! The car you are searching for, is currently not available. ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }	
}
?>






<!DOCTYPE HTML>
<html>
<head>
<title>Book a car</title>

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
			 <a href="booking.php" title="Car Bazar"><img src="images/logo.png" alt="" style ="width:250px; height: 80px;" ></a>
		 </div>
		 
		 
		 <div class="cart">
			
           <div>
             <h3> Welcome <?=$_SESSION['s_name'];?> !! </h3>
		 </div>
            
		    <div class="menu-main">
		    
			   <ul class="dc_css3_menu">
					 <li class="active"><a href="indexlogin.php" title="Car Bazar Home page">Home</a></li>
                     <li><a href="services.php" title="See car brands">Brands</a></li>
                     <li><a href="booking.php" title="Book a car">Book</a></li>
                     <li><a href="orders.php" title="See your orders">Orders</a></li>
                     <li><a href="logout.php">Logout</a></li>
                     
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
		<div class="page-not-found">
			<div class="text-center">
          <h2>BOOK YOUR CAR !
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
          
        <form class="text-center" action="booking.php" method="post" >
                    
           <div>
               <label>Select Car Model Name</label><br>
               
              <select name = "model" style="width:575px; height: 40px;" >
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
               <label>Select Chassis Number</label>
      <input type="text" class="form-control transparent-input" size="50" name="chassis_number">
             </div>
             
             <div><br>
                <button type="submit" name="book" class="btn btn-warning" value="book">Book the car</button>
             </div>
             
         </form>     
          </div>
          
         
          
            <div class="col-md-3"></div>
        
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






        
        
       
    	
    	
            