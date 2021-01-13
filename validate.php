<?php
	if(!(isset($_SESSION['login']) && $_SESSION['login'] == "OK")) {
		header('Location: login_jerico.php');
		exit;
	}
?>