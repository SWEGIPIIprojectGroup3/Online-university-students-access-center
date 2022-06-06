<?php
require '../config/auth/database.php';

 
	if(ISSET($_POST['submit'])){
		if($_FILES['upload']['name'] != "") {
			$file = $_FILES['upload'];
 
			$file_name = $file['name'];
			$file_temp = $file['tmp_name'];
			$name = explode('.', $file_name);
			$path = "files/".$file_name;
 
			$conn->query("INSERT INTO `file` VALUES('', '$name[0]', '$path')") or die(mysqli_error($conn));
 
			move_uploaded_file($file_temp, $path);
			header("location:../index.php");
 
		}else{
			echo "<script>alert('Required Field!')</script>";
			echo "<script>window.location='../index.php'</script>";
		}
	}
if(isset($_POST['submit'])){
$filename = "new.csv";
$fp = fopen('php://output', 'w');
$query = "SELECT * FROM users";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_row($result)) {
	$header[] = $row[0];
}	

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}

}
?>