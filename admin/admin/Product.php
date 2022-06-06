<?php
session_start();
include('../config/auth/database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<style>
  #hero{
    height:400px;
  }
  </style>
  <!-- Favicons -->
  
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link href="../assets/css/style.css" rel="stylesheet">
  
 
</head>

<body>

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php"><img src="../assets/img/logo.jpg"/></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php">Home</a></li>
                    <li><a href="aboutusneww.html">About Us</a></li>
                     <li> <a href="servics.html">services</a></li>
                     
                      
                       <li><a href="Laundryfinal/filemanagement.php">Info</a></li>
                       <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                
                       <?php if(isset($_SESSION['auth_user'])): ?>
  <div class="dropdown">
    <button class="dropbtn"><?= $_SESSION['auth_user']['user_name'] ;?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../myProfile/index.html" class="dropdown_item">My Profile</a>
      <form action="../config/auth/logout.php" method="POST">
        <button type="submit" name="logout" class="dropdown_item">Logout</button>
      </form>
      
    </div>
  </div>
  <?php else : ?>
  <a href="login&sign.php">Signup</a>
  <a href="login&sign.php">login</a>
  <?php endif; ?>
    
         

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>Buy. Explore. use.</h1>
      <h2>We are here to serve you</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->
            
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">            
    <form method="POST" action="../config/productReger.php">
                <i style="color:black">Insert Product Name: </i><input type="text"  name="Pname" required><br><br>
                <i style="color:black">Insert the Provider name: </i><input type="text" name="providerName"><br><br>
                <i style="color:black">Insert the Product Category:</i>
                <input type="radio" name="pcatagory" value="electronics"><label for="electronics">Electronics</label> &nbsp; &nbsp;
                <input type="radio" name="pcatagory" value="cosmotics"><label for="cosmotics">Cosmotics</label> &nbsp;  &nbsp;
                <input type="radio" name="pcatagory" value="women-cloth"><label for="women-cloth">Women Clothes</label><br>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="pcatagory" value="men-cloth"><label for="men-cloth">Men Clothes</label>&nbsp;  &nbsp;
                <input type="radio" name="pcatagory" value="men-shoes"><label for="men-shoes">Men Shoes</label>&nbsp;  &nbsp;
                <input type="radio" name="pcatagory" value="women-shoes"><label for="women-shoes">Women Shoes</label><br> <br>
                <input type="radio" name="pcatagory" value="stationary"><label for="stationary">Stationary</label>&nbsp;  &nbsp;
                <i style="color:black">Insert cost: </i><input type="text" name="cost"><br><br>
                <i style="color:black">Insert Price: </i><input type="text" name="price"><br><br>
                <i style="color:black">Insert quantity: </i><input type="number" name="quantity"><br><br>
                <i style="color:black">Insert Product Code: </i><input type="text" name="pCode"><br><br>
                <i style="color:black">Insert Product image: </i><input type="text" name="img"><br><br>
                <button type="submit" style="color:black; border-color: black;" name="submit" >Submit</button>
                        </form>
  </div>
  </section>  
            
    <?php
    include '../inc/footer.php';
    ?>
    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/MC.js"></script>
<!-- end of main -->

        </body>
        </html>