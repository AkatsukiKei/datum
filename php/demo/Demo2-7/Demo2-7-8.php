<?php
$allCitys = array(
		array("id"=>5, "name"=>'石家庄'),
		array("id"=>6, "name"=>'唐山'),
		array("id"=>7, "name"=>'秦皇岛')
	);
$jsonString = json_encode($allCitys);
echo $jsonString;

echo "<br />";

var_dump(json_decode($jsonString));