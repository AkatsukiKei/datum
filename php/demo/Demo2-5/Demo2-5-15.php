<?php
$carts = array(
		array('id' => '2011011130', 'name' => '商品1', 'price' => 20, 'count' => 3),
		array('id' => '2011021110', 'name' => '商品2', 'price' => 36, 'count' => 2)
	);
$responseData = json_encode($carts);
var_dump($responseData);

echo "<br />";

$reviceData = json_decode($responseData);
var_dump($reviceData);
echo "<br />";
//JSON字符串转换回数组后，原本关联数组成为PHP的对象
echo $reviceData[0]->name;