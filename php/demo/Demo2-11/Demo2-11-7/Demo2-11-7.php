<?php
include "douban1.html";

$title = '';
$author = '';
$postTime = '';
$content = '';

$titlePattern = "/<h1>(.+)<\/h1>/";
$titleMatch = preg_match_all($titlePattern, $html, $match);
if ($titleMatch) {
	// echo "<pre>";
	// var_dump($match);
	// echo "</pre>";
	$title = $match[1][0];
}
echo $title."<br/>";

$authorPattern = "/<a.*class=\"note-author\".*>(.+)<\/a>/";
$authorMatch = preg_match_all($authorPattern, $html, $match);
if ($authorMatch) {
	// echo "<pre>";
	// var_dump($match);
	// echo "</pre>";
	$author = $match[1][0];
}
echo $author."\n";

$postTimePattern = "/<span class=\"pl\">([\d-:\s]+)<\/span>/";
$postTimeMatch = preg_match_all($postTimePattern, $html, $match);
if ($postTimeMatch) {
	// echo "<pre>";
	// var_dump($match);
	// echo "</pre>";
	$postTime = $match[1][0];
}
echo $postTime."<br/>";

$contentPattern = "/<div.*class=\"note\".*?>(.+)<\/div>/";
$contentMatch = preg_match_all($contentPattern, $html, $match);
if ($contentMatch) {
	$content = $match[1][0];
}
echo $content;