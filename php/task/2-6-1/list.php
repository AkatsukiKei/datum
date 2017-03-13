<?php
$allnewsfile = scandir('./newsdata');
$title = $_POST['title'];
$time = date('Y-m-d');
$content = $_POST['content'];
$id = count($allnewsfile) - 1;
$fileName = iconv("utf-8","gbk","newsdata/$id,$title,$time.txt");
$txt = file_put_contents($fileName, $title."###".$content);
if($txt){
	echo "<script type='text/javascript'>";
	echo "alert('发表成功')";
	echo "</script>";
}
else{
	echo "<script type='text/javascript'>";
	echo "alert('发表失败')";
	echo "</script>";
}
?>
<a href="2-6-1.php">返回</a>