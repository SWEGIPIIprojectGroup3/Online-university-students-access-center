<?php

if(isset($_SESSION['auth'])){
	if(!isset($_SESSION['message'])){
	$_SESSION['message']="you are already logged In";
	}
	header("Location: index.php");
	exit();
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login or Signup Page</title>
	<link rel="stylesheet" href="login&sign.css">
 
</head>
<body>
<div class="sessionbar">
	<?php include('message.php');?>
</div>
<div class="container">
	<div class="card">
			<div class="inner-box" id="card">
                <div class="card-front">
                <h2>Reset Your Password</h2>
                <p>An e-mail will be send to you with instruction on how to reset your password.</p>
                <form action="reset-password.php" method="post">
                   Email: <input type="text" name="email" placeholder="Enter your email here">
                    <button type="submit" name="reset-submit">Receive new password by email</button>
                </form>
</div>
            </div>
	</div>
</div>
</body>
</html>