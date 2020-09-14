<?php
	$user_id = $_SESSION['user']; 
	require './director/controllers/classes/HospitalSetting.php';
	$hospital = new HospitalSetting($id);
	$hospital_ids = $hospital->get_ids_for_hospitals_directed($id);
	$accessibles = [];
	foreach ($hospital_ids as $value) {
		$id = $value['id'];
		$user = 'dir';
		array_push($accessibles, ['id'=>$id,'user'=>$user]);
	}
	function is_accessible($id,$user) {
		foreach ($GLOBALS['accessibles'] as $value) {
			if ($value['id'] === $id && $value['user'] === $user) return true;
		}
		return false;
	}
	$hospital_id = explode('=',$params[0])[1];
	$hospital_view = explode('=',$params[2])[1];
	$hospital_action = '';
	if (!empty($params[3])) $hospital_action = explode('=',$params[3])[1];
	if (!is_accessible($hospital_id,$hospital_user)) return header('Location:./');
?>