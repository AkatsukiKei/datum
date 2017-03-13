<?php
$search = array("敏感词1","敏感词2");
$replace = "***";
$str = "这是敏感词1和敏感词2";
echo $str."<br/>".str_replace($search, $replace, $str);
?>