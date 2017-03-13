<?php
$userInfo = array(
		'username' => 'robin',
		'login_ip' => '127.0.0.1',
		'role_id' => 3,
		'is_system_user' => false
	);

foreach ($userInfo as $key => $value) {
	echo $key . ":" . $value . "<br />";
}


