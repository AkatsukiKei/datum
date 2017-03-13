<?php
$path = $_GET['path'];
$prepath = dirname($path);
$cpath = iconv("UTF-8", "GB2312", $path);
if (!unlink($cpath)) {
	echo "删除失败";
}
else{
	echo "删除成功";
}
?>