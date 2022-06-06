<?php
session_start();
require '../config/auth/database.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="../assets/css/profile/bootstrap.css" />
		<link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/provider.css" rel="stylesheet">
		
		<link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <style>
	   #header{
		background: url("../assets/img/profile.png");
    
	   }
	   </style>

		
		
	</head>
<body>
<?php include '../inc/navbar.php'; ?>
  

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>Buy. Explore. use.</h1>
      <h2>Service Provider page</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Welcome To MyProfile page</a>
		</div>
	</nav>
	<section id="features" class="features">
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Service-Provider</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<nav class="navbar navbar-default">
				<div class="container-fluid alert-info">
					<biutton class="navbar-brand" id="calcP">Sold items and Total profit</a>
				</div>
			</nav>
			<button class="btn btn-warning" type="submit" id="edit">Edit Product</button></br>
			<button class="btn btn-warning" type="submit" id="insert">Add product</button>	
			<?php
        if(isset($_SESSION['auth_user'])):
			$user_id=$_SESSION['auth_user']['user_id'];
				$sql="SELECT * FROM users WHERE user_id ='$user_id'";
				$final=mysqli_query($conn, $sql);
				while( $fetch=$final->fetch_assoc()){?>
			<br style="clear:both;"/><br />
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<img src="../assets/img/<?=$fetch['profile']?>" width="250px"/>
				<h4><?php echo $fetch['firstName']." ".$fetch['lastName']?></h4>
				</div>
		</div>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" enctype="multipart/form-data" action="../config/updateProfile.php">
					<div class="modal-header">
						<h3 class="modal-title">Update Profile</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<label>Current Profile</label>
							<img src="../assets/img/<?php echo $fetch['profile'];?>" width="250px"/>
							<hr style="border-top:1px solid #000;"/>
							<div class="form-group">
								<label>New Profile</label>
								<input type="file" class="form-control" name="profile" required="required"/>
								<input type="hidden" class="form-control" name="current" value="<?php echo $fetch['profile'];?>"/>
							</div>
							<div class="form-group">
								<label>Firstname</label>
								<input type="text" class="form-control" name="firstname"/>
							</div>
							<div class="form-group">
								<label>Lastname</label>
								<input type="text" class="form-control" name="lastname"/>
							</div>
						</div>
					</div>
					<br style="clear:both;"/>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>  
	<?php } 
else: 
 echo "can't connect";
endif; ?>
  <div id="profit-page">
  <div class="details">
        <div class="items-detail">
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">
		<?php
		if(isset($_SESSION['auth_user'])){
			if($_SESSION['auth_role']=="S_Provider"){
				$role=$_SESSION['auth_role'];
				$total1=0;
		$stmt="SELECT * FROM product i INNER JOIN users m on m.user_id=i.userId and i.handler='$role'";
		$final=mysqli_query($conn,$stmt);
             if($final->num_rows>0){?>
                 
				<table style="margin-left: 100px;">
					<thead>
               		 <tr>
                    <td colspan="20"><h2>Product</h3></td>
                    <td colspan="20"><h2>profit</h3></td>
					</tr>
					<tbody>
						<?php while( $row=$final->fetch_assoc()){?>
						<tr>
							<td colspan="20"><h4><?php echo $row["productName"];?></h4></td>
							<td colspan="20"><h4><?php $profit1=$row["Selling_Price"]-$row["cost"]; $total1+=$profit1; echo $profit1;?><h4></td>
						</tr>
						<?php }}?>
						</thead>
						</table>
						<div style="margin-left: 150px;"><h2><?php echo "Total Profit: ".$total1; ?></h2></div>		
						<?php }
						 elseif($_SESSION['auth_role']=="L_Provider"){
							$role=$_SESSION['auth_role'];
							$total1=0;
					$stmt="SELECT * FROM product i INNER JOIN users m on m.user_id=i.userId and i.handler='$role'";
					$final=mysqli_query($conn,$stmt);
						 if($final->num_rows>0){?>
							 
							<table style="margin-left: 100px;">
								<thead>
									<tr>
								<td colspan="20"><h2>Product</h3></td>
								<td colspan="20"><h2>profit</h3></td>
								</tr>
								<tbody>
									<?php while( $row=$final->fetch_assoc()){?>
									<tr>
										<td colspan="20"><h4><?php echo $row["productName"];?></h4></td>
										<td colspan="20"><h4><?php $profit1=$row["Selling_Price"]-$row["cost"]; $total1+=$profit1; echo $profit1;?><h4></td>
									</tr>
									<?php }}?>
									</thead>
									</table>
									<div style="margin-left: 150px;"><h2><?php echo "Total Profit: ".$total1; ?></h2></div>	
						<?php }
						elseif($_SESSION['auth_role']=="W_Provider"){
							$role=$_SESSION['auth_role'];
							$total1=0;
					$stmt="SELECT * FROM product i INNER JOIN users m on m.user_id=i.userId and i.handler='$role'";
					$final=mysqli_query($conn,$stmt);
						 if($final->num_rows>0){?>
							 
							<table style="margin-left: 100px;">
								<thead>
									<tr>
								<td colspan="20"><h2>Product</h3></td>
								<td colspan="20"><h2>profit</h3></td>
								</tr>
								<tbody>
									<?php while( $row=$final->fetch_assoc()){?>
									<tr>
										<td colspan="20"><h4><?php echo $row["productName"];?></h4></td>
										<td colspan="20"><h4><?php $profit1=$row["Selling_Price"]-$row["cost"]; $total1+=$profit1; echo $profit1;?><h4></td>
									</tr>
									<?php }}?>
									</thead>
									</table>
									<div style="margin-left: 150px;"><h2><?php echo "Total Profit: ".$total1; ?></h2></div>	
					<?php }} ?>
            
						 
						
						</br></br>
    <button id="back">Back</button>
    </div>
  </section>
  </div>  
  </div>
  </div>
  <div id="edit-page">
  <div class="details">
<div class="items-detail">
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">
	<form method="POST" action="../config/productEdit.php">
                <i style="color:black">Insert Product Name: &nbsp;</i><input type="text"  class="box" name="Proname" required><br><br>
               
                <i style="color:black">Insert cost: </i><input type="text" name="Pcost" class="box"><br><br>
                <i style="color:black">Insert Price: </i><input type="text" name="Pprice" class="box"><br><br>
                <i style="color:black">Insert quantity: </i><input type="number" name="Pquantity" class="box"><br><br>
                
                <button type="submit" id="submit"  name="submit" >Submit</button> &nbsp; &nbsp; &nbsp; &nbsp;
                
        </form>
	
		<button id="back2">Back</button>

	</div>
  </section>
		</div>
  </div>
  </div>
  <div id="details-page">
    <div class="details">
        <div class="items-detail">
 <section id="features" class="features">
    <div class="container" data-aos="fade-up">     
        <form method="POST" action="../config/productReger.php">
                <i style="color:black">Insert Product Name: &nbsp;</i><input type="text"  class="box" name="Pname" required><br><br>
                <i style="color:black">Insert the Provider name: </i><input type="text" class="box" name="providerName"><br><br>
                <i style="color:black">choose the Product Category:</i>
                <input type="radio" name="pcatagory" value="electronics"><label for="electronics">Electronics</label> &nbsp; &nbsp;
                <input type="radio" name="pcatagory" value="cosmotics"><label for="cosmotics">Cosmotics</label> &nbsp;  &nbsp;
                <input type="radio" name="pcatagory" value="women-cloth"><label for="women-cloth">Women Clothes</label> &nbsp;  &nbsp;
                <input type="radio" name="pcatagory" value="stationary"><label for="stationary">Stationary</label>&nbsp;  &nbsp<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;
                <input type="radio" name="pcatagory" value="men-cloth"><label for="men-cloth">Men Clothes</label>&nbsp;  &nbsp;
                <input type="radio" name="pcatagory" value="men-shoes"><label for="men-shoes">Men Shoes</label>&nbsp;  &nbsp;
                <input type="radio" name="pcatagory" value="women-shoes"><label for="women-shoes">Women Shoes</label><br> <br>
                <i style="color:black">Insert cost: </i><input type="text" name="cost" class="box"><br><br>
                <i style="color:black">Insert Price: </i><input type="text" name="price" class="box"><br><br>
                <i style="color:black">Insert quantity: </i><input type="number" name="quantity" class="box"><br><br>
                <i style="color:black">Insert Product Code: </i><input type="text" name="pCode" class="box"><br><br>
                <i style="color:black">Insert Product image: </i><input type="text" name="img" class="box"><br><br>
                <button type="submit" id="submit"  name="submit" >Submit</button> &nbsp; &nbsp; &nbsp; &nbsp;
                <button id="buy">Back</button>
        </form>

        </div>
  </section>
            </div>
        </div>
    </div>



	</section>
<?php
        include '../inc/footer.php';
    ?>
<script src="../assets/js/jquery-3.2.1.min.js"></script>	
<script src="../assets/js/bootstrap.js"></script>	
<script src="../assets/js/main.js"></script>
<script src="../assets/js/provider.js"></script>

<script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
</body>	
</html>