<?php
session_start();
require 'database.php';

if(isset($_POST['userName']) && isset($_POST['password'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $userName=validate($_POST['userName']);
    $password=validate($_POST['password']);
    if(empty($userName)){
        $_SESSION['message']="User Name is required";
        header("Location: ../../public/login&sign.php");
        exit();
    }
    elseif(empty($password)){
        $_SESSION['message']="Password is required";
        header("Location: ../../public/login&sign.php");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE userName='$userName' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['userName'] === $userName && $row['password'] === $password) {
                foreach($result as $data){
                    $user_id=$data['user_id'];
                    $user_name=$data['firstName']." ".$data['lastName'];
                    $userName=$data['userName'];
                    $role_as=$data['role'];
                    $profile=$data['profile'];
                }
                $_SESSION['auth']=true;
                $_SESSION['auth_role']="$role_as";
                $_SESSION['auth_user']=[
                    'user_id'=>$user_id,
                    'user_name'=>$user_name,
                    'userName'=>$userName,
                    'profile'=>$profile,
                ];

               if($_SESSION['auth_role']=="admin"){
                    $_SESSION['message']="welcome to dashboard";
                    header("Location: ../../admin/admin.php");
                    exit();
               }
               elseif($_SESSION['auth_role']=="user"){
                $_SESSION['login_user']=$user_name;
                    $_SESSION['message']="you have logged in sucesfully";
                    header("Location: ../../index.php");
                    exit();
               }
               elseif($_SESSION['auth_role']=="S_Provider" || "L_Provider" || "W_Provider"){
                $_SESSION['message']="you have logged in sucesfully";
                header("Location: ../../public/provider.php");
                exit();
               }

         }else{
                $_SESSION['message']="Incorect User name or password";
                header("Location: ../../public/login&sign.php");

                exit();

            }

        }else{
            $_SESSION['message']="Incorect User name or password";
            header("Location: ../../public/login&sign.php");

            exit();

        }

    }

}else{

    header("Location: ../../public/login&sign.php");

    exit();

}
 


?>