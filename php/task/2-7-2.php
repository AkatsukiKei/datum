<meta charset="utf-8" />
<?php
$bookList = array(
		array(
			"title"=>'计算机网络',
			"author"=>'谢希仁',
			"ISBN"=>'978-7-121-20167-7',
			"date"=>'2013.6',
			"price"=>39
		),
		array(
			"title"=>'计算机操作系统',
			"author"=>array('汤小丹', '梁红兵'),
			"ISBN"=>'978-7-5606-3350-3',
			"date"=>'2014.5',
			"price"=>39
		)
	);
$attendance = array(
		array(
			"id"=>1201,
			"name"=>'张三',
			"dept"=>'销售',
			"attMonth"=>4,
			"absence"=>array('4.1', '4.11')
		),
		array(
			"id"=>1202,
			"name"=>'李四',
			"dept"=>'销售',
			"attMonth"=>4,
			"absence"=>''
		)
	);
$jsonString1 = json_encode($bookList);
echo $jsonString1;
echo "<br/>";
echo "<pre>";
var_dump(json_decode($jsonString1));
echo "</pre>";
$jsonString2 = json_encode($attendance);
echo $jsonString2;
echo "<br/>";
echo "<pre>";
var_dump(json_decode($jsonString2));
echo "</pre>";