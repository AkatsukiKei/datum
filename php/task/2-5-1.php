<!DOCTYPE html>
<html>
	<head>
		<title>2-5-1 数组</title>
	</head>
	<body>
		<?php
			$goods = array(
				array(
					'no' => '序号',
					'id' => '商品编号',
					'name' => '商品名称',
					'price' => '商品价格',
					'num' => '商品数量',
					'allprice' => '商品总额'
				),
				array(
					'no' => 1,
					'id' => 1001,
					'name' => '李宁运动衬衫',
					'price' => 320,
					'num' => 2,
					'allprice' => 640
				),
				array(
					'no' => 2,
					'id' => 1002,
					'name' => '耐克运动鞋',
					'price' => 120,
					'num' => 1,
					'allprice' => 120
				),
				array(
					'no' => 3,
					'id' => 1003,
					'name' => '时尚背包',
					'price' => 220,
					'num' => 2,
					'allprice' => 440
				)
			);
			echo "<table border = '1'>";
			for($i = 0; $i < 4; $i++)
			{
				echo "<tr>";
				foreach ($goods[$i] as $key => $value)
				{
					echo "<td>".$value."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>