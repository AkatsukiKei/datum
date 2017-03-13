<?php
function getAge($birY, $birM, $birD)
{
	$nowY = date("Y");
	$nowM = date("m");
	$nowD = date("d");
	$age = $nowY - $birY;
	if($birM > $nowM || ($birM == $nowM && $birD > $nowD))
	{
		$age--;
	}
	return $age;
}
echo "当前年龄为：".getAge(1996,9,14);
?>