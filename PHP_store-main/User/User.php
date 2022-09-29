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
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&family=Patrick+Hand&family=Poppins:wght@100;200;300;400&family=Smooch&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Welcome/style1.css">
    <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="../style2.css">

    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<div class="navbar">
       <div class="logo"><img src="../image (2).png" width="50px"style="margin-left:20%"> </div>
       <nav >
       <ul style="margin-right:30%; margin-top:2% ;font-family: 'Nunito', sans-serif;
                    font-family: 'Patrick Hand', cursive; ">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../product/product.php">Products</a></li>
            <li><a href="../Welcome/ContactUs.html">Contact Us</a></li>
            <li><a href="../Welcome/AboutUs.html">About US</a></li></ul>
          <ul style=" margin-top:2% ;font-family: 'Nunito', sans-serif;
                    font-family: 'Patrick Hand', cursive; ">
            <li class="restrict"><a href="../Login/Login.php">Login</a></li>
            <li class="restrict"><a href="../Regestration/Signup.php">Sign Up</a></li>
            <li class="restrict1"><a href="../Login/logout.php">Logout</a></li>

            <li class="restrict1"><a href="../User/User.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li><a style="" href="../Cart/cart.php"><i class="fas fa-shopping-cart"></i></i></a></li>
          </ul>
          <hr style="width:50%; margin-left: 23%;">
        </nav>

    
     </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-bottom:5%">
                    <div class="mt-5 mb-5 clearfix">
                        <h1 style="text-align:center">User Information</h1>
                    </div>
                    <?php
                
                    // Include config file
                    include_once '../Configration/connection.php';
                    $email= $_SESSION['email'];
                    // Attempt select query execution
                    $sql ="SELECT * FROM register WHERE  Email='$email'; ";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<div class="table-responsive"> ';
                            echo '<table class="table  table-warning table-bordered">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>First Name</th>";
                                       
                                        echo "<th>Family Name</th>";
                                        echo "<th>Phone Number</th>";
                                      
                                        echo "<th>Email</th>";
                                        echo "<th>Password</th>";
                                        echo "<th>Confirm Password</th>";
                                        echo "<th>Edit </th>";

                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){

                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['First_Name'] . "</td>";
                                 
                                        echo "<td>" . $row['Last_Name'] . "</td>";
                                        echo "<td>" . $row['Phone_Num'] . "</td>";
                                      
                                        echo "<td>" . $row['Email'] . "</td>";
                                        echo "<td>" . $row['Password'] . "</td>";
                                        echo "<td>" . $row['con_Password'] . "</td>";

                                        echo "<td>";
                                            echo '<a href="Update_info.php?id='. $row['id'] .'" style="text_align:center"class="mr-3" title="Update Record" data-toggle="tooltip">&#x270E;</a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
            </div> 
                </div>
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