<<?php 
   
   session_start();
   $db = mysqli_connect("localhost:3307","root","jahirul@1997","authentication");


	

     if($_SERVER["REQUEST_METHOD"] == "POST"){
      $username = $_POST['PhoneNo'];  
      $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        //$username = stripcslashes($username);  
       // $password = stripcslashes($password);  
        $Username = mysqli_real_escape_string($db, $username);  
        $Password = mysqli_real_escape_string($db, $password); 
        //$Password =md5($Password); 

   $sql ="SELECT id FROM users WHERE username='$Username' AND password='$Password'";
   $result = mysqli_query($db,$sql);
   $row =  mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count =mysqli_num_rows($result);
   echo ($count);
   echo ($sql);
  
   
   if($count ==1)
   {
   	echo "<script>alert('logged in successfully');</script>";
   	$_SESSION['user'] = $username ;
    echo "<script>location.href='index1.php';</script>";
   
  
   }
   else
   {
   	echo "<h1>password or Username do not matched<h1>";
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 </head>
 <body>
        
     <div class="login">
			<h1 style="font-weight: bold;">Login</h1>
			<form action="loggedin.php" method="post" >
				<label for="username" style="background-color: #b3ffd9;">
					<i class="fas fa-user" ></i>
				</label>
				<input type="text" name="PhoneNo" placeholder="Phone No" id="Phone" required>
				<label for="password" style="background-color: #b3ffd9;">
					<i class="fas fa-lock" ></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login" style="background-color: #b3ffd9; color: black; font-weight: bold; text-transform: uppercase;">
			</form>
      <div>
        <a href="confirmation.php" style="text-align: center; padding-top: 30px;padding-left: 105px; padding-bottom: 30px;  font-weight: bold;">NEW ? SIGN UP NOW !</a>
      </div>
		</div>





 </body>
 </html>