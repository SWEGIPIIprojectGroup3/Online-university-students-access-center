<?php
include_once 'database.php';

if(!isset($_SESSION['auth'])){
    $_SESSION['message']="First login to Access Dashboard";
    header("Location: ../../public/login&sign.php");
    exit();
}
else{
    if($_SESSION['auth_role']!="admin"){
         $_SESSION['message']="you are not authorized as ADMIN";
         header("Location: ../../public/login&sign.php");
        
        exit();
    }

}
?>