<?php
	
	if (isset($_POST['save'])) {
		$form = new FormValidator();
		//Declaration of hospital details 
		$activity_ms = $form->check_if_selected('activity-ms');
		$finance_ms = $form->check_if_selected('finance-ms');
		$patient_ms = $form->check_if_selected('patient-ms');

		if (empty($activity_ms) && empty($finance_ms) && empty($patient_ms)) 
			return $err = 'Please Select at least one option';
		$err = '';
		$all_errors = [$err];
		//Db actions
		if (!$form->check_all_errors($all_errors)) {
			require('classes/HospitalSetting.php');
			$setting = new HospitalSetting($id);
			$hospital_id = $setting->get_all_hospital_ids($id)[0]['id'];
			$err = $setting->add_settings($hospital_id,$patient_ms,$finance_ms,$activity_ms);
			if (empty($err)) {
				$progress = new UserProgress($id);
				$err = $progress->update_user_progress('getting-started','Setting up your first Hospital');
				print_r($err);
				// header('Location:./getting-started');
			};

		}
	}else {$err = '';}
?>