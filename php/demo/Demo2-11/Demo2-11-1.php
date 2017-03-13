<?php
$qq = '200123';

function checkQQ($subject) {
	$pattern = '/^[1-9][0-9]{4,10}$/';
	return preg_match($pattern, $subject);
}

$result = checkQQ($qq);
var_dump($result);

if ($result) {
	echo "<br/>".$qq."是QQ号";
}