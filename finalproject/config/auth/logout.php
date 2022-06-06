<?php
session_start();
include_once 'database.php';
$_SESSION = array();
if(isset($_POST['logout'])){
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);
    $_SESSION['message']="you logged out successfully";
    session_destroy();
    header("Location: ../../public/login&sign.php");
    exit();
}
else{
    header("Location:../../index.php");
    exit();
}





?>