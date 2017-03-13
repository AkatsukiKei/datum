<?php
include "Demo2-9-1.php";

$p1 = new person();
$p1->name = "张三三";

$p2 = $p1;
echo $p2->name;
echo "<br />";
$p2->name = "李思思";
echo $p1->name;