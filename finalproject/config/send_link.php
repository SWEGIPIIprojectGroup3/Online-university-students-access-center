<?php
include 'auth/database.php';
use PHPmailer\PHPmailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';
if(isset($_POST['submit_email']) && $_POST['email'])
{
  require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
  $email=$_POST['email'];
  $select="SELECT email,password from users where email='$email' LIMIT 1";
  $final=mysqli_query($conn,$select);
  if($final->num_rows>0){
    while( $row=$final->fetch_assoc()){
      $email=md5($row['email']);
      $pass=md5($row['password']);
    }
    $link="<a href='http://localhost/public/reset_pass.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
   
    $mail = new PHPMailer(true);
    try{
    $mail->CharSet =  "utf-8";
    $mail->SMTPDebug = 2;
    $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
      );
    $mail->isSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "nardosa953@gmail.com";
    // GMAIL password
    $mail->Password = "pbjpxhrxkawcehkp";
    $mail->SMTPSecure = 'ssl' ; 
    // sets GMAIL as the SMTP server
    $mail->DRIVER='sendmail';
    $mail->Mailer = "smtp";
    $mail->Host = "ssl://smtp.gmail.com";
    
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='nardosa953@gmail.com';
    $mail->FromName='meti';
    $mail->setFrom('nardosa953@gmail.com');
    $mail->addAddress('kabebe438@gmail.com');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    $mail->Send();
      echo "Check Your Email and Click on the link sent to your email";
    }
    catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    
}
  }	
}
?>