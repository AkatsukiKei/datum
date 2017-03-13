<?php

$input[] = 'Demo2-11-4.php';
$input[] = 'data.txt';
$input[] = 'record.txt';
echo "数组的结构是：<br />";
print_r($input);
echo "<hr />";

echo "过滤后的数组：<br />";
$pattern = '/\.txt$/';
$filtered = preg_grep($pattern,$input);
print_r($filtered);