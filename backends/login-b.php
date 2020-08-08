<?php
	
	require 'backends/classes/DbConnect.php';
	require 'backends/classes/FormValidator.php';
	require 'backends/classes/Registration.php';
	require 'backends/classes/Login.php';
	session_start();
	if (strstr($_GET['t'], 'director')) $login_type = 'director';
	else if (strstr($_GET['t'], 'staff')) $login_type = 'staff';
	if (isset($_POST['login'])) {
		$login = new Login();
		$form_val = new FormValidator();
		
		$identity  = $form_val->sanitizeInputs(strtolower($_POST['identity']));
		$pass  = $form_val->sanitizePasswords($_POST['pass']);
		// //Error handling
		$identity_err = $form_val->check_if_empty($identity, 'Email or Phone Number')['error'];
		$pass_err = $form_val->check_if_empty($pass, 'Password')['error'];
		$all_errors = [$identity_err,$pass_err];
		if (!$form_val->check_all_errors($all_errors)) {
			$is_valid_user  = $login->check_valid_identity($login_type,$identity,$pass);
			if (!$is_valid_user) return $identity_err = $form_val->unregistered_user();
			$is_valid_pass = $login->check_valid_pass($login_type,$identity,$pass);
			if (!$is_valid_pass) return $pass_err = $form_val->invalid_pass();
			$login->grant_login_access ($login_type);
		}
	}else {
		$identity  = '';
		$identity_err = '';
		$pass_err = '';
	}
?>