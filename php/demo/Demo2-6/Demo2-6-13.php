<?php
function uploadFile($file) {
	if ($file['error'] != 0) {
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
	}

	if ($file['size'] > 10000000) {
		return "文件大小超过10M！";
	}

	$allowedFileType = array("image/png", "image/jpg", "image/jpeg", "image/bmp", "image/gif");
	if (!in_array($file['type'], $allowedFileType)) {
		return "错误的文件类型！";
	}

	$fileName = date("Ymd_His_") . rand(1000, 9999) . substr($file['name'], strrpos($file['name'], '.'));
	if(move_uploaded_file($file['tmp_name'], './uploadImage/' . $fileName)) {
		return "上传成功！";
	}
	else {
		return "未知错误！";
	}
}
if (isset($_FILES['photo'])) {
	echo uploadFile($_FILES['photo']);
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