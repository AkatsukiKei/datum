<?php
//索引数组
$students = array('王多多', '李多多', '张少少');
var_dump($students);
echo "<br />";

//关联数组
$userInfo = array(
		'username' => 'robin',
		'login_ip' => '127.0.0.1',
		'role_id' => 3,
		'is_system_user' => false
	);
var_dump($userInfo);
echo "<br />";

//数值索引与关联同时具有
$arr1 = array(
		'username' => 'robin',
		'login_ip' => '127.0.0.1',
		3,  //下标值为0
		20	//下标值为1
	);
var_dump($arr1);
echo "<br />";

$arr2 = array(
		0 => 'robin',
		5 => '127.0.0.1',
		3,  //下标值为6
		20  //下标值为7
	);
var_dump($arr2);
echo "<br />";
