<!DOCTYPE html>
<html>
	<head>
		<title>2-3-1 函数</title>
	</head>
	<body>
		<?php
			function getWeek($todaysDate = 0, $startDate = 0)
			{
				$todaysDate = date("Y-m-d");
				$startDate = date("2016-2-22");
				// 计算当前教学周
				$week = date("W", strtotime($todaysDate)) - date("W", strtotime($startDate)) + 1;
				return $week;
			}
			echo "当前教学周为第".getWeek()."周";
		?>
	</body>
</html>