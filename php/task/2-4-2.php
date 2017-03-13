<?php
$str = "E:/PHP/WebServer/user_list.php";
$name = substr($str, 17, 9);
$extension = substr($str, 27);
echo $name."<br/>".$extension;
?>