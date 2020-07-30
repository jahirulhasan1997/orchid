 <<?php 
   
    session_start();  
    $db = mysqli_connect("localhost:3307","root","jahirul@1997","authentication");

     if (isset($_GET['addcart'])) { 

      if (isset($_SESSION['user'])) {

        $p_id = $_GET['addcart'];

      #  $MAC = exec('getmac'); 
      #  $MAC = strtok($MAC, ' ');

        $p_add = $_SESSION['user'];
        $p_size = $_POST['pro_size'];
        $p_qty = $_POST['pro_qty'];
        $p_price = $_SESSION['price'];

        
       ##     $result_query = mysqli_query($db , $check);
            
              $query = "INSERT INTO cart(p_id,ip_add,p_qty,p_size,p_price) VALUES ('$p_id','$p_add','$p_qty','$p_size','$p_price');";
              $run_query = mysqli_query($db , $query);
              echo '<script>alert("ADDED TO CART");</script>';
              echo "<script>location.href='index1.php';</script>";
            }
          

          else{
            echo "<script> location.href ='loggedin.php'</script>";
          }

        }
     #   }
                 
    


 if (isset($_GET['pro_id']))
     {
      $pro_id = $_GET['pro_id'];
      $new_sql = "SELECT * FROM `products` WHERE id='$pro_id'";
      $result = mysqli_query($db,$new_sql);
      $num = mysqli_num_rows($result);
      $detail = mysqli_fetch_array($result);
      $_SESSION['price'] = $detail['price'];
     }     
 ?>
   


 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		
 	</title>

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
<style>
.mySlides {display:none;}
</style>


 </head>
 <body class="bg-light">
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
     
    

    <div>              
                
   <div class="container">
    <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">
            
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="<?php echo $detail['image'] ;?>" class="img-fluid"></div>
              
            </div>
            
            
          </div>
          <div class="details col-md-6">
            <h3 class="product-title"><?php echo $detail['name'] ;?></h3>
            <div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <span class="review-no">41 reviews</span>
            </div>
            <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
           
            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
  
          
         <form class="form-horizontal" action="details.php?addcart=<?php echo $detail['id']; ?>" method="POST">
           <div class="form-group">
                  <h4 class="price" name="pro_price"> price: INR <?php echo $detail['price'] ;?></h4>
                  <label class="col-sm-3 control-label">SIZE :</label>
                 <div class="col-sm-5"> 
                  <select name="pro_size" class="form-control" id="sel1">
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                  </select>
                 </div> 
           </div>
            <div class="form-group">
                  <label class="col-sm-3 control-label">QUANTITY :</label>
                 <div class="col-sm-5"> 
                  <select name="pro_qty" class="form-control" id="sel1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  </select>
                 </div> 
           </div>

            <div class="btn-group btn-group-justified button1">
             
             <button type="submit" class="btn btn-primary">Add to cart</button>
             <button type="submit" class="btn btn-success">BUY NOw</button>

              
              
              
            </div>
          
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

    			

    		
    
    </section>

 </body>

 </html>