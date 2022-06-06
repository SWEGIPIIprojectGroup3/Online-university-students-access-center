<?php
include 'auth/database.php';
if(isset($_POST['submit_password']))
{
  $email=$_POST['email'];
  $passs=$_POST['password'];

  $select="UPDATE `users` set `password`='$passs' where `email`='$email'";
  mysqli_query($conn,$select);
  if(mysqli_query($conn,$select)){
    echo "your password is updated";
  }
  else{
    echo "error";
  }
}
mysqli_close($conn);
?>