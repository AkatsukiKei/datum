<?php
/**
 * 计算平方值
 */
function getSquare(&$n){
	$n = $n*$n;
}

$number = 5;
getSquare($number);
echo $number;
