<?php
$filename = $_GET['filename'];
//验证本程序被执行
file_put_contents($filename . ".txt", '这个程序被请求并执行了。');