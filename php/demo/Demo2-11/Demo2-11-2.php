<?php
$code =<<<CODE
/*
代码中的注释
*/
coding...
CODE;


echo "去掉注释以前：<br />";
echo nl2br($code)."<br /><hr />";
echo "去掉注释以后：<br />";
$regexp='/(\/\*)+(.|\n|\r)+(\*\/)/';
$result= preg_replace($regexp,'',$code);
echo $result;