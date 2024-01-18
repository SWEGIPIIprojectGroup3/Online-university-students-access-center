<?php
session_start();
include 'rates.php';

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
  <style>
   .form-popup {
  display: none;
  position:fixed;
  bottom: 0;
  border: 3px solid #f1f1f1;
  margin:auto 0;
  background-color:grey;
}

/* Add styles to the form container */
.form-container {

  max-width: 50%;
  max-height: 500px;
  padding: 10px;
  background-color: white;
  margin:auto;
  background-color:grey;
}
.btncancel{
  color:red;
}
  
 </style>
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
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
  <link rel="stylesheet" href="../assets/css/3c-products.css"/>
   <link rel="stylesheet" href="../assets/css/style2.css"/>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include '../inc/navbar.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>LAUNDRY PAGE</h1>
      <h2>We are here to serve you</h2>
      <div class="d-flex">
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <?php
                
                              $sql = "SELECT * FROM users";
                          if ($result=mysqli_query($conn,$sql)) {
                                $rowcoun=mysqli_num_rows($result);
                             
               } ?>
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo "$rowcoun" ?>" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Happy Clients</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                  <?php
                

               $sql = "SELECT * FROM laundarypay";
           if ($result=mysqli_query($conn,$sql)) {
                 $rowcount=mysqli_num_rows($result);
              
}
?>
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo "$rowcount"?>" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Appointments</p>
                </div>
              </div>

              

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-award"></i>
                  <?php
                

               $sql = "SELECT * FROM laundaryrating";
           if ($result=mysqli_query($conn,$sql)) {
                 $rowcount2=mysqli_num_rows($result);
              
}
?>
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo "$rowcount2"?>" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Ratings</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="../assets/img/about.jpg" class="img-fluid" alt="">
            <a href="" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>WE MADE THIS WEBSITE FOR STUDENTS</h3>
            <p class="fst-italic">
      
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Easy to use</li>
              <li><i class="bx bx-check-double"></i> Convienent</li>
              <li><i class="bx bx-check-double"></i> Many Services</li>
             
            </ul>
            <p>
             
          </div>

        </div>

      </div>

      
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->

        <section id="about-boxes" class="about-boxes">
            <div class="container" data-aos="fade-up">
      
              <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="card">
                    <img src="../assets/img/laundry3.jpg" class="card-img-top" alt="...">
                    <div class="card-icon">
                      <i class="ri-brush-4-line"></i>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><a href="">YKUNENI LAUNDRY SERVICE</a></h5>
                      <p class="card-text">NEAR Subcity-TuluDimetu</p>
                      <h2>DETAILS</h2>
                      <ul>
                        <li>city- Addis Ababa</li>
                        <li>Subcity-TuluDimetu</li>
                        <li>Block-10</li>
                        <li>Contact Number +251918524672</li>
                        <li>Google map</li>
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.094427640764!2d38.82117041522454!3d8.870801293630674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b77f6f70e69a9%3A0xeef27b1452845c87!2sTulu%20Dimtu%20Condominiums!5e0!3m2!1sen!2set!4v1639849760380!5m2!1sen!2set" 
             width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </ul>
                   
                  
                    <h4>Availability</h4>
                    <h4>Opens at 9:00 AM</h4>
                    <h4>Appointment Form</h4>
                   <a href="Laundryform.html">BOOK AN Appointment</a> 

                   <p><a href="../forms/form1.php">CHANGE AN APPOINTMENT</a> </p>
                   </ul>
             
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="card">
                    <img src="../assets/img/lau2.jpg" class="card-img-top" alt="...">
                    <div class="card-icon">
                      <i class="ri-calendar-check-line"></i>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><a href="">RICH LAUNDRY SERVICE</a></h5>
                      <p class="card-text">NEAR Subcity-Kaliti </p>
                      <h4>DETAILS</h4>
                      <li>city- Addis Ababa</li>
    <li>Subcity-Kaliti</li>
    <li>Block-05</li>
    <li>Contact Number +251912008013</li>
     <li>Google map</li>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.6754354885175!2d38.808450114786574!3d9.001982693539608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85ec0f4ab041%3A0xeee9354bb40f8eeb!2sRich%20laundry!5e0!3m2!1sen!2set!4v1639845073317!5m2!1sen!2set" 
width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</ul>

<h4>Availability</h4>
<h4>Opens at 9:00 AM</h4>
<h4>Appointment Form</h4>
<a href="Laundryform.html">BOOK AN APPOINTMENT</a>
<p><a href="../forms/form1.php">CHANGE AN APPOINTMENT</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="card">
                    <img src="../assets/img/lau2.jpg" class="card-img-top" alt="...">
                    <div class="card-icon">
                      <i class="ri-calendar-check-line"></i>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><a href="">MAGIC LAUNDRY SERVICE</a></h5>
                      <p class="card-text">NEAR Subcity-Kaliti </p>
                      <h4>DETAILS</h4>
                      <li>city- Addis Ababa</li>
    <li>Subcity-Kaliti</li>
    <li>Block-05</li>
    <li>Contact Number +251912008013</li>
     <li>Google map</li>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.6754354885175!2d38.808450114786574!3d9.001982693539608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85ec0f4ab041%3A0xeee9354bb40f8eeb!2sRich%20laundry!5e0!3m2!1sen!2set!4v1639845073317!5m2!1sen!2set" 
width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</ul>

<h4>Availability</h4>
<h4>Opens at 9:00 AM</h4>
<h4>Appointment Form</h4>
<a href="Laundryform.html">BOOK AN APPOINTMENT</a>
<p><a href="../forms/form1.php">CHANGE AN APPOINTMENT</a></p>
                    </div>
                  </div>
                </div>
                
               
                   
                  </div>
                </div>
              </div>
      
            </div>
          </section><!-- End About Boxes Section -->
      
          
        

        
         
         
   

    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-laptop"></i>
              <h4><a href="#">Online</a></h4>
              <p>Our website can be used in any mobile and personal computer with network connection</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Available 24/7</a></h4>
            
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Accessible to all</a></h4>
              
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Fast Delivery</a></h4>
             
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Including main services</a></h4>
              
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-clock"></i>
              <h4><a href="#">Fast Service</a></h4>
             
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
        <!-- ======= Rate US Section ======= -->
        <div class="card-body">
          <h5 class="card-title"><a href="">Have a comment?</a></h5>
          <p class="card-text">Feel free to give us your opinion </p>
         
         

    <!-- (E) HIDDEN FORM TO UPDATE STAR RATING -->
    <form id="ninForm" method="post" target="_self">
      <input id="ninPdt" type="text" name="pid"/>
      <input id="ninStar" type="text" name="stars"/>
    </form>



     
            
          </div>
         
  
             

   
     <!-- ======= end Rate US Section ======= -->

   
    

  </main><!-- End #main -->
  
  <!-- ======= Footer ======= -->
  
   <?php include('../inc/footer.php');?>


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}  


</script>
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
  <script language="javascript" type="text/javascript"></script>
  <script src="../assets/js/3b-products.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>


</body>

</html>