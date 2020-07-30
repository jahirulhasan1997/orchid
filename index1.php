



<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Crimson+Pro">
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
<style>
.mySlides {display:none;}
</style>

</head>
<body style="font-family: 'Crimson Pro', serif ;">
     
     <body class="bg-light">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
  AOS.init();
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/css3-animate-it/1.0.3/js/css3-animate-it.js"></script>

   <section class="bg-light">
   <nav class="navbar fixed-top navbar-expand-md bg-light navbar-light mynavbar" id="navbar1">
     	<div class="container">
     	  <h2 class="navbar-brand" style="font-weight: bold;">THE ORCHID</h2>
     	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
     	    	  <span class="navbar-toggler-icon"></span>
     	      </button>
     	    
     	         <div class="collapse navbar-collapse text-center " id="collapsenavbar">
     	      	   <ul class="navbar-nav ml-auto mycss2">
     	     		   <li class="navbar-item">
     	     			   <a href="index1.php" class="nav-link text-dark">Home</a>
     	     		   </li>
     	     		   <li class="navbar-item">
     	     			   <a href="loggedin.php" class="nav-link text-dark">Log In</a>
     	     		   </li>
     	     	       <li class="navbar-item">
     	     			   <a href="confirmation.php" class="nav-link text-dark">Sign Up</a>
     	     		   </li>
     	     		   <li class="navbar-item">
     	     			   <a href="cart.php" class="nav-link text-dark">My Cart</a>
     	     		   </li>
     	     		   <li class="navbar-item">
                           <a href="about.php" class="nav-link text-dark" >About Us</a>
     	     		   </li>
     	     	   </ul>
     	     	
     	         </div>  
     	 </div>       	


     </nav>
<div>
 <div class="sidenav">

 	<a href="#">Women</a>
 	<a href="#">Mens</a>
 	<a href="#">Kids</a>
 	<a href="#">Electronics</a>
 	
 </div>	
 <div class="container-fluid w3-content w3-section banner" style="max-width:1400px ; padding-top: 50px;">
  <img class="mySlides img-fluid" src="admin area/sliderimg/banner05.jpg" style="width:100%;height: 450px;">
  <img class="mySlides img-fluid" src="admin area/sliderimg/banner08.jpg" style="width:100%;height: 450px;">
  <img class="mySlides img-fluid" src="admin area/sliderimg/banner03.jpg" style="width:100%;height: 450px;">
  <img class="mySlides img-fluid" src="admin area/sliderimg/banner09.jpg" style="width:100%;height: 450px;">
 </div>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

       

</section>

<section class="container">

  <h1 class="text-center" style="margin-top: 70px;margin-bottom: 70px; font-weight: bold;"> New Arrivals</h1>

   <div class="row">
	
<?php

 
  
   $db = mysqli_connect("localhost:3307","root","jahirul@1997","authentication");

   $sql = "SELECT `id`, `name`, `image`, `price`, `discount`, `quantity` FROM `products` ORDER BY id
    ASC";
   
   $result =mysqli_query($db , $sql);
   $num = mysqli_num_rows($result);

   if ($num >0) {
           while ($product=mysqli_fetch_assoc($result)) {
           	$pro_id = $product['id'];
           	?>

           	

         <div class="col-xs-6 col-sm-3 single featured-col">
        <div class="product">
          <a href="details.php?pro_id=<?php echo "$pro_id";?>">

            <img src="<?php echo $product['image']; ?>" class="img-fluid" >
            

          </a>
          
          <div class="text">
            <h3><a href="details.php?pro_id=<?php echo "$pro_id";?>" class="soul"><?php echo $product['name'];?></a></h3>
            <p class="price">INR <?php echo $product['price'];?></p>
            <p class="buttons">
              <a href="details.php?pro_id=<?php echo $pro_id ; ?>" class="btn btn-primary"> 
                   <i class="fa fa-shopping-cart"> Add to cart </i>
              </a>
            </p>
          </div>

        </div>
       </div>

<?php 

  } 
}

?>

</div>

</section>
 <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2020 THE ORCHID</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>




</body>

</html>