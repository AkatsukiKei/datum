<?php
session_start();
if (!isset($_POST['username']) || !isset($_POST['password'])) {
	echo "error";
	exit;
}
$username = trim($_POST['username']);
$password = trim($_POST['password']);

if ($username == "test" && $password == "123456") {
	$_SESSION['username'] = $username;
	echo "success";
}
else {
	echo "error";
}