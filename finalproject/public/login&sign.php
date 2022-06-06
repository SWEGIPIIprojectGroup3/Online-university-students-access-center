<?php
require '../config/auth/database.php';
if(isset($_SESSION['auth'])){
	
	header("Location: index.php");
	exit();
}

$error_firstname="";
$error_lastname="";
$error_username=$mobile_error=$error_email=$error_pass= $error_confirm="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
     
    $first=trim($_POST['firstName']);
    $last=trim($_POST['lastName']);
    $user=trim($_POST['userName']);
    $mobile=trim($_POST['mobile']);
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    $cpassword=trim($_POST['Cpassword']);
    $gender=trim($_POST['gender']);
    if($first==""){
         $error_firstname="Please enter your first name";
        exit();
    }
    elseif(trim($last)==""){
        $error_lastname="Please enter your last name";
        exit();
    }
    elseif($user==""){
        $error_username="Please enter user name";
        
        
        exit();
    }
    elseif(strlen($user)<5){
        $error_username="Username should be atleast five characters.";
        
        
        exit();
    }
    elseif($mobile==""){
        $mobile_error="Please enter phone number";
        
        exit();
    }
    elseif(is_numeric(trim($mobile))==false){
        $mobile_error="Please enter numeric value.";
        
        exit();
    }
    elseif($email==""){
        $error_email="Please enter your email";
       
        exit();
    }
    elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
        $error_email="Please enter valide email, like your@abc.com";
        
        exit();
    }
    elseif($password==""){
        $error_pass= "Please enter password";
        
        
        exit();
    }
    elseif($cpassword==""){
        $error_confirm="Please enter confirm password";
        
        
        exit();
    }
    elseif($password!=$cpassword){
      header("Location: login&sign.php");
        $error_confirm="Password and confirm password does not match";
        
        exit();
    }
    else{
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);
        $sql="INSERT INTO users(firstName, lastName, userName, gender, mobile, email, password) VALUES('$first', '$last','$user','$gender','$mobile','$email','$hashedPass');";
        mysqli_query($conn,$sql);
       header("Location: ../../index.php");
          exit();  

}
}
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
    .error{
      color:red;
    }
  </style>

  <!-- Favicons -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
  <link rel="stylesheet" type="text/css" href="../assets/css/login&sign.css">
 
</head>

<body>
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



<!-- all categories -->
<section id="features" class="features">
<div class="contain">
  <div class="card">
			<div class="inner-box" id="card">
				<div class="card-front">
					<h2>LOGIN</h2>
					<form  method="POST" action="../config/auth/login.php">
						<input type="text" class="input-box" id="username" placeholder="Username" name="userName" required>
						<input type="password" class="input-box" id="password" placeholder="Password"  name="password" required>
						<button type="submit" class="submit-btn" onclick="validate1();">Submit</button>
						<input type="checkbox"><span>Remember Me</span>       
					</form>
					<button type="button" class="btnn" onclick="openSignup();">I'm new Here</button>
					<a href="forget_pass.php" style="color:white">Forgot your password?</a>
				</div>
				<div class="card-back">
					<h2>SIGNUP</h2>
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="input" >
						<input type="text" class="input-box" placeholder="First Name" name="firstName">
            <span class="error"><?php echo $error_firstname;?></span>
          </div>
          <div  class="input">
						<input type="text" class="input-box" placeholder="Last Name" name="lastName">
            <span class="error"><?php echo $error_lastname;?></span>
         </div>
         <div  class="input">
						<input type="text" class="input-box" placeholder="User Name" name="userName">
            <span class="error"><?php echo $error_username;?></span>
         </div>
        <div  class="input">
            <input type="tel" class="input-box" placeholder="Phone number" name="mobile">
            <span class="error"> <?php echo $mobile_error;?></span>

         </div>
         <div  class="input">
						<input type="email" class="input-box" id="email" placeholder="Email" name="email">
            <span class="error"><?php echo $error_email;?></span>
         </div>
         <div  class="input">
						<input type="password" class="input-box" id="password2" placeholder="Enter Password"  name="password">
            <span class="error"><?php echo $error_pass;?></span>
         </div>
         <div  class="input">
            <input type="password" class="input-box" id="password1" placeholder="Confirm Password"  name="Cpassword">
            <span class="error"><?php echo $error_confirm;?></span>
         </div>
            <i style="color:white">Gender:</i>&nbsp;
            <input type="radio" name="gender" value="M"><label for="male">Male</label> &nbsp; &nbsp;
            <input type="radio" name="gender" value="F"><label for="female">Female</label> &nbsp;  &nbsp;
						<button type="submit" class="submit-btn" name="submit" onclick="validate2();">Submit</button>
						<input type="checkbox"><span>Remember Me</span>
                    </form>
					<button type="button" class="btnn" onclick="openLogin();">I have an Account</button>
					
				</div>
			</div>
		</div>
  </div>
</section>

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
	<script>
	
	var card=document.getElementById("card");
	
	function openSignup(){
		card.style.transform="rotateY(-180deg)"
	}
	function openLogin(){
		card.style.transform="rotateY(0deg)"
	}
        
	</script>
</body>
</html>