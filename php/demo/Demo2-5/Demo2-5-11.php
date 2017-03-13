<?php
$students = array(
		array('王大锤', 10),
		array('张小凳', 9)
	);

// PHP版本低的不能使用list()
foreach ($students as list($name, $age)) {
	echo $name . ":" . $age .  "<br />";
}