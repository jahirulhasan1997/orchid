
<?php

   session_start();  
   $db = mysqli_connect("localhost:3307","root","jahirul@1997","authentication");
   
   if (isset($_GET['chk'])) {

     $user = $_SESSION['user'];

     $sqlcheck = "SELECT * FROM cart WHERE ip_add = '$user'";
     $resultcheck = mysqli_query($db,$sqlcheck);
     $num = mysqli_num_rows($resultcheck);
     

     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $phoneno = $_POST['phoneno'];
     $email = $_POST['email'];
     $add1 = $_POST['add1'];     
     $add2 = $_POST['add2'];
     $country = $_POST['country'];
     $state = $_POST['state'];
     $zip = $_POST['zip'];
     $add = $add1." ".$state." ".$country." ".$zip;
    
   while ($details = mysqli_fetch_array($resultcheck)) {
       # code...
   
       $pro_id = $details['p_id'];
       $priced = $details['p_price'];
       $qty = $details['p_qty'];
       $size = $details['p_size'];
       


       $sql = "INSERT INTO `order`(`cus_id`, `first_name`, `last_name`, `phone_number`, `email`, `add_1`, `alt_add`, `product_id`, `total_price`,`total_qty`,`total_size`) VALUES ('1','$firstname','$lastname','$phoneno','$email','$add','$add2','$pro_id','$priced','$qty','$size')";
       $result = mysqli_query($db,$sql);
       $sql_delete = "DELETE FROM cart WHERE p_id = '$pro_id'";
       $run_delete = mysqli_query($db,$sql_delete);


       
   
   }
   echo "<script>alert('Your order placed')</script>";


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

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
     	  <h2 class="navbar-brand">THE ORCHID</h2>
     	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
     	    	  <span class="navbar-toggler-icon"></span>
     	      </button>
     	    
     	         <div class="collapse navbar-collapse text-center " id="collapsenavbar">
     	      	   <ul class="navbar-nav ml-auto mycss2">
     	     		   <li class="navbar-item">
     	     			   <a href="index.html" class="nav-link text-dark">Home</a>
     	     		   </li>
     	     		   <li class="navbar-item">
     	     			   <a href="pakages.html" class="nav-link text-dark">Pakages</a>
     	     		   </li>
     	     	       <li class="navbar-item">
     	     			   <a href="blog.html" class="nav-link text-dark">Blogs</a>
     	     		   </li>
     	     		   <li class="navbar-item">
     	     			   <a href="pages.html" class="nav-link text-dark">About us</a>
     	     		   </li>
     	     		   <li class="navbar-item">
                           <a href="#contactus" class="nav-link text-dark" >Contact Us</a>
     	     		   </li>
     	     	   </ul>
     	     	
     	         </div>  
     	 </div> 
     </nav>
    </section>
     <div class="container" style="max-width: 960px;  
     ">
    <div class="py-5 text-center">
        
        <h2 style="margin-top: 50px; font-weight: bold;">Checkout form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                </li>
            </ul>
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" action="checkout1.php?chk=true" novalidate="" method="post" >
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" >Last name</label>
                        <input type="text" name="lastname" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="phoneno" >Phone Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+91</span>
                        </div>
                        <input type="text" name="phoneno" class="form-control" id="phoneno" placeholder="Enter Your Number" required="">
                        <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="add1" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" name="add2" id="address2" placeholder="Apartment or suite">
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select name="country" class="custom-select d-block w-100" id="country" required="">
                            <option value="">Choose...</option>
                            <option>INDIA</option>
                        </select>
                        <div class="invalid-feedback"> Please select a valid country. </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select name="state" class="custom-select d-block w-100" id="state" required="">
                            <option value="">Choose...</option>
                            <option>ASSAM</option>
                            <option>MANIPUR</option>
                            <option>MIZORAM</option>
                            <option>NAGALAND</option>
                            <option>MAGALAYA</option>
                            <option>ARUNACHAL PRADESH</option>
                        
                        </select>
                        <div class="invalid-feedback"> Please provide a valid state. </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input name="zip" type="text" class="form-control" id="zip" placeholder="" required="">
                        <div class="invalid-feedback"> Zip code required. </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>
                
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

            </form>
        
        
        </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2020 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

  </body>
  </html>