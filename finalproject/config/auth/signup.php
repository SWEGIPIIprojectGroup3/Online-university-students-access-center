<?php 

require 'database.php';
$error_firstname="";
$error_lastname="";
$error_username=$mobile_error=$error_email=$error_pass= $error_confirm="";

if(isset($_POST['submit'])){
     
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
        $error_confirm="<span class='error'>Password and confirm password does not match</span>";
        
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