
<?php
 session_start();
 $name = $_SESSION['user'];


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

<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>
<body>
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
                   <a href="cart" class="nav-link text-dark">My Cart</a>
                 </li>
                 <li class="navbar-item">
                           <a href="" class="nav-link text-dark" >About Us</a>
                 </li>
               </ul>
            
               </div>  
                 
               <div><h6 style="margin-left: 5px; font-weight: bold;"> Hello <?php  echo $name ; ?></h6></div>
     	 </div>       	


     </nav>
     

     <div class="row">
     	<div class="col-md-2">
     		
     	</div>
     <div class="col-md-7">
     	    
     		<div class="container">
     		<form action="details.php" method="post" enctype="multipart-form-data">
     			<h2  style="font-size: 18px;font-weight: bold;margin-top: 100px; margin-bottom: 20px;">Shopping Cart</h2>

          


     			<div class="table-responsive">          
                         <table class="table">
                          <thead >
                                  <tr>
                                  <th class="Product">Product</th>
                                  <th class="Quantity">Quantity</th>
                                  <th class="Size">Size</th>
                                  <th class="Price">Price</th>
                                  <th class="Delete">Delete</th>
                                  <th class="Sub">Sub Total</th>
                                  </tr>
                          </thead>

                          <?php

                          
                           $db = mysqli_connect("localhost:3307","root","jahirul@1997","authentication");

                           $add = $_SESSION['user'] ;
                           $result_cart  = "SELECT * FROM cart WHERE ip_add ='$add'";
                           $query_run = mysqli_query($db , $result_cart);
                           $nums = mysqli_num_rows($query_run);
                           if ($nums=0) {
                            echo "<script>alert('No items in cart !')</script>";
                            echo "<script>location.href='index1.php';</script>";

                           }
                             # code...
                           
                           else{


                           while ($cart_item = mysqli_fetch_array($query_run)) {

                  
     	                    $id_relate = $cart_item['p_id'] ;
                            $result_product  = "SELECT * FROM products WHERE id ='$id_relate'";
                            $query_find = mysqli_query($db , $result_product);
                             while ($product_item = mysqli_fetch_array($query_find) ) {

                             	?>



                           <tbody class="contnt">
                           <tr >
                                  <td class="product" ><img src="<?php echo $product_item['image']; ?>" style="max-width: 30px; max-height: 40px;"></td>
                                  <td class="Quantity">1</td>
                                  <td class="Size">M</td>
                                  <td class="Price"><?php echo $product_item['price']; ?></td>
                                  <td class="Delete"></td>
                                  <td class="Sub"></td>
                           </tr>
                          </tbody>

          <?php
               }
                    
              }
            }

                        ?>

                         </table>
                      </div>
                      <div class="box-footer">
                      	<div class="pull-left">
                      		<a href="index1.php" class="btn btn-default Shopping">
                      			<i class="fa fa-chevron-left"></i>
                      			Continue Shopping
                      		</a>	
                      	</div>
                      	<div class="pull-right">
                      		<a href="checkout1.php" class="btn btn-primary checkout">
                      			 Checkout<i class="fa fa-chevron-right"></i>
                      			
                      		</a>	
                      	</div>
                      </div>
     		</form>
     	
     		</div>
     	</div>
     	

     </div>
     <div>
   	




    </section>
 <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2019 THE ORCHID</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>


   
</body>
</html>


