<?php
include '../config/auth/database.php';
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
 
  $select="SELECT email,password from users where md5(email)='$email' and md5(password)='$pass'";
  $final=mysqli_query($conn,$select);
  if($final->num_rows>0)
  {
    ?>
    <form method="post" action="../config/submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>