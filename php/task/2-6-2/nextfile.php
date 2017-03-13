<?php
$path = $_GET['path'].'/';
$dir_handle = opendir($path);
$prepath = dirname($path);
echo "<a href = 'nextfile.php?path = $prepath'>..</a>";
while ($file = readdir($dir_handle)) {
	if ($file != "." && $file != "..") {
		$filename = $file;
		$filename=iconv("GB2312", "UTF-8", $filename);
		$nextpath = $path.$filename;
		if (!is_dir($filename)) {
			echo "<li>$filename<a href='delete.php?path=$nextpath'>删除</a></li>";
		}
		else{
			echo "<li>$filename<a href='nextfile.php?path=$nextpath'>$filename</a></li>";
		}
	}
	closedir($dir_handle);
}