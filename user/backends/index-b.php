<?php
	session_start();
	if (!isset($_SESSION['user'])) return  header('Location:../login.php');
	require '../backends/classes/DbConnect.php';
	require './backends/classes/UserProfile.php';
	require './backends/classes/UserProgress.php';
	require '../backends/classes/FormValidator.php';
	$id = $_SESSION['user'];
	$user_profile = new UserProfile($id);
	$user = $user_profile->get_user_profile();
	$f_name = $user['f_name'] ;
	$user_progress = new UserProgress($id);
	$progress = $user_progress->get_user_progress(); 
	var_dump(($progress));
	if(!$progress) echo "string";;
	$view = $progress['view'];
	// echo $user_progress;
?>