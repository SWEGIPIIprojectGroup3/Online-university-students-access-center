<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php"><img src="../assets/img/logo.jpg"/></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php">Home</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                     
                     
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                     <li> <a class="nav-link scrollto" href="#features">services</a></li>
                      
                       <li><a href="public/Laundryfinal/filemanagement.php">Info</a></li>
                
                       <?php if(isset($_SESSION['auth_user'])): ?>
                
  <div class="dropdown">
    <button class="dropbtn"><img class="prof" src="../assets/img/<?=$_SESSION['auth_user']['profile'] ?>" />
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