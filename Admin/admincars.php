<?php 
session_start();
if(!isset($_SESSION["admin_name"]))
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Avaiable Cars</title>

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
					<li class="active"><a href="http://localhost/Car_Showroom/Admin/" title="Car Bazar admin">Home</a></li>
					 <li > <a href="admincars.php" title="See available cars at showroom">Avaiable Cars</a></li>
                     <li> <a href="adminaddcar.php" title="Add car to showroom"> Add Car</a></li>
                     <li> <a href="adminorders.php" title="See order list">See Orders</a></li>
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
          <h2>Available Cars at CAR BAZAR
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>

         
          <div class="s">
                 
                 
                  <table class="table table-bordered table-responsive table-striped table-hover table-condensed text-center " >
        
                    <tr>
                        <th class = "text-center">Car Model No</th>
                        <th class = "text-center">Car Name</th>
                        <th class = "text-center">Number of Available Cars</th>
						 
                     </tr>
                              <?php
                                 $db=mysqli_connect("localhost","root","","car_showroom");
            
                                    //to get his orders     
                                    $getcars= mysqli_query($db, "SELECT * from model");
                                    $numrows3 =mysqli_num_rows($getcars);
                                    if($numrows3 !=0)
                                    {
                                        while($row3=mysqli_fetch_assoc($getcars))
                                        {
                                                        $dbmodelno=$row3['model'];
                                                         $dbmodelname=$row3['name'];
                                                        
                                                    // get his car model name
                                                $getcarnumbers = mysqli_query($db, "SELECT * from car where model = '".$dbmodelno."'");
                                                $numrows2 =mysqli_num_rows($getcarnumbers);
											
                                                            echo "<tr>" ;
                                                            echo "<td>$dbmodelno</td>";
                                                            echo "<td>$dbmodelname</td>";
															echo "<td>$numrows2</td>";
                                                            echo" </tr>";
                                        }
                                    }
                                      
                            ?>
                   </table>

          </div>
            <div class="col-md-3"></div>
			
			
			<br>
		    <center>
				<p>-------------------------------------------------------------------------------------------------------</p>
				<h4>Visit<a href="admin_services.php" title="Add car to showroom"> For detailed information</a></h4>
			</center>

		    <center>
				<p>-------------------------------------------------------------------------------------------------------------------------------------------</p>
			</center>
			<br>
			<br>
		
        </div>   
		</div>
	</div>
</div>

	

</body>
</html>






        
        
       
    	
    	
            