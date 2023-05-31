
<!DOCTYPE HTML>
<html>
<head>
<title>User Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body background="images/bg-2.jpg";>


<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
		<div class="logo">
			 <a href="indexlogin.php" title="Car Bazar"><img src="images/logo.png" alt="" style="width:250px; height: 80px;"></a>
		 </div>
		<div class="text-center">
          <h2>Sign In
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
        <form class="text-center" action="login.php" method="post" >            
            <div ><br/>
               <label>Email</label>
      <input type="text" class="form-control transparent-input" size="50" name="useremail" required >
             </div>
 
            <div ><br/>
               <label>Password</label>
      <input type="password" class="form-control transparent-input" size="50" name="pass" required >
             </div> 
            <div><br/>
                <button type="submit" class="btn btn-warning" value="login" name="login">Sign in</button>
             </div>
         </form>     
          </div>
          
            <div class="col-md-3"></div>
        
        </div> 
		</div>
	</div>
</div>







<?php
session_start();

if(isset($_POST["login"])){

if(!empty($_POST['useremail']) && !empty($_POST['pass'])) {
    
	$useremail=$_POST['useremail'];
	$pass=$_POST['pass'];
    $db = mysqli_connect("localhost","root","","car_showroom");
    
	$query=mysqli_query($db,"SELECT * FROM customer WHERE email= '".$useremail."' AND pass='".$pass."'");
    
   	$numrows=mysqli_num_rows($query);
    
	if($numrows !=0)
	{
        while($row=mysqli_fetch_assoc($query))
        {
            $dbuseremail=$row['email'];
            $dbpass=$row['pass'];
            $dbusername=$row['name'];    
	    }

        
        if($useremail == $dbuseremail && $pass == $dbpass)
        {

            $_SESSION['s_name']= $dbusername;

            /* Redirect browser */
            header("Location: indexlogin.php");
        }
	} 
    else 
    {
	   $message = "Invalid credentials !";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}

} 
    else {
	echo "All fields are required!";
        }
}
?>


    	
    	
            