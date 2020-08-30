<?php
	require 'classes/HospitalSetup.php';
	if (isset($_POST['register'])) {
		$form = new FormValidator();
		//Declaration of hospital details 
		$name  = ucwords($form->sanitizeInputs($_POST['name']));
		$address  = ucwords($form->sanitizeInputs($_POST['address']));
		$email  = strtolower($form->sanitizeInputs($_POST['email']));
		$phone  = $form->sanitizeInputs($_POST['phone']);

		//Error handling
		$name_err = $form->check_string_errors($name, 'Hospital Name');
		$address_err = $form->check_string_errors($address, 'Hospital Address');
		$email_err = $form->check_valid_email ($email,'Email Address')['error'];
		 
		$phone_err = $form->check_valid_phone_number($phone, "Phone Number");

		$all_errors = [$name_err,$address_err,$email_err,$phone_err];
		//Db actions
		if (!$form->check_all_errors($all_errors)) {
			$register = new HospitalSetup('hospitals');
			$email_err = $register->check_if_in_db ($email,'email');
			$phone_err = $register->check_if_in_db ($phone,'phone');
			if (empty($email_err) && empty($phone_err)) {
				$invite_key = $register->get_random_id ('invite_key');
				$error = $register->add_hospital($id,$name,$address,$email,$phone,$invite_key);
				if (empty($error)) {
					$progress = new UserProgress($id);
					$error = $progress->add_user_progress('select-hospital-tools');
					if (empty($error)) header('Location:./select-hospital-tools');
				}
			}

		}
	}else {
		$name  = '';
		$address  = '';
		$email  = '';
		$phone  = '';

		$name_err  = '';
		$address_err  = '';
		$email_err  = '';
		$phone_err  = '';
		$pass_err  = '';
	}
?>