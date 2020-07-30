<<?php 
session_start();

$db =mysqli_connect("localhost:3307" ,"root" , "jahirul@1997" , "authentication" );

if(isset($_POST['submit'])){

    $Username = mysqli_real_escape_string($db,$_POST['username'] );
	$Email    = mysqli_real_escape_string($db,$_POST['email'] );
	$Password = mysqli_real_escape_string($db,$_POST['password']);
	$Password2 = mysqli_real_escape_string($db,$_POST['confirm_password']);


	if($Password== $Password2)
	{
		session_start();
		//$Password =md5($Password);
		$sql = "INSERT INTO users(username,email,password) VALUES('$Username' , '$Email' ,'$Password')";
        mysqli_query($db, $sql);
        $_SESSION['message'] = "succesfully signed up" ;
        

	}
	else{
		$_SESSION['message'] ="Password do not match !";
	}
}



 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script type="text/javascript" src="extent.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="signup-form">
    <form action="confirmation.php" method="post" class="form-horizontal">
		<div class="col-xs-8 col-xs-offset-4">
			<h2>Sign Up</h2>
		</div>		
        <div class="form-group">
			<label class="control-label col-xs-4">Username</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="username" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">Email Address</label>
			<div class="col-xs-8">
                <input type="email" class="form-control" name="email" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">Password</label>
			<div class="col-xs-8">
                <input type="password" class="form-control" name="password" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">Confirm Password</label>
			<div class="col-xs-8">
                <input type="password" class="form-control" name="confirm_password" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<div class="col-xs-8 col-xs-offset-4">
				<p><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
				<button type="submit" class="btn btn-primary btn-lg" name="submit">Sign Up</button>
			</div>  
		</div>		      
    </form>
	<div class="text-center">Already have an account? <a href="#">Login here</a></div>
</div>


</body>
</html>