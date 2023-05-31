<?php 
session_start();
if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Customer Orders</title>

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
			 <a href="index.html"><img src="images/logo.png" alt="" style="width:250px; height: 80px;"></a>
		 </div>
		 
		 
		 <div class="cart">
			
            
			<div>
             <h3> Welcome <?=$_SESSION['s_name'];?> !! </h3>
		 </div>
			
			
		    <div class="menu-main">
		    
			   <ul class="dc_css3_menu">
					<li class="active"><a href="indexlogin.php">Home</a></li>
                    <li><a href="services.php">Brands</a></li>
                     <li><a href="booking.php">Book</a></li>
                     <li><a href="orders.php">Orders</a></li>
                     <li><a href="logout.php">Logout</a></li>
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
          <h2>Your Order Details
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
         
         
         
          <div class="s">
                 
                 
                  <table class="table table-bordered table-responsive table-striped table-hover table-condensed text-center " >
                    <tr>
                        <th class = "text-center">Sale ID</th>
                        <th class = "text-center">Customer ID</th>
                        <th class = "text-center">Car Model</th>
						<th class = "text-center">Chassis Number</th>
                        <th class = "text-center">Date-Time-of-Book</th>
						
                        
                       </tr>
                              <?php
                                    $db=mysqli_connect("localhost","root","","car_showroom");
                                    $cname = $_SESSION["s_name"];

                                    // to get the customerid from his name  
                                   $getuserid= mysqli_query($db, "SELECT c_id from customer where name = '".$cname."'");
                                    $numrows =mysqli_num_rows($getuserid);
                                    if($numrows !=0)
                                    {
                                        while($row=mysqli_fetch_assoc($getuserid))
                                        {
                                            $dbuserid=$row['c_id'];
                                        }
                                    }
                      
                                    //to get his orders    
                                    $getorders= mysqli_query($db, "SELECT * from sale2 where customer_id = '".$dbuserid."'");
                                    $numrows3 =mysqli_num_rows($getorders);
                                    if($numrows3 !=0)
                                    {
                                        while($row3=mysqli_fetch_assoc($getorders))
                                        {
                                                        $dbsaleid=$row3['sale_id'];
                                                        $dbcustomerid=$row3['customer_id'];
														$dbcustomerchasis=$row3['chassis_number'];
                                                        $carnumber =$row3['carmodel'];
                                                        $date=$row3['ordertime'];
                                                
                                              // get his car model name
                                                $getusercarname = mysqli_query($db, "SELECT name from model where model = '".$carnumber."'");
                                                $numrows2 =mysqli_num_rows($getusercarname);
                                                if($numrows2 !=0)
                                                {
                                                    while($row2=mysqli_fetch_assoc($getusercarname))
                                                    {
                                                        $dbusercarname=$row2['name'];
                                                    }
                                                }

                                                        echo "<tr>" ;
                                                            echo "<td>$dbsaleid</td>";
                                                            echo "<td>$dbcustomerid</td>";
                                                            echo "<td>$dbusercarname</td>";
															echo "<td>$dbcustomerchasis</td>";
                                                            echo "<td>$date</td>";
                                                            echo" </tr>";
                                        }
                                    }
									  else
									  {
										 $message = "You have no orders in your name yet ! !";
										echo "<script type='text/javascript'>alert('$message');</script>";
									  }
                                      
								?>
                   </table>

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






        
        
       
    	
    	
            