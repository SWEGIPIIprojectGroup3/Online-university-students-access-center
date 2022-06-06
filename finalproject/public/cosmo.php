<?php
// Include functions and connect to the database using PDO MySQL
session_start();
include '../config/auth/function.php';
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
  <link rel="stylesheet" type="text/css" href="../assets/css/Subpage.css">
 
</head>

<body>

<?php include '../inc/navbar.php'; ?>
  

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>Hewi Cosmotics</h1>
      <h2>We are here to serve you</h2>
      <div class="d-flex">
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->
<!-- end of categories section -->

<!-- all categories -->
<section id="features" class="features">
<div class="container" data-aos="fade-up">
<div class="categories">
    <div class="title-container">
        <h1 id="title">Cosmotics</h1>
        <button type="button" id="item-btn1"  onclick="displayItem1()">View All</button>
    </div>
    <?php 
   $stmt = $pdo->prepare('SELECT * FROM product');
   $stmt->execute();
   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   ?>
    <div class="card">
  <?php  foreach ($result as $product): ?>
    
             <?php if($product["productCategory"]=="cosmotics"){?>
            
            <div class="item-container" >
            <div class="card-item">
            <img src="../assets/img/<?=$product['image']?>" alt="img" id="card-img" name="img"/> 
            <?php  echo '<p id="item-name" name="pname">'.$product['productName'].'</p>';?>
            </div>
            <form method="post" action="Try.php?page=cart">
            <button id="add-to-cart" name="add_to_cart"><i class="fa fa-shopping-cart"></i></button>
            <h3 id="item-price" name="price"><?php echo "Price : ";echo $product['Selling_Price']." Birr";?></h3>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type=number name="quantity" value="1" min="1" max="<?=$product['quantity']?>" class="form-control"/>
            </form>  
            </div>
             <?php } elseif($product["productCategory"]=="cosmotics1"){?>
            <div class="item-hidden1">
            <div class="card-item">
            <img src="../assets/img/<?=$product['image']?>" alt="img" id="card-img" name="img"/> 
            <?php echo '<p id="item-name" name="pname">'.$product['productName'].'</p>';?>
            </div>
            <form method="post" action="Try.php?page=cart"> 
            <button id="add-to-cart" name="add_to_cart"><i class="fa fa-shopping-cart" ></i></button>
            <h3 id="item-price" name="price"><?php echo "Price : ";echo $product['Selling_Price']." Birr";?></h3>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type=number name="quantity" value="1" min="1" max="<?$product['quantity']?>" class="form-control"/>
            </form>
        </div>
        <?php }  endforeach; ?>
  
    </div>

             </div>
</div>
</section>

<section id="features" class="features">
<div class="container" data-aos="fade-up">
<div class="categories">
    <div class="title-container">
        <h1 id="title">Accessories</h1>
        <button type="button" id="item-btn2" onclick="displayItem2()">View All</button>
    </div>
    <?php 
   $stmt = $pdo->prepare('SELECT * FROM product');
   $stmt->execute();
   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   ?>
    <div class="card">
    <?php 
     foreach ($result as $product): ?>

   <?php if($product["productCategory"]=="accessory"){?>
        <div class="item-container">
            <div class="card-item">
            <img src="../assets/img/<?=$product['image']?>" alt="img" id="card-img" name="img"/> 
            <?php echo '<p id="item-name" name="pname">'.$product['productName'].'</p>';?>
            </div>
            <form method="post" action="Try.php?page=cart">
            <button id="add-to-cart" name="add_to_cart"><i class="fa fa-shopping-cart" ></i></button>
            <h3 id="item-price" name="price"><?php echo "Price : ";echo $product['Selling_Price']." Birr";?></h3>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type=number name="quantity" value="1" min="1" max="<?=$product['quantity']?>" class="form-control"/>
            </form>   
        </div>   
       <?php } elseif($product["productCategory"]=="accessory1"){?>
            <div class="item-hidden2">
            <div class="card-item">
            <img src="../assets/img/<?=$product['image']?>" alt="img" id="card-img" name="img"/> 
            <?php echo '<p id="item-name" name="pname">'.$product['productName'].'</p>';?>
            </div>
            <form method="post" action="Try.php?page=cart">
            <button id="add-to-cart" name="add_to_cart"><i class="fa fa-shopping-cart" ></i></button>
            <h3 id="item-price" name="price"><?php echo "Price : ";echo $product['Selling_Price']." Birr";?></h3>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type=number name="quantity" value="1" min="1" max="<?=$product['quantity']?>" class="form-control"/>
            </form>
        </div>
        
       <?php }  endforeach; ?>
 </div>
 </div>
</div>
</section>

<section id="features" class="features">
<div class="container" data-aos="fade-up">
<div class="provider_address">
<div class="address">
                <h3>LOCATION:</h3>
	<p><b>city:</b> Addis Ababa</p>
	<p>VR78+7GW, Kilinto,Feche Roye</p>
	<p><b>Contact Number:</b> +251-14-22-45-49</p>
	</div>
<div class="map">
	<p><b>Google map:</b></p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.0684525498086!2d38.819973514735544!3d8.873219893852669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b77b4ce6e45d5%3A0x22bbab0a4619af95!2sHewi%20Fashion!5e0!3m2!1sam!2set!4v1639931333649!5m2!1sam!2set" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
		</div>
</div>
</section>


<!-- Footer section -->
    <?php
        include '../inc/footer.php';
    ?>
	
<!-- end of footer section -->

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


<!-- details page section -->
<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM product WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
?>

<script src="../assets/js/MC.js"></script>



</body>
</html>
