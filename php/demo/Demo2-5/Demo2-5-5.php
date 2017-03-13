<?php
//初始化
$array = array('a', 'b', 'c');
var_dump($array);
echo "<br />";

//销毁数组某个元素
unset($array[1]);
var_dump($array);
echo "<br />";

//数组元素赋值为null，并没有销毁元素
$array[2] = null;
var_dump($array);
echo "<br />";

//unset用于销毁变量
$age = 18;
var_dump($age);
unset($age);
var_dump($age);