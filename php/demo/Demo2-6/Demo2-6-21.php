<?php
session_start();
var_dump($_SESSION);
echo "<br />";

//向session中存储数据
$_SESSION['username'] = 'testuser';
$_SESSION['userrole'] = "admin";

echo $_SESSION['username'];