<?php
$dsn = "mysql:host=localhost;dbname=2014-HTML5-lession";
$dbuser = "root";
$dbpwd = "123456";

$pdo = new PDO($dsn, $dbuser, $dbpwd);

// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$username = "1";
$password = "2";
$sql = "insert user values(null, '$username', '$password', null, null)";

try {
	$count = $pdo->exec($sql);	
}
catch (PDOException $pe) {
	var_dump($pe);
}


// echo $pdo->errorCode();
// var_dump($pdo->errorInfo());