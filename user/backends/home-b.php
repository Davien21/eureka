<?php
	session_start();
	if (!isset($_SESSION['user'])) return  header('Location:../login.php');
	include '../backends/classes/DBConnect.php';
	include './backends/classes/UserProfile.php';
	include '../backends/classes/HospitalSetup.php';
	include '../backends/classes/FormValidator.php';
	$id = $_SESSION['user'];
	$user_profile = new UserProfile($id);
	$user = $user_profile->get_user_profile();
	$f_name = $user['f_name'] ;
	
?>