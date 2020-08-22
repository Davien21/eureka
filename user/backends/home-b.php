<?php
	session_start();
	if (!isset($_SESSION['user'])) return  header('Location:../login.php');
	require '../backends/classes/DBConnect.php';
	require './backends/classes/UserProfile.php';
	require '../backends/classes/HospitalSetup.php';
	require '../backends/classes/FormValidator.php';
	$id = $_SESSION['user'];
	$user_profile = new UserProfile($id);
	$user = $user_profile->get_user_profile();
	$f_name = $user['f_name'] ;
	
?>