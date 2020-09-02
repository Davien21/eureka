<?php
	require './director/controllers/classes/HospitalSetting.php';
	$hospital = new HospitalSetting($id);
	$hospital_ids = $hospital->get_ids_for_hospitals_directed($id);
	$accessibles = [];
	foreach ($hospital_ids as $value) {
		$id = $value['id'];
		$user = 'director';
		array_push($accessibles, ['id'=>$id,'user'=>$user]);
	}
	function is_accessible($id,$user) {
		foreach ($GLOBALS['accessibles'] as $value) {
			if ($value['id'] === $id && $value['user'] === $user) return true;
		}
		return false;
	}
	
?>