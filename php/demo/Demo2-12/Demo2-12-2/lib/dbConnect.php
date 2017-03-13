<?php
$dsn = "mysql:host=localhost;dbname=2014-HTML5-lession";
$dbUser = "root";
$dbPwd  = "123456";

$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		PDO::ATTR_ERRMODE => "ERRMODE_EXCEPTION"
	);

$pdo = new PDO($dsn, $dbUser, $dbPwd, $options);