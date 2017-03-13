<?php
date_default_timezone_set("PRC");
//输出当前时间戳
echo time()."<br />";

//格式化输出当前日期时间
echo date("Y-m-d H:i:s")."<br />";

//获取当前日期为一年中的第几周
echo date("W")."<br />";

//获取某个时间为一年中的第几周
echo date("W", strtotime('2015-2-1'))."<br />";
?>