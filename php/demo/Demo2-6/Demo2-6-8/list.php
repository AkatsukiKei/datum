<?php
$allnewsfile = scandir('./newsdata');

echo "<ul>";
foreach ($allnewsfile as $file) {
	if (strpos($file, ".") === 0) {
		continue;
	}
	$file = trim($file, '.txt');
	$news = explode(',' , $file);
	echo "<li><a href='show.php?id={$news[0]}'>{$news[1]}-------------{$news[2]}</a></li>";
}
echo "</ul>";