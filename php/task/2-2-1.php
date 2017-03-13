<!DOCTYPE html>
<html>
	<head>
		<title>2-2-1 PHP语法基础</title>
	</head>
	<body>
		<?php
			// for
			for($i = 0;$i < 20;$i++)
			{
				if($i % 2 == 1)
				{
					echo $i."&nbsp;&nbsp;";
				}
			}
			echo "<br/>";

			// while
			$j = 0;
			while ($j < 20) {
				if($j % 2 == 1)
				{
					echo $j."&nbsp;&nbsp;";
				}
				$j++;
			}
			echo "<br/>";

			// do while
			$k = 0;
			do{
				if($k % 2 == 1)
				{
					echo $k."&nbsp;&nbsp;";
				}
				$k++;
			}while($k < 20);
		?>
	</body>
</html>