<?php
session_start();
include '../config/auth/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


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
  <link rel="stylesheet" type="text/css" href="../assets/css/ss.css">
 
</head>

<body>

<?php include '../inc/navbar.php'; ?>
  

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
  <section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="kkk">
		<div class="slider">
		<div class="slider-items">
			<div class="mySlides fade">
				<img src="../assets/img/men cloth.jpg" alt="men cloth">
				<div class="caption">Men clothing</div>
	</div>
			<div class="mySlides fade">
				<img src="../assets/img/w1 cloth.jpg" alt="women cloth">
				<div class="caption">Women clothing</div>
			</div>
			<div class="mySlides fade">
				<img src="../assets/img/mens shoes.jpg" alt="men shoes">
				<div class="caption">Men shoes</div>
			</div>
			<div class="mySlides fade">
				<img src="../assets/img/women shoes.jpg" alt="women cloth">
				<div class="caption">Women shoes</div>
			</div>
			<div class="mySlides fade">
				<img src="../assets/img/electronics.jpg" alt="electronics">
				<div class="caption">Electronics</div>
			</div>
			<div class="mySlides fade">
				<img src="../assets/img/statinary1.jpg" alt="Stationaries">
				<div class="caption">Stationaries</div>
			</div>
			<div class="mySlides fade">
				<img src="../assets/img/Beauty.jpg" alt="Beauty products">
				<div class="caption">Beauty products</div>
			</div>
			
		
		<a class="left-slide" onclick="plusSlides(-1)">&#10094;</a>
		<a class="right-slide" onclick="plusSlides(1)">&#10095;</a>
	</div>
	</br>
	<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	<span class="dot" onclick="currentSlide(4)"></span>
	<span class="dot" onclick="currentSlide(5)"></span>
	<span class="dot" onclick="currentSlide(6)"></span>
	<span class="dot" onclick="currentSlide(7)"></span>
</div>
</div>
	<div class="side-bar">
	
	<h3>CATEGORIES</h3>
	<li><a href="menSection.php" id="menu_link">Men's clothes and shoes</a></li></br>
	<li><a href="WomenSection.php" id="menu_link">Women's clothes and shoes</a></li></br>
	<li><a href="Electo&Staion.php" id="menu_link">Electronics and Stationary</a></li></br>
	<li><a href="cosmo.php" id="menu_link">Beauty products& Accesories</a></li>
	
	</ul>
	<ul type="square">
	<h3>OTHER SERVICES</h3>
	<li><p><a href="../Laundryfinal/laundaryfinalss.html" id="menu_link">LOUNDARY</a></p></li>
	<li><p><a href="../BookStore/bookStoreProvider.html" id="menu_link">Book Store</a></p></li>
	</ul>

	</div>
	<div class="providers">
	<ol type="1">
	<h3>Online shopping providers</h3>
	<li><h3>Hewi Fashion >>> <a href="WomenSection.php">visit</a></h3></li>
	<li><h3>Abi Stationary >>> <a href="Electo&Staion.php">visit</a></h3></li>
	<li><h3>3 Brothers Fashion >>> <a href="menSection.php">visit</a></h3></li>
	</ol>
	<p><marquee>If you have any questions about the services you can contact us by email address <a href="">aastuonlineshopping@gmail.com</a> or by our phone number 0946-63-19-09</marquee></p>
	</div>
  </div>
  </div>
 </section><!-- End Features Section -->
  <!--------start footer-------->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>OUSAC</h3>
              <p>
                Koye Fechie <br>
                Addis Ababa<br><br>
                <strong>Phone:</strong> +251945678945<br>
                <strong>Email:</strong> info@OUSAC.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>New & Latest products</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>OUSAC</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

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
  <script src="../assets/js/shopping.js"></script>
</body>

</html>