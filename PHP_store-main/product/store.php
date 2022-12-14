<?php

include_once '../Configration/connection.php';

if (!isset($_GET['id'])) {
  $homepath = '../index.html';
  $prodpath = '../product.php';
  $check= '../checkout/checkout.php' ;
  $shoppath = '../product.php';
  $cartpath = '../Cart/cart.php';
  $uuser= '../User/User.php';
  $about='../Welcome/AboutUs.html';
  $cont='../Welcome/ContactUs.html';
  }else{
    $sign = $_GET['id'];
    $homepath = '../index.html?id=' . $sign;
    $shoppath = '../product.php?id=' . $sign;
    $cartpath = '../Cart/cart.php?id=' . $sign;
    $uuser= '../User/User.php?id=' . $sign ;
    $check= '../checkout/checkout.php?id=' . $sign ;
    $about='../Welcome/AboutUs.html?id='. $sign ;
    $cont='../Welcome/ContactUs.html?id='. $sign ;
  }


if(isset($_GET['add'])){
  $quantity=$_GET['quantity'];
    $add_id = $_GET['add'];
    $id=$_GET['id_prod'];
    $adding="INSERT INTO `cart`(`product_id`, `quantity`) VALUES ('$id','$quantity');";
    mysqli_query($conn,$adding);

 };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&family=Patrick+Hand&family=Poppins:wght@100;200;300;400&family=Smooch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="../style2.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Store</title>
    <style>
        .prod{width: 240px; height: 150px; margin-left: 2%;}
    </style>
</head>
<body>
<div class="navbar">
       <div class="logo"><img src="../image (2).png"width="100px"> </div>
       <nav >
<ul style="margin-right: 5%; font-family: 'Nunito', sans-serif;
font-family: 'Patrick Hand', cursive; color:black;">
 <li><a style="color:black;" href="../index.php">Home</a></li>
 <li><a style="color:black;" href="../product/product.php">Products</a></li>
 <li><a style="color:black;" href="../Welcome/ContactUs.html">Contact Us</a></li>
 <li><a style="color:black;" href="../Welcome/AboutUs.html">About US</a></li>
 
 <li><a style="color:black;" href="../Login/Login.php">Login</a></li>
 <li><a style="color:black;" href="../Regestration/Signup.php">Sign Up</a></li>
 <li><a style="color:black;" href="../User/User.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
 <li><a style="color:black;" href="../Cart/cart.php"><i class="fas fa-shopping-cart"></i ></i></a></li>

</ul> <hr style="width:70%; margin-left: 31%;">
       </nav>

    </div>
    <br><br><br>
<section class="section-content ml">
    <div class="container-fluied">

        <div class="row" style="justify-content: center!important;">
            <main class="col-md-9">

                <div class="row" >
                    <?php

							$limit = 9;

							if (isset($_GET['page'])) {
								$page = $_GET['page'];
							} else {
								$page = 2;
							}
							$offset = ($page - 1) * $limit;
							$record_index = ($page - 1) * $limit;
							$product_query = "SELECT * FROM `products` LIMIT $record_index, $limit ";
							$product_result = mysqli_query($conn, $product_query);

							if (mysqli_num_rows($product_result) > 0) {
								while ($row = mysqli_fetch_assoc($product_result)) {
							?>

                    <div class="col-md-4">  
                        <!-- cart.php?id=<?php echo $row["product_id"]; ?>###################################################### -->
                        <form action="" method="GET">
                            <figure class="card card-product-grid">
                                <div class="img-wrap"  style="text-align:center">
                                    <img class="prod" src="<?php echo $row['img'];?>">
                                    <!-- ################################################### -->
                                    <label><?php 
                                   $cat= "SELECT categories.category_name FROM categories INNER JOIN products
                                   ON products.category_id=categories.category_id;";
                                   $res=mysqli_query($conn, $cat);
                                
                                  ?></label><br>

                                </div> 
                                <figcaption class="info-wrap">
                                    <div class="fix-height"style="text-align:center">
                                        <a href="singleproduct.php?id=<?php echo $row['product_id']; ?>"
                                            class="title"><?php echo $row['product_name']; ?></a>

                                        <div class="price-wrap mt-2">
                                            <span class="price">Price: <?php echo $row['price']; ?> $</span>
                                        </div> 
                                    </div>
                                    <!-- col.// -->
                                    <div class="col" style="text-align:center">
                                        <p class="card-text">Quantity:
                                            <input style="text-align:center" type="number" min="1" max="25" name="quantity" class="form-control"                                               value="1" style="width: 60px;">
                                        </p>
                                    </div> <!-- col.// -->
                                    <br>

                                    <input type="hidden" name="hidden_product_name"
                                        value="<?php echo $row["product_name"]; ?>">
                                            <input type="hidden" name="id_prod" value="<?php echo $row['product_id'] ?>">
                                            
                                            <!-- <input type="hidden" name="id_user"> -->
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                    <!----------------------------- change the color of the buttons 21-5-2022 at 6:22pm ------------------------>
                                    <input type="submit" name="add" class="btn-warning btn-info" value="Add to cart">
                                </figcaption>
                            </figure>
                        </form>
                    </div> <!-- col.// -->

                    <?php  }
			}else{
				echo "<h3>NO DATA FOUND.</h3>";
			} ?>
                </div> <!-- row end.// -->


                <div style="text-align:center" class="col-lg-12">


				<?php
					$dep_query1 = "SELECT * FROM `products`";
					$result1 = mysqli_query($conn, $dep_query1);

					if (mysqli_num_rows($result1) > 0) {

						$total_records = mysqli_num_rows($result1);
						$total_pages = ceil($total_records / $limit);
                        // changing the position of the section product
						echo '  <ul class="pagination" style="justify-content: center!important;">';
						if ($page > 1) {
							echo '<li  class="paginate_button page-item previous" id="zero_config_previous"><a href="store.php?page=' . ($page - 1) . '" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>';
						}
						for ($i = 1; $i < $total_pages; $i++) {
							if ($i == $page) {
								$active = "active";
							} else {
								$active = "";
							}
							echo '<li class="paginate_button page-item ' . $active . '"><a href="store.php?page=' . $i . '" aria-controls="zero_config"  class="page-link">' . $i . '</a></li>';
						}
						if ($total_pages > $page) {
							echo '<li class="paginate_button page-item next" id="zero_config_next"><a href="store.php?page=' . ($page + 1) . '" aria-controls="zero_config" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>';
						}
						echo '</ul>';

					?>

					<!-- <?php } ?> -->
                                                            
                                                              

                </div>

            </main> <!-- col.// -->

        </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->
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
        Tawasy&nbsp; ?? 2022 Copyright:
        <a href="https://www.orange.jo/ar/pages/default.aspx" target="_blank">Orange.jo</a>

      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
<!-- ========================= FOOTER END // ========================= -->


<script>
$("input[type='number']").inputSpinner()
</script>
    
</body>
</html>