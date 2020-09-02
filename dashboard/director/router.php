<?php
	$hospital_id = explode('=',$params[0])[1];
	$hospital_view = explode('=',$params[2])[1];
	require __DIR__.'/authorisation.php';
	if (!is_accessible($hospital_id,$hospital_user)) return header('Location:./');
	if ($hospital_view === 'home') {
		require 'menu.php'; user_menu('home',"Hospital Admin");
    	require './director/views/home.php';
		return;
	}
?>