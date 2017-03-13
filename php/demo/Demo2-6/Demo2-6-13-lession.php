<?php
if (isset($_FILES['photo'])) {
	echo uploadFile($_FILES['photo']);
}
function uploadFile($file) {
	switch ($file['error']) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			return "文件大小超过10M！";
			break;
		case UPLOAD_ERR_PARTIAL:
			return "文件未完成上传，请重试！";
			break;
		case UPLOAD_ERR_NO_FILE:
			return "未选择文件！";
			break;
		case UPLOAD_ERR_NO_TMP_DIR:
		case UPLOAD_ERR_CANT_WRITE:
			return "服务器端错误！";
			break;
	}
	if ($file['size'] > 1024 * 1024 * 10) {
		return "文件大小超过10M！";
	}

	$allowedType = array("image/png", "image/jpg", "image/jpeg", "image/gif", "image/bmp");
	if (!in_array($file['type'], $allowedType)) {
		return "文件类型错误！";
	}
	
	$filename = date("Ymd_His_") . rand(1000, 9999) . substr($file['name'], strrpos($file['name'], '.'));
	move_uploaded_file($file['tmp_name'], './uploadImage/' . $filename);
	return "上传成功！";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>上传头像</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
		<input type="file" name="photo">
		<input type="submit" name="upload" value="上传">
	</form>
</body>
</html>