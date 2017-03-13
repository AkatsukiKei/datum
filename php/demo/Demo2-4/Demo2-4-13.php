<form action="" method="post">
	<textarea cols="30" rows="8" name="content"></textarea>
	<input type="submit" name="submit" value="提交">
</form>
<?php
if (isset($_POST['submit'])) {
	echo htmlspecialchars($_POST['content']);
	echo $_POST['content'];
}