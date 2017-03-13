<?php
$userInfo = array(
		'username' => 'robin',
		'login_ip' => '127.0.0.1',
		'role_id' => 3,
		'is_system_user' => false
	);
echo $userInfo['username'];
echo "<br />";

$students = array(
		array('name' => '王多多', 'gender' => '男'),
		array('name' => '张多多', 'gender' => '女')
	);
echo $students[1]['gender'];