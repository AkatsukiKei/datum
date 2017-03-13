<?php
$students[] = '王多多'; //下标为0
$students[] = '李多多'; //下标为1
$students[] = '张多多'; //下标为2
var_dump($students);
echo "<br />";

$students2[0] = '王多多'; //下标为0
$students2[5] = '李多多'; //下标为5
$students2[] = '张多多'; //下标为6
var_dump($students2);
echo "<br />";

$userInfo['user_name'] = 'robin';
$userInfo['login_ip'] = '127.0.0.1';
$userInfo['role_id'] = 3;
$userInfo['is_system_user'] = false;
var_dump($userInfo);
echo "<br />";
