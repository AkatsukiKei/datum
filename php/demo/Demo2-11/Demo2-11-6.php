<?php
$pattern = "/^\w+([+-.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/";

$email1 = "servcies.online@gmail.com";
$result = preg_match($pattern, $email1);
var_dump($result);

$email2 = "error.com";
$result = preg_match($pattern, $email2);
var_dump($result);

$email3 = "user201@sina.com.cn";
$result = preg_match($pattern, $email3);
var_dump($result);

