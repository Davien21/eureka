<?php
	$action = $progress['extra_details']; 
	if ($action ==='Setting up your first Hospital') {
		require './backends/classes/HospitalSetting.php';
		$hospital_setting = new HospitalSetting($id);
		$settings =  $hospital_setting->get_hospital_settings();
		$first_steps = [
			0=>['text'=>'Manage Hospital Staff','link'=>'./staff'],
			1=>['text'=>'Manage Patient Records','link'=>'./patients'],
			2=>['text'=>'Learn how to use Eureka','link'=>'./tutorials'],
		];
	}
?>