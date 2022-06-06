<?php

// Include functions and connect to the database using PDO MySQL
include '../config/auth/function.php';
// Page is set to home (home.php) by default, so when the visitor visits that will be the page they see.
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'MC';
// Include and show the requested page
include $page . '.php';
?>