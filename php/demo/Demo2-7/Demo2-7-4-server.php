<?php
$username = $_POST['username'];
$password = $_POST['password'];
//验证本程序被执行
file_put_contents("userdata.txt", "用户名：{$username}\n密码：{$password}");