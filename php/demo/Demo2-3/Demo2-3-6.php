<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>函数的默认参数</title>
</head>

<body>
<?php
function getTotalPrice($price,$num,$discount=1){
	echo "单价是：".$price."元<br>";
	echo "购买数量：".$num."<br>";
	echo "折扣:";
	if($discount == 1){
		echo "无折扣<br>";
	}
	else echo $discount*10 ."<br>";	
	$totalPrice=$num*$price*$discount;
	echo "总价为：".$totalPrice."元<br>";
}

echo "-----不是会员-------<br>";
getTotalPrice(10,3);

echo "------是会员--------<br>";
getTotalPrice(10,3,0.8);
?>

</body>
</html>
