
<?php
    session_start();
if(!isset($_SESSION["admin_name"]))
{
    header("location: adminlogin.php");
}

?>



<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<body background="images/bg-6.jpg";>


<div class="header">	
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="admin.php" title="Car Bazar"><img src="images/logo.png" alt="" style="width:250px; height: 80px;"></a>
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
			 
			 <img src="images/interval.png" alt="" style ="width:1330px; height: 195px;">
			 
			</div>	
                    
						
		</div>	
        <h1 style="color:#009432;" align="center">Welcome Administrator!</h1>
		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>



</body>
</html>

</body>
</html>
        
    	
    	
            