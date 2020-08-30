<?php
	require 'classes/HospitalSetting.php';
	$hospital = new HospitalSetting($id);
	$hospital_ids = $hospital->get_all_hospital_ids($id);
	$hospital_profiles = [];
	foreach ($hospital_ids as $value) {
		$hospital_id = $value['id'];
		$hospital_profile = $hospital->get_hospital_profile($hospital_id);
		$hospital_profile['patient_no'] = 0;
		$hospital_profile['staff_no'] = 0;
		array_push($hospital_profiles, $hospital_profile);
	}

?>