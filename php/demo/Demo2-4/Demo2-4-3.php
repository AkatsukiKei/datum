<style type="text/css">
	img {
		width: 300px;
	}
</style>
<?php
$img = "img/1.jpg";

echo "<img src='$img' />";
echo '<hr />';
echo '<img src="$img" />';
echo '<hr />';
echo <<< STR
	<img src='$img' />
STR;
?>