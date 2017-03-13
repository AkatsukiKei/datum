<?php
function changeValue(){
	global $info;
	$info = "This is the changed value.";
}

$info = "This is the original value.";
changeValue();
echo $info;
?>