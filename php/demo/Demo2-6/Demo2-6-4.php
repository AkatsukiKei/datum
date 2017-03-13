<?php
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=abc.xls"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>学生信息表</title>
	<style type="text/css">
		table,td {
			border:1px solid black;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>学号</td>
			<td>姓名</td>
			<td>性别</td>
			<td>年龄</td>
		</tr>
		<tr>
			<td>1</td>
			<td>王小锤</td>
			<td>男</td>
			<td>15</td>
		</tr>
		<tr>
			<td>2</td>
			<td>张小凳</td>
			<td>女</td>
			<td>14</td>
		</tr>
		<tr>
			<td>3</td>
			<td>李小卓</td>
			<td>男</td>
			<td>15</td>
		</tr>
	</table>
</body>
</html>