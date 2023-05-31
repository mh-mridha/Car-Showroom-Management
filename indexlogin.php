
<?php
    session_start();

if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
	header("location: register.php");
}
?>






<!DOCTYPE HTML>
<html>
<head>
<title>User Account</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
</head>

<body background="images/bg-2.jpg";>




<div class="header">	
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="indexlogin.php" title="Car Bazar"><img src="images/logo.png" alt="" style="width:250px; height: 80px;"></a>
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
			</div>
			<img src="images/interval.png" alt="" style ="width:1330px; height: 195px;">
						
		</div>	
		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>








<div class="main-content">
	<div class="wrap">
		<div class="main-box">
		   <div class="box_wrapper"><h1 style="color:#27ae60;" align="center">Welcome to Your Account!</h1></div>
					
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
        
        
        
 
        
        
        
        
        
        
        
        
        
        

    	
    	
            