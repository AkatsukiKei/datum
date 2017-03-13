<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>

<body>
<?php
$number = rand(1,100);
if ($number < 50) {
	echo "对不起，您输了";
}
else if($number == 50){
	echo "罕见的平局啊！";
}
else{
	echo "恭喜，您赢啦！";
}
?>
</body>
</html>