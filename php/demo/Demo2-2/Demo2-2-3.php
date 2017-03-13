<?php
$count = 1;
$_privateString = "I'm a boy!";
$isLogin = true;
echo gettype($count); // integer
echo "<br/>";
echo gettype($_privateString); // string
echo "<br/>";
echo gettype($isLogin); // boolean
echo "<br/>";
if (is_int($count)) {
	echo "count自增！";
	$count++;
}