<?php
/**
 * 记录警告的次数
 * return:警告的次数
 */
function countMessage(){
	$count = 0;
	$count ++;
	return $count;
}
/**
 * 输出警告并记录次数return:警告的次数
 */
function printWarning(){
	echo "Warning!<br/>";
	return countMessage();
}

for($i=0; $i<3; $i++){
	$num = printWarning();
}
echo "$num warnings total!";

