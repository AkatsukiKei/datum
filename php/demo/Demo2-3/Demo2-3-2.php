<?php
/**
 * 求阶乘
 */
function getFactorial($num){
	$sum = 1;
	for($i=1; $i<=$num; $i++){
		$sum *= $i;
	}
	return $sum;
}

$num = 3;
$sum = getFactorial($num);
echo "The factorial of $num is $sum";
?>