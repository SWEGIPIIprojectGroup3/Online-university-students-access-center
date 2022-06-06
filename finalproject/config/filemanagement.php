
<?php
require 'auth/database.php';



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
if (isset($_POST["upload"])) {
    
    // Get file extension
    $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "File input should not be empty."
        );
    } // Validate file input to check if is with valid extension
    else if ($file_extension != "csv") {
            $response = array(
                "type" => "error",
                "message" => "Invalid CSV: File must have .csv extension."
            );
            echo $result;
        } // Validate file size
    else if (($_FILES["file-input"]["size"] > 2000000)) {
            $response = array(
                "type" => "error",
                "message" => "Invalid CSV: File size is too large."
            );
        } // Validate if all the records have same number of fields
    else {
        $lengthArray = array();
        
        $row = 1;
        if (($fp = fopen($_FILES["file-input"]["tmp_name"], "r")) !== FALSE) {
            while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
                $lengthArray[] = count($data);
                $row ++;
            }
            fclose($fp);
        }
            
        $lengthArray = array_unique($lengthArray);
        
        if (count($lengthArray) == 1) {
            $response = array(
                "type" => "success",
                "message" => "File Validation Success."
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Invalid CSV: Count mismatch."
            );
        }
    }

}
if(!empty(isset($_POST["upload"]))) {
    if (($fp = fopen($_FILES["file-input"]["tmp_name"], "r")) !== FALSE) {
    ?>
<table class="tutorial-table" width="100%" border="1" cellspacing="0">
<?php
    $i = 0;
    while (($row = fgetcsv($fp)) !== false) {
        $class ="";
        if($i==0) {
           $class = "header";
        }
        ?>
    <tr>
            <td class="<?php echo $class; ?>"><?php echo $row[0]; ?></td>
            <td class="<?php echo $class; ?>"><?php echo $row[1]; ?></td>
            <td class="<?php echo $class; ?>"><?php echo $row[2]; ?></td>
        </tr>
    <?php
        $i ++;
    }
    fclose($fp);
    ?>
    </table>
<?php
    $response = array("type" => "success", "message" => "CSV is converted to HTML successfully");
    } else {
        $response = array("type" => "error", "message" => "Unable to process CSV");
    }
}
?>
</div>
<?php if(!empty($response)) { ?>
<div class="response <?php echo $response["type"]; ?>
    ">
    <?php echo $response["message"]; ?>
</div>
<?php } ?>

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin page</title>
  <link rel="stylesheet" href="../assets/css/admin.css">

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
    <input type="submit" name="submit" value="Download Info"/>
</form>
</html>


