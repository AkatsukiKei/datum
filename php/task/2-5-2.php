<?php
$arr = array(
		2 => 20,
		0 => 60,
		1 => 30
	);
echo "原数组：<br/>";
foreach ($arr as $key => $value)
{
	echo $key."=".$value."<br/>";
}
ksort($arr);
echo "升序：<br/>";
foreach ($arr as $key => $value)
{
	echo $key."=".$value."<br/>";
}
krsort($arr);
echo "降序：<br/>";
foreach ($arr as $key => $value)
{
	echo $key."=".$value."<br/>";
}
?>