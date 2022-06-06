<form method='post'>
<table>

<tr><td>Verify username:</td><td><input type='text' name='uname' ></td></tr>
<tr><td>Update Clothes:</td><td><input type='text' name='TextBoxForTitle' ></td></tr>
<tr><td>Update Date:</td><td><input type='text' name='TextBox' ></td></tr>
<tr><td></td><td><input type='submit' name='save' value='save'></td></tr>
</table></form>
<?php
require_once '../config/auth/database.php';


if (isset($_POST['save'])){
    $uname=$_POST['uname'];
    $TitleVariable=$_POST['TextBoxForTitle'];
$Title=$_POST['TextBox'];
    mysqli_query($conn,"update laundarypay set clothes='$TitleVariable', Date='$Title' where username='$uname'");
    echo "Updated successfully";
      }
      ?>