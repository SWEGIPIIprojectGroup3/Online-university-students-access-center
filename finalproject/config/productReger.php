<?php 
include_once 'auth/database.php';
if(isset($_POST['submit'])){
    $pName=$_POST["Pname"];
    $provider=$_POST["providerName"];
    $catagory=$_POST["pcatagory"];
    $cost=$_POST["cost"];
    $price=$_POST["price"];
    $quantity=$_POST["quantity"];
    $pcode=$_POST["pCode"];
    $imgg=$_POST["img"];
if(isset($catagory)){
    $kk=0;
    $stmt="SELECT productCategory FROM product";
    $final=mysqli_query($conn,$stmt);
    if($final->num_rows>0){
    while( $row=$final->fetch_assoc()){
    switch($catagory){
        case "electronics":
            if($row["productCategory"]=="electronics"){
                $kk++;
            }
            if($kk>4){
                $catago="electronics1";
            }
            else{
                $catago="electronics";
            }
        break;
        case "cosmotics":
            if($row["productCategory"]=="cosmotics"){
                $kk++;
            }
            if($kk>8){
                $catago="cosmotics1";
            }
            else{
                $catago="cosmotics";
            }
        break;
        case "women-cloth":
            if($row["productCategory"]=="Women cloth"){
                $kk++;
            }
            if($kk>4){
                $catago="women cloth1";
            }
            else{
                $catago="Women cloth";
            }
        break;
        case "women-shoes":
            if($row["productCategory"]=="women shoes"){
                $kk++;
            }
            if($kk>4){
                $catago="women shoes1";
            }
            else{
                $catago="women shoes";
            }
        break;
        case "men-cloth":
            if($row["productCategory"]=="men clothes"){
                $kk++;
            }
            if($kk>4){
                $catago="men clothes1";
            }
            else{
                $catago="men clothes";
            }
        break;
        case "men-shoes":
            if($row["productCategory"]=="men shoes1"){
                $kk++;
            }
            if($kk>4){
                $catago="men shoes";
            }
            else{
                $catago="men shoes1";
            } 
        break;
        case "stationary":
            if($row["productCategory"]=="stationary"){
                $kk++;
            }
            if($kk>4){
                $catago="stationary1";
            }
            else{
                $catago="stationary";
            }
        break;
        
    }
}
    }
}
    $sql = "INSERT INTO product(productName, productProvider, productCategory, cost, Selling_Price, quantity, productCode,image) VALUES('$pName', '$provider','$catago','$cost','$price','$quantity','$pcode','$imgg');";
if(mysqli_query($conn,$sql)){
    echo "New Item is added";
}
else{
    echo "Error: ".mysqli_error($conn);
}
mysqli_close($conn);
header("Location: ../public/provider.php?signup=success");
}

else{
    header("Location: ../public/Product.php");
}


?>