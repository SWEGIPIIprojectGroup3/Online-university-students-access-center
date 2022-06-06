<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        color:black;
    }
    </style>
</head>
<body>
<?php 
if(isset($_SESSION['message'])){
    ?>
    <div lass="alert alert-warning alert dismissible fade show" role="alert">
        <strong>Hey </strong><?=$_SESSION['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    <?php
    unset($_SESSION['message']);
}
?>
</html>