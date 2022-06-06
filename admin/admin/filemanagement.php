
<?php
$server="localhost";
$username="root";
$password="";
$db="servicecenter";
$conn=mysqli_connect($server,$username,$password,$db);




$filename = "new.csv";
$fp = fopen('php://output', 'w');
$query = "SELECT * FROM user";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_row($result)) {
	$header[] = $row[0];
}	

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}
exit;
?>
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin page</title>
  <link rel="stylesheet" href="admin.css">

</head>
<form id="frm-upload" action="" method="post"
    enctype="multipart/form-data">
    <div class="form-row">
        <div>Choose file:</div>
        <div>
            <input type="file" class="file-input" name="file-input">
        </div>
    </div>

    <div class="button-row">
        <input type="submit" id="btn-submit" name="upload"
            value="Upload">
    </div>
</form>
</html>


