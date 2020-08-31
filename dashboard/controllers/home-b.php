<?php
	require './director/controllers/classes/HospitalSetting.php';
	$hospital = new HospitalSetting($id);
	$hospital_ids = $hospital->get_ids_for_hospitals_directed($id);
	$hospital_profiles = [];
	foreach ($hospital_ids as $value) {
		$hospital_id = $value['id'];
		$hospital_profile = $hospital->get_hospital_profile($hospital_id);
		$hospital_profile['route'] = "./hospital?id={$hospital_id}&user=director&view=home";
		array_push($hospital_profiles, $hospital_profile);
	}

?>