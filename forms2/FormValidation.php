<!DOCTYPE html>
<html>
<head>
<style>
.error{color:red;}
</style>
<body> 

<?php
$name=$gender=$comment=$email="";
$nameerr=$gendererr=$commenterr=$emailerr="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["name"])){
		$nameerr="name can't be empty";
	}
	else{
		$name=test_func($_POST["name"]);
		if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
			$nameerr="only white space and letters are allowed";
		}
	}
	if(empty($_POST["email"])){
		$emailerr="email can't be empty";
	}
	else{
		$email=test_func($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailerr="invalid email format";
		}
	}
	
	if(empty($_POST["gender"])){
		$gendererr="gender must be selected";
	}
	else{
		$gender=test_func($_POST["gender"]);
	}
	if(empty($_POST["comment"])){
		$commenterr="";
	}
	else{
		$comment=test_func($_POST["comment"]);
	}


}
function test_func($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>
<h2>php form validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name" value="<?php echo $name;?>"/>
<span class="error">*<?php echo $nameerr;?></span>
<br> <br>
Email: <input type="email" name="email" value="<?php echo $email;?>"/>
<span class="error">*<?php echo $emailerr;?></span>
<br> <br>
Gender:
<br> 
<input type="radio" name="gender" <?php if(isset($gender)&& $gender="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if(isset($gender)&& $gender="male") echo "checked";?> value="male">Male
<span class="error">*<?php echo $gendererr;?></span>
<br><br>
Comment:
<br>
<textarea name="comment" rows="5" cols="50"><?php echo $comment;?></textarea>
<input type="submit">
</form>
<?php
echo "<h3>Your input: </h2><br>";
echo $name . "<br>";
echo $email ."<br>";
echo $gender ."<br>";
echo $comment ."<br>";
?>
</body>
</html>
