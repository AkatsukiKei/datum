<?php
$title = "BREAKING: Broncos' Peyton Manning to announce retirement in news conference Monday";
if (strlen($title) > 10) {
	$title = substr($title, 0, 20) . '...';
}
echo $title;
echo '<br />';

$str = "abcd efghi";
echo substr($str, -5, 3);
echo '<br />';

echo substr($str, -5, -1);