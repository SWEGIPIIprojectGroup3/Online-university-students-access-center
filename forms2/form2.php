<h1>Sorting appointments based on date...</h1>
  
      <?php

   
        //  $sql = "SELECT username,clothes,Date FROM laundarypay order by Date asc";
        //  $result = $conn->query($sql);
           
        //  if ($result->num_rows > 0) {
        //     while($row = $result->fetch_assoc()) {
        //        printf("username: %s, clothes: %s,  Date: %d <br />", 
        //           $row["username"], 
        //           $row["clothes"], 
        //           $row["Date"]);               
        //     }
        //  } else {
        //     printf('No record found.<br />');
        //  }
        //  mysqli_free_result($result);
         

$min = 1;
$max = 28;
$laund_rows=mysqli_fetch_array($laund_query);
?>
<tr><td>Date:</td><td><input type="text" name="TextBoxForTitle" ></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="check your appointment"></td></tr>
</table></form></body></html>
<?php 
if (isset($_POST['submit'])){
    $int = $_POST['TextBoxForTitle'];
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("your appointment is not scheduled");
} else {
  echo("your appointment is scheduled late");
}}

      ?>