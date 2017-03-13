<?php
session_start();
//销毁指定session数据
unset($_SESSION['username']);
var_dump($_SESSION);

//session全部数据
//方式1：
$_SESSION = null;
//方式2：
session_destroy();
var_dump($_SESSION);