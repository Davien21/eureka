<?php
	
	require 'backends/classes/DbConnect.php';
	require 'backends/classes/FormValidator.php';
	require 'backends/classes/Signup.php';
	if (isset($_POST['signup'])) {
		$form = new FormValidator();
		//Declaration of details 
		$f_name  = ucwords($form->sanitizeInputs($_POST['f_name']));
		$l_name  = ucwords($form->sanitizeInputs($_POST['l_name']));
		$email  = strtolower($form->sanitizeInputs($_POST['email']));
		$phone  = $form->sanitizeInputs($_POST['phone']);
		$pass  = $form->sanitizePasswords($_POST['pass']);

		//Error handling
		$f_name_err = $form->check_string_errors($f_name, 'First Name');
		$l_name_err = $form->check_string_errors($l_name, 'Last Name');
		$email_err = $form->check_valid_email ($email,'Email Address')['error'];
		 
		$phone_err = $form->check_valid_phone_number($phone, "Phone Number");
		$pass_err = $form->check_password ($pass,'Password');

		$all_errors = [$f_name_err,$l_name_err,$email_err,$phone_err,$pass_err];
		//Db actions
		if (!$form->check_all_errors($all_errors)) {
			$signup = new Signup('users');
			$email_err = $signup->check_if_in_db ($email,'email');
			$phone_err = $signup->check_if_in_db ($phone,'phone');
			if (empty($email_err) && empty($phone_err)) {
				$is_successful = $signup->add_user($f_name,$l_name,$email,$phone,$pass);
				if (empty($is_successful)) $signup->login($email);
			}

		}
	}else {
		$f_name  = '';
		$l_name  = '';
		$email  = '';
		$phone  = '';

		$f_name_err  = '';
		$l_name_err  = '';
		$email_err  = '';
		$phone_err  = '';
		$pass_err  = '';
	}
?>