<?php
  session_start();
  if(!empty($_SESSION['email'])){
    echo "<style> .restrict{display:none;} </style>";
    echo "<style> .restrict1{display:inline;} </style>";

  }else{echo "<style> .restrict{display:inline;} </style>";
  echo "<style> .restrict1{display:none;} </style>";
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing page</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&family=Patrick+Hand&family=Poppins:wght@100;200;300;400&family=Smooch&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
  <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.css">
  <link rel="stylesheet" href="Welcome/style1.css">
  <link rel="stylesheet" href="style2.css">
</head>


<body style="font-family: 'Nunito', sans-serif;
font-family: 'Patrick Hand', cursive;">
  
    <div class="land-container">

      <div class="navbar">
        <div class="logo"><img  src="./image (2).png" width="100px"style="margin-left:20%"> </div>
        <nav>
          <ul style="margin-right:30%; margin-top:2% ;font-family: 'Nunito', sans-serif;
                    font-family: 'Patrick Hand', cursive; ">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./product/product.php">Products</a></li>
            <li><a href="./Welcome/ContactUs.html">Contact Us</a></li>
            <li><a href="./Welcome/AboutUs.html">About US</a></li></ul>
          <ul style=" margin-top:2% ;font-family: 'Nunito', sans-serif;
                    font-family: 'Patrick Hand', cursive; ">
            <li class="restrict"><a href="./Login/Login.php">Login</a></li>
            <li class="restrict"><a href="./Regestration/Signup.php">Sign Up</a></li>
            <li class="restrict1"><a href="./Login/logout.php">Logout</a></li>

            <li class="restrict1"><a href="./User/User.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li><a style="" href="./Cart/cart.php"><i class="fas fa-shopping-cart"></i></i></a></li>
          </ul>
          <hr style="width:50%; margin-left: 23%;">
        </nav>

      </div>

      <div class="l-row" style="margin-top: -2%;">
        <div>
          <h1 style="color: darkorange;">Tawasy For ordaring Food Contain <br> The Most Of delicious food.</h1>
          <p>simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s</p>
        </div>
        <div class="l-word">
          <img src="https://media.istockphoto.com/photos/traditional-spanish-seafood-paella-in-the-fry-pan-on-a-white-picture-id1329666820?b=1&k=20&m=1329666820&s=170667a&w=0&h=CCU0IsjYx66F5Am0EDPs7i7vSfR00mIKg7Gc-kRSsDM=" height="500vw">

        </div>
      </div>

    </div>
  </div>

  <!-- slid -->

  <!-- ///////////// -->

  <section>
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="Scriptcontent">

          <div class="slide-container">
            <div class="wgh-slider">
              <input class="wgh-slider-target" type="radio" id="slide-1" name="slider" />
              <input class="wgh-slider-target" type="radio" id="slide-2" name="slider" />
              <input class="wgh-slider-target" type="radio" id="slide-3" name="slider" checked="checked" />
              <input class="wgh-slider-target" type="radio" id="slide-4" name="slider" />
              <input class="wgh-slider-target" type="radio" id="slide-5" name="slider" />
              <div class="wgh-slider__viewport">
                <div class="wgh-slider__viewbox">
                  <div class="wgh-slider__container">
                    <div class="wgh-slider-item">
                      <div class="wgh-slider-item__inner">
                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD_5fsT42_8JRbjWucJxRiTaaBSvt1HaP6D-ReOkUmRJ3oI7i8pbS1lZUXkUAszM1uB2E&usqp=CAU" alt="Pizza"width="100%" height="100%" />
                          <figcaption class="wgh-slider-item-figure__caption"><a
                              href="https://f4.bcbits.com/img/a3905613628_16.jpg">Pizza</a><span>9
                              JD</span></figcaption>
                        </figure>
                        <label class="wgh-slider-item__trigger" for="slide-1" title="Show product 1"></label>
                      </div>
                    </div>
                    <div class="wgh-slider-item">
                      <div class="wgh-slider-item__inner">
                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                            src="https://images-gmi-pmc.edge-generalmills.com/e59f255c-7498-4b84-9c9d-e578bf5d88fc.jpg" alt="beef tacos"  width="100%" height="100%"/>
                          <figcaption class="wgh-slider-item-figure__caption"><a
                              href="https://f4.bcbits.com/img/a3905613628_16.jpg">beef tacos</a><span>15 JD</span>
                          </figcaption>
                        </figure>
                        <label class="wgh-slider-item__trigger" for="slide-2" title="Show product 2"></label>
                      </div>
                    </div>
                    <div class="wgh-slider-item">
                      <div class="wgh-slider-item__inner">
                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                            src="https://www.thegunnysack.com/wp-content/uploads/2020/07/Nachos.jpg" alt="Nachos" width="100%"/>
                          <figcaption class="wgh-slider-item-figure__caption"><a
                              href="https://f4.bcbits.com/img/a3905613628_16.jpg" >Nachos</a><span>8
                              JD</span></figcaption>
                        </figure>
                        <label class="wgh-slider-item__trigger" for="slide-3" title="Show product 3"></label>
                      </div>
                    </div>
                    <div class="wgh-slider-item">
                      <div class="wgh-slider-item__inner">
                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                            src="https://hips.hearstapps.com/del.h-cdn.co/assets/18/02/1515442221-delish-crock-pot-butter-chicken-pinterest-still003.jpg" alt="block building set"  width="100%" height="100%"/>
                          <figcaption class="wgh-slider-item-figure__caption"><a
                              href="https://f4.bcbits.com/img/a3905613628_16.jpg">Panettone </a><span>8
                              JD</span></figcaption>
                        </figure>
                        <label class="wgh-slider-item__trigger" for="slide-4" title="Show product 4"></label>
                      </div>
                    </div>
                    <div class="wgh-slider-item">
                      <div class="wgh-slider-item__inner">
                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                            src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-cranberry-brie-bites-horizontal-3-1540486092.jpg?crop=0.787xw:0.533xh;0.136xw,0.152xh&resize=768:*" alt="Panettone Cookies"  width="100%" height="100%" />
                          <figcaption class="wgh-slider-item-figure__caption"><a
                              href="https://picsum.photos/id/237/480/480">Panettone Cookies</a><span>24 JD</span>
                          </figcaption>
                        </figure>
                        <label class="wgh-slider-item__trigger" for="slide-5" title="Show product 5"></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- partial -->

        </div>
      </div>
    </div>
  </section>

  <!-- end of slider -->

  <div class="category-container">
    <div class="small-container-categort">
      <h2 style="margin-top: 30px;"> Your Shop</h2>
      <div class="l-row-2">
        <div class="l-word-2">

          <a href="./product/product.php"> <img src="https://insanelygoodrecipes.com/wp-content/uploads/2022/03/Korean-Street-Sandwich-with-Egg-Ham-and-Cabbage-in-a-Black-Plate-800x530.jpg" alt="img category" width="500em;">
            <h3 style="text-align:center; color:orangered;">Mama sandwiches</h3>
        </div>
        <div class="l-word-2"></a>

          <a href="./product/product.php"><img src="https://images.deliveryhero.io/image/talabat/restaurants/WhatsApp_Image_2022-_637837376542522398.jpeg?width=750alt="img category">
            <h3 style="text-align:center ; color:darkblue;">Rice kitchen</h3>
          </a>
        </div>
        <div class="l-word-2"></a>
          <a href="./product/product.php"><img src="https://www.wassina.net/ecdata/stores/YFSVMV7478/image/data/products/1646825011_photo_2022-03-09_13-12-37.jpg "alt="img category" width="90%" height="90%"; >
            <h3 style="text-align:center ; color:yellowgreen;" >Mashweat_Grill</h3>
        </div>
        <div class="l-word-2"></a>
          <a href="./product/product.php"><img src="https://kitchen.sayidaty.net/uploads/small/b4/b43fbd9f2b2871c2dd0e04e49e4b412a_w750_h500.jpg" alt="img category"  height="90%">
            <h3 style="text-align:center ; color:palevioletred;">bakery</h3>
        </div></a>

      </div>
    </div>
  </div>
  </div>

  <!-- ///////////////////////////////////discount section///////////////// -->

  
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



</body>

</html>