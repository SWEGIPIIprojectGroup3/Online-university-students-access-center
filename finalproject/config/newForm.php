<?php 
include_once 'auth/database.php';
if(isset($_POST['submit'])){
$first=$_POST['firstName'];
$last=$_POST['lastName'];
$user=$_POST['userName'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO users(firstName, lastName, userName, mobile, email, password) VALUES('$first', '$last','$user','$mobile','$email','$password');";
mysqli_query($conn,$sql);
header("Location: ../index.php?signup=success");}
else{
    header("Location: newForm.php");
}


?>