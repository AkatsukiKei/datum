<?php
$str = "2016-04-16 20:17:20";
$data = substr($str, 0, 10);
$time = substr($str, 11);
echo $data."<br/>".$time;
?>