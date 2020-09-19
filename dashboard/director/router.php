<?php
// ini_set('display_errors', 1); ini_set('display_startup_errors', 1); 
	require __DIR__.'/authorisation.php';
	require __DIR__.'/utilities.php';
	if ($hospital_view === 'home') {
		require 'menu.php'; user_menu('home',"Hospital Admin");
    require './director/views/home.php';
		return;
	}
	if ($hospital_view === 'patients') {
		if (!$hospital_action) {
			require 'menu.php'; user_menu('home',"Hospital Admin");
			require './director/views/patients-home.php';
			return;
		}else if ($hospital_action === 'new') {
			require 'menu.php'; user_menu('home',"Hospital Admin");
			require './director/views/new-patients.php';
			return;
		}
		else {
			return header('Location:./');
		}
	}
?>