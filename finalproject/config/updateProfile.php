<?php
	session_start();
	require_once 'auth/database.php';
	if(ISSET($_POST['update'])){
		$image_name = basename($_FILES['profile']['name']);
		$image_temp = $_FILES['profile']['tmp_name'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$current = $_POST['current'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "../assets/img/". $image_name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
	if(isset($_SESSION['auth_user'])){
		$user_id=$_SESSION['auth_user']['user_id'];
		if(in_array($end, $allowed_ext)){
			
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `users` set `firstName` = '$firstname', `lastName` = '$lastname', `profile` = '$image_name' WHERE `user_id` = '$user_id'");
					echo "<script>alert('User account updated!')</script>";
					header("location: ../public/profile.php");
				}
					
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
	else{
		echo "can't connect";
	}
}
?>
