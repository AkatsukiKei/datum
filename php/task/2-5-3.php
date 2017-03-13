<!DOCTYPE html>
<html>
	<head>
		<title>2-5-1 数组</title>
	</head>
	<body>
		<?php
			$arr = array(
				'no' => '序号',
				'id' => '商品编号',
				'name' => '商品名称',
				'price' => '商品价格',
				'num' => '商品数量',
				'allprice' => '商品总额'
				);
			$goods = array(
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
			// 按数量降序
			function numdown($a, $b)
			{
				if($a['num'] == $b['num'])
				{
					return 0;
				}
				return ($a['num'] > $b['num'])?-1:1;
			}
			usort($goods, "numdown");
			echo "按数量降序：<table border = '1'>";
			foreach($arr as $key => $value)
			{
				echo "<td>".$value."</td>";
			}
			for($i = 0; $i < 3; $i++)
			{
				echo "<tr>";
				foreach ($goods[$i] as $key => $value)
				{
					echo "<td>".$value."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			// 按数量升序
			function numup($a, $b)
			{
				if($a['num'] == $b['num'])
				{
					return 0;
				}
				return ($a['num'] < $b['num'])?-1:1;
			}
			usort($goods, "numup");
			echo "按数量升序：<table border = '1'>";
			foreach($arr as $key => $value)
			{
				echo "<td>".$value."</td>";
			}
			for($i = 0; $i < 3; $i++)
			{
				echo "<tr>";
				foreach ($goods[$i] as $key => $value)
				{
					echo "<td>".$value."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			// 按单价降序
			function pricedown($a, $b)
			{
				if($a['price'] == $b['price'])
				{
					return 0;
				}
				return ($a['price'] > $b['price'])?-1:1;
			}
			usort($goods, "pricedown");
			echo "按单价降序：<table border = '1'>";
			foreach($arr as $key => $value)
			{
				echo "<td>".$value."</td>";
			}
			for($i = 0; $i < 3; $i++)
			{
				echo "<tr>";
				foreach ($goods[$i] as $key => $value)
				{
					echo "<td>".$value."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			// 按单价升序
			function priceup($a, $b)
			{
				if($a['price'] == $b['price'])
				{
					return 0;
				}
				return ($a['price'] < $b['price'])?-1:1;
			}
			usort($goods, "priceup");
			echo "按单价升序：<table border = '1'>";
			foreach($arr as $key => $value)
			{
				echo "<td>".$value."</td>";
			}
			for($i = 0; $i < 3; $i++)
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