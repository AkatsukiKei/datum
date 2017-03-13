<?php
if (isset($_FILES['photo'])) {
	move_uploaded_file($_FILES['photo']['tmp_name'], './' . $_FILES['photo']['name']);
	echo "上传成功！";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>上传头像</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="photo">
		<input type="submit" name="upload" value="上传">
	</form>
</body>
</html>