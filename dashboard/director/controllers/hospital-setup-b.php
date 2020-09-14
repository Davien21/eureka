<?php
	require 'classes/HospitalSetup.php';
	if (isset($_POST['register'])) {
		$form = new FormValidator();
		//Declaration of hospital details 
		$name  = ucwords($form->sanitizeInputs($_POST['name']));
		$address  = ucwords($form->sanitizeInputs($_POST['address']));

		//Error handling
		$name_err = $form->check_string_errors($name, 'Hospital Name');
		$address_err = $form->check_string_errors($address, 'Hospital Address');
		$all_errors = [$name_err,$address_err];

		//Db actions
		if (!$form->check_all_errors($all_errors)) {
			$hospital = new HospitalSetup('hospitals');
			$name_err = $hospital->check_repeated_hospital ($id,$name);
			if (empty($name_err)) {
				$invite_key = $hospital->get_random_id ('invite_key');
				$error = $hospital->add_hospital($id,$name,$address,$invite_key);
				if (empty($error)) {
					$hospital_no = $user['hospital_no'];
					$user_profile->partial_update('hospital_no',$hospital_no+1);
					header('Location:./');
				}
			}

		}
	}else {
		$name  = '';
		$address  = '';

		$name_err  = '';
		$address_err  = '';
	}
?>