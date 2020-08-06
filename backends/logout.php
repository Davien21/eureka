<?php
	session_start();
	if (isset($_SESSION['user']) or isset($_SESSION['id'])) {
		unset($_SESSION['user']);
		unset($_SESSION['id']);
		unset($_SESSION['school_id']);
		unset($_SESSION['group']);
		unset($_SESSION['school']);
	}
	header('Location:../index.php');
?>