<?php
$userInfo = array(
		'username' => 'robin',
		'login_ip' => '127.0.0.1',
		'role_id' => 3,
		'is_system_user' => false
	);

foreach ($userInfo as $key => &$value) {
	if ($key == "is_system_user") {
		$value = true;
	}
	echo $key . ":" . $value . "<br />";
}
var_dump($userInfo);


