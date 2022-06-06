<?php
include 'auth/database.php';
if(isset($_POST['submit'])){
$productName=$_POST['Proname'];
$productCost=$_POST['Pcost'];
$productPrice=$_POST['Pprice'];
$productQuantity=$_POST['Pquantity'];
$stmt= "UPDATE `product` set `cost` = '$productCost', `Selling_Price` = '$productPrice', `quantity` = '$productQuantity' WHERE `productName` = '$productName'";
mysqli_query($conn,$stmt);
header("location: ../public/provider.php");
}
else{
    echo "couldn't edit product";
}


?>