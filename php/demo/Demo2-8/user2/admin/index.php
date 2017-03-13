<?php
session_start();
include "../lib/mysql_connect.php";
include "../lib/global.func.php";
//check_admin_login();

//每页2条
//第一页：0,2 1
//第二页：2,2 2
//第三页：4,2 3
$numPerPage = 2;
$page = 1;
if (isset($_GET['page'])) {
	$page = intval($_GET['page']);
}
$result = mysql_query("select * from user");
$totalNum = mysql_num_rows($result);
$totalPage = ceil($totalNum / $numPerPage);
if ($page < 0 || $page > $totalPage) {
	$page = 1;
}

$offset = ($page-1) * $numPerPage;

$sql = "select * from user order by id desc limit $offset,$numPerPage";
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
	a{
		text-decoration: none;
		color: blue;
	}
	.red{
		text-decoration: underline;
		font-weight: bolder;
		color: red;
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
<p>
	<?php
	$prePage = $page-1;
	$nextPage = $page+1;

	// 上一页
	if ($page != 1) {
		echo "<a href='index.php?page=$prePage'><上一页</a>&nbsp;&nbsp;";
	}
	else{
		echo "<上一页&nbsp;&nbsp;";
	}

	// 页码折叠
	// 页码小于9时直接展示
	if ($totalPage <= 9) {
		for ($i=1; $i <= $totalPage; $i++) { 
			if ($page==$i) {
				 echo "<span class='red'>$i</span>&nbsp;&nbsp;";
			}
			echo "<a href='index.php?page=$i'>$i</a>&nbsp;&nbsp;";
		}
	}
	// 页码大于9时实现页码折叠
	else {
		if ($page <= 4) {
			for ($i=1; $i <= 7; $i++) {
				if ($page==$i) {
			 		echo "<span class='red'>$i</span>&nbsp;&nbsp;";
			 	}
			 	else{ 
					echo "<a href='index.php?page=$i'>$i</a>&nbsp;&nbsp;";
				}
			}
			echo "……&nbsp;&nbsp;<a href='index.php?page=$totalPage'>$totalPage</a>&nbsp;&nbsp;";
		}
		elseif($page>=$totalPage-3){
			echo "<a href='index.php?page=1'>1</a>&nbsp;&nbsp;……&nbsp;&nbsp;";
			for ($i=$totalPage-6;$i<=$totalPage;$i++) {
				if ($page==$i) {
			 		echo "<span class='red'>$i</span>&nbsp;&nbsp;";
			 	}
			 	else{ 
					echo "<a href='index.php?page=$i'>$i</a>&nbsp;&nbsp;";
				}
			}
		}
		else{
			echo "<a href='index.php?page=1'>1</a>&nbsp;……&nbsp;";
			for ($i=$page-3; $i < $page+3; $i++) { 
				if ($page==$i) {
			 		echo "<span class='red'>$i</span>&nbsp;&nbsp;";
			 	}
			 	else{ 
					echo "<a href='index.php?page=$i'>$i</a>&nbsp;&nbsp;";
				}
			}
			echo "……&nbsp;<a href='index.php?page=$totalPage'>$totalPage</a>&nbsp;";
		}
	}

	// 下一页
	if ($page != $totalPage) {
		echo "<a href='index.php?page=$nextPage'>下一页></a>&nbsp;&nbsp;";
	}
	else{
		echo "下一页>&nbsp;&nbsp;";
	}
	?>
</p>
</body>
</html>