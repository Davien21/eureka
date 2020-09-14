<?php
	require __DIR__.'/authorisation.php';
	require __DIR__.'/utilities.php';
	if ($hospital_view === 'home') {
		require 'menu.php'; user_menu('home',"Hospital Admin");
    require './director/views/home.php';
		return;
	}
	if ($hospital_view === 'patients') {
		require 'menu.php'; user_menu('home',"Hospital Admin");
    require './director/views/patients-home.php';
		return;
	}
?>