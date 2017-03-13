<!DOCTYPE html>
<html>
	<head>
		<title>2-2-2 PHP语法基础</title>
	</head>
	<body>
		<?php
			echo "<table border='1' height='200px' width='100px'>";
			for($i = 0; $i < 4; $i++)
			{
				echo "<tr>";
				for($j = 0; $j < 3; $j++)
				{
					echo "<td> </td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>