<?php
include('auth/database.php');
session_start();
if($_SESSION['auth']==true){
	$user_check=$_SESSION['login_user'];
}

$ses_sql=mysqli_query($conn,"select userName,user_id from Users where userName='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['userName'];
$loggedin_id=$row['user_id'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
	echo "Go back";
	header("Location: ../public/login&sign.php");
}
?>