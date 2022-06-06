<?php
$myfile=fopen("new 1.txt","r+") or die("unable to open the file");
echo fread($myfile,filesize("new 1.txt"))."<br>";
fclose($myfile);
?>