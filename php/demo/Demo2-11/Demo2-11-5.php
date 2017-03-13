<?php
$contents = <<<CONTENT
	'some contents'
	and 
	"other contents"
CONTENT;

$pattern = '/([\'\"]).*\1/';
preg_match_all($pattern, $contents, $matches);
var_dump($matches);