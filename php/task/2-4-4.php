<?php
$str = "services@gmail.com";
$len = strlen($str);
// 用户名长度
$len1 = strpos($str, '@');
$data = substr($str, 0, $len1);
$time = substr($str, $len1 + 1);
echo $data."<br/>".$time;
?>