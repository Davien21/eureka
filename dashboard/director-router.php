<?php
	$hospital_id = explode('=',$params[0])[1];
	$hospital_view = explode('=',$params[2])[1];
	if ($hospital_view === 'home') {
		require 'menu.php'; user_menu('home',"Hospital Admin");
    	require __DIR__.'/director/views/home.php';
		return;
	}
?>