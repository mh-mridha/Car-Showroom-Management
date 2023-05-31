
<!DOCTYPE HTML>
<html>
<head>
<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>



<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>User Account Registration</h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
          
        <form class="text-center" action="register.php" method="post" >
                    
           <div>
               <label>Name</label>
      <input type="text" class="form-control transparent-input" size="50" name="username" required>
             </div>
			 
			 <div><br/>
               <label>Phone</label>
      <input type="text" class="form-control transparent-input" size="50" name="userphone" required>
             </div>
			 
			 <div><br/>
               <label>Address</label>
      <input type="text" class="form-control transparent-input" size="50" name="useraddress" required>
             </div>
            
            <div><br/>
               <label>Email</label>
      <input type="text" class="form-control transparent-input" size="50" name="useremail" required>
             </div>
             
 
            <div><br/>
               <label>Password</label>
      <input type="password" class="form-control transparent-input" size="50" name="pass" required>
             </div>
			 
			
 
            <div><br/>
                <button type="submit" name="reg" class="btn btn-warning" value="reg">Registration</button>
             </div>
			 
			 
			 
         </form>     
          </div>
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>







<?php 
$db=mysqli_connect("localhost","root","","car_showroom");

// REGISTER USER
if(isset($_POST['reg'])) 
{
    
    
	// receive all input values from the form
    $username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$password = $_POST['pass'];
    $userphone = $_POST['userphone'];
    $useraddress = $_POST['useraddress'];
    
    if($useremail!='' || $username!=''|| $password!=''|| $userphone!=''|| $useraddress!='' )
    {
       $query = "CALL register('$username','$useremail','$password','$userphone','$useraddress')";
        //fetching dbconnection
		mysqli_query($db, $query);
			header("location:indexlogin.php");
			
        $message = "registration done ! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
		 
		 
      
    }
}


 ?>

    	
    	
            