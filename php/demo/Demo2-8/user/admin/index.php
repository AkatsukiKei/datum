<?php
session_start();
include "../lib/mysql_connect.php";
if (!isset($_SESSION['adminid']) || $_SESSION['adminid'] == '') {
	header("Location:login.php");
}

// 每页两条
// 第一页：0,2
// 第二页：2,2
// 第三页：4,2
$page = 1;
$numPerPage = 2;
$offset = ($page-1)*$numPerPage;

if (isset($_GET['page'])) {
	$page = intval($_GET['page']);
}
$result = mysql_query("select * from user");
$totalNum = mysql_num_rows($result);
$totalPage = ceil($totalNum/$numPerPage);
if ($page <= 0 || $page > $totalPage) {
	$page = 1;
}
var_dump($page);
$sql = "select * from user order by id desc limit 0,2;
$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	table,td,th {
		border:1px solid black;
		border-collapse: collapse;
	}
	.headphoto {
		width: 50px;
	}
	</style>
</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>用户名</th>
		<th>头像</th>
		<th>注册时间</th>
		<th>上次登录时间</th>
		<th>操作</th>
	</tr>
<?php
	while($row = mysql_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>{$row['id']}</td>";
		echo "<td>{$row['username']}</td>";
		echo "<td>";
		if ($row['head_photo'] != "") {
			echo "<img class='headphoto' src=../{$row['head_photo']} />";
		}
		echo "</td>";

		echo "<td>{$row['resgister_time']}</td>";
		echo "<td>{$row['last_login_time']}</td>";
		echo "<td><a href='edit.php?id={$row['id']}'>编辑</a>&nbsp;&nbsp;<a href='delete.php?id={$row['id']}'>删除</a></td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>