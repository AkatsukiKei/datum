<?php
function check_admin_login() {
	if (!isset($_SESSION['adminid']) || $_SESSION['adminid'] == '') {
		header("location:login.php");
	}
}