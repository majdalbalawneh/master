<?php  
include_once '../Configration/connection.php';
include_once './function.inc.php';
date_default_timezone_set("Asia/Amman");


session_start();

if(empty($_SESSION['email'])){
  echo "<style> .restrict{display:none;} </style>";
}


include_once '../Configration/connection.php';


if(isset($_GET['add'])){
  $quantity=$_GET['quantity'];
    $add_id = $_GET['add'];
    $id=$_GET['id'];
    $adding="INSERT INTO `cart`(`product_id`, `quantity`) VALUES ('$id','$quantity');";
    mysqli_query($conn,$adding);

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    
     <link rel="stylesheet" href="./product.css">
     <title>Details</title>
</head>
<body>
   <header style="font-family: 'Nunito', sans-serif;
font-family: 'Patrick Hand', cursive;">
<div class="l-header">
    <div class="land-container">
        
   
<div class="navbar">
       <div class="logo"><img src="../image (2).png"width="100px"> </div>
       <nav >
<ul style="margin-right: 5%; font-family: 'Nunito', sans-serif;
font-family: 'Patrick Hand', cursive; color:black;">
 <li><a style="color:black;" href="../index.php">Home</a></li>
 <li><a style="color:black;" href="../product/product.php">Products</a></li>
 <li><a style="color:black;" href="../Welcome/ContactUs.html">Contact Us</a></li>
 <li><a style="color:black;" href="../Welcome/AboutUs.html">About US</a></li>
  <li><a class="restrict" style="color:black;" href="../User/User.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
 <li><a class="restrict" style="color:black;" href="../Cart/cart.php"><i class="fas fa-shopping-cart"></i ></i></a></li>

</ul> <hr style="width:70%; margin-left: 31%;">
       </nav>

    </div>
      
</header>
  

<!-- <header style="font-family: 'Nunito', sans-serif;
font-family: 'Patrick Hand', cursive;">
<div class="l-header">
    <div class="land-container">
        
        <div class="navbar-single pro">
       <div class="logo"><img src="../img/logo_kids.gif"width="100px"> </div>
      
       <nav>
 <ul style="margin-right: 5%; font-family: 'Nunito', sans-serif;
 font-family: 'Patrick Hand', cursive; ">
 <li><a href="../index.html">Home</a></li>
 <li><a href="../product/product.php">Products</a></li>
 <li><a href="../Welcome/ContactUs.html">Contact Us</a></li>
 <li><a href="../Welcome/AboutUs.html">About US</a></li>
 
 <li><a href="../Login/Login.php">Login</a></li>
 <li><a href="../Regestration/Signup.php">Sign Up</a></li>
 <li><a href="../User/User.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
 <li><a href="../Cart/cart.php"><i class="fas fa-shopping-cart"></i ></i></a></li>

 </ul> <hr style="width:70%; margin-left: 31%;">
       </nav>
      
  

 </header> -->

 <br>
 <section class="section-content padding-y ">
    
    <div class="container">

        <!-- ============================ COMPONENT 1 ================================= -->
        <div class="card">
            <div class="row no-gutters">
                <?php
               ##########################################################################
                $product_query = "SELECT * FROM `products` WHERE product_id =$_GET[id]";
                $product_result = mysqli_query($conn, $product_query);
                if (mysqli_num_rows($product_result) > 0) {
                    while ($row = mysqli_fetch_assoc($product_result)) {
                ?>
                        <aside class="col-md-6">
                            <form  method="GET">
                                 <div class="img-big-wrap">
                                        <img src="<?php echo $row['img']; ?>" style= "width:92%; height:80%; margin-left:3%;" >
                                    </div> <!-- img-big-wrap.// -->
                        </aside>
                        <main class="col-md-6 border-left">
                            <article style="padding:3rem ;" class="content-body">
                                <h2 class="title" style= "color:darkred">Product name<?php echo $row['product_name']; ?></h2>

                                <div class="mb-3">
                                    <var class="price h4" style= "color:darkred"> Price: <?php echo $row['price']; ?> $</var>
                                </div>

                                <p><h4>Description:</h4> <?php echo $row['description']; ?></p>
                                <div class="col">
                                    <p class="card-text">Quantity:
                                        <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;">
                                    </p>
                                </div> <!-- col.// -->
                                <br>

                                <input type="hidden" name="hidden_product_name" value="<?php echo $row["product_name"]; ?>">
                                <input type="hidden" name="id" value="<?php echo $row['product_id'] ?>">
                                <input type="hidden" name="hidden_img" value="<?php echo $row["img"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input style="background-color:#e55951 ; height:3rem; font-size:larger;color:white; margin-left:5%;" type="submit" name="add" class="btn btn-block" value="Add to cart">
                            </article> <!-- product-info-aside .// -->
                           
                        <!-- col.// -->
                <?php  }
                } else {
                    echo "<h3>NO DATA FOUND.</h3>";
                } 
                ?>
             </main>
            </form> 
            <br>   <br>   <br>     
    <div class="container" style="margin-top:8% ; margin-left:50%; ">
     <?php

    echo "<form  method='POST' action='".setComments($conn)."'>
        <input type='hidden' value='User Comment :'>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <textarea name='msg'  cols='30' rows='5'></textarea><br>
        <button class='btn btn-info' style='margin-top:2%;'type='submit' name='CommentSubmit' >Comment</button>
    </form>" ;

    GetComments($conn);
    ?>

    </div>
</div>
        </div></div></section>
<!-- ...................................... -->
  <!-- //////////////////footer -->
  </div></div></div></div>
  <div class="container-fluied">
    <!-- Footer -->
    <footer class="text-center text-lg-start "
      style="    background: linear-gradient(to right, #cd90009a,#dd680493, rgb(200 145 35 / 22%));">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">
              Tawasy
              </h6>
              <p style="text-align: justify; ">
              Tawasy has announced that home kitchen is opening , its separate platform that provides The most Tasty food .
            
              </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />


            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
              <p><i class="fas fa-home mr-3"></i> Aqaba , Jordan</p>
              <p><i class="fas fa-envelope mr-3"></i> Tawasy@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> +960 77101000111</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

             
              <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="https://www.facebook.com/111544976944061/posts/ph-0915817799-0915811173-03009190131/111551280276764/ target="_blank" role="button"><i
                  class="fab fa-facebook-f"></i></a>


              <br>
             
              <a class="btn btn-primary btn-floating m-1" style="background-color: #333333"
                href="https://github.com/majdalbalawneh role="button" target="_blank"><i class="fab fa-github"></i></a>
            </div>
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        Tawasy&nbsp; © 2022 Copyright:
        <a href="https://www.orange.jo/ar/pages/default.aspx" target="_blank">Orange.jo</a>

      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>
</body>

</html>