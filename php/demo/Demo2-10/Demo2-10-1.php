<?php
$dsn = "mysql:host=localhost;dbname=2014-HTML5-lession";
$dbuser = "root";
$dbpwd = "123456";

$pdo = new PDO($dsn, $dbuser, $dbpwd);
// var_dump($pdo);

// $sql = "update user set password='123456'";
// $count = $pdo->exec($sql);
// var_dump($count);

$sql = "select * from user order by id desc limit 0,5";
$stmt = $pdo->query($sql);
/*
while ($row = $stmt->fetch()) {
	var_dump($row);
}
*/
/*
$rows = $stmt->fetchAll();
var_dump($rows);
*/

/*
while ($username = $stmt->fetchColumn(1)) {
	echo $username . "<br/>";
}
*/

// var_dump($stmt->rowCount());

$sql = "insert into user values(null,'newUser', '123123', null, null, null)";
$count = $pdo->exec($sql);
if ($count > 0) {
	echo $pdo->lastInsertId();
}

















