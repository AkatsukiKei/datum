<?php
$dsn = "mysql:host=localhost;dbname=2014-HTML5-lession";
$dbuser = "root";
$dbpwd = "123456";

$pdo = new PDO($dsn, $dbuser, $dbpwd);

$sql = "insert into user values(null, :username, :password, null, null, null)";
$stmt = $pdo->prepare($sql);
$username = "user3";
$password = "123456";
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->execute();

$username2 = "user4";
$password2 = "111111";
$stmt->bindParam(":username", $username2);
$stmt->bindParam(":password", $password2);
$stmt->execute();






