<?php
if (!isset($_GET['id']) || $_GET['id'] == '') {
	header("Location:list.php");
}

$id = $_GET['id'];
$allnewsfile = scandir('./newsdata');

$fileToRead = '';
foreach ($allnewsfile as $file) {
	if (strpos($file, $id . ',') === 0) {
		$fileToRead = $file;
		break;
	}
}

if ($fileToRead == "") {
	echo "<script type='text/javascript'>";
	echo "alert('参数错误')";
	echo "</script>";
}

$contents = file_get_contents('./newsdata/' . $fileToRead);
list($title,$contents) = explode("###", $contents);
?>

<h1><?php echo $title;?></h1>
<p><?php echo $contents;?></p>
<a href="list.php">返回列表</a>