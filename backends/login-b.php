<?php
	
	require 'backends/classes/DbConnect.php';
	require 'backends/classes/FormValidator.php';
	require 'backends/classes/Login.php';
	if (isset($_POST['login'])) {
		$form_val = new FormValidator();
		
		$identity  = $form_val->sanitizeInputs(strtolower($_POST['identity']));
		$pass  = $form_val->sanitizePasswords($_POST['pass']);
		//Error handling
		$identity_err = $form_val->check_if_empty($identity, 'Email or Phone Number')['error'];
		$pass_err = $form_val->check_if_empty($pass, 'Password')['error'];
		$all_errors = [$identity_err,$pass_err];
		
		//Db actions
		if (!$form_val->check_all_errors($all_errors)) {
			$login = new Login('users');
			$identity_err  = $login->check_valid_identity($identity,$pass);
			$pass_err  = $login->check_valid_pass($identity,$pass);
			if (empty($identity_err) && empty($pass_err)) $login->grant_login ($identity);
		}
	}else {
		$identity  = '';
		$identity_err = '';
		$pass_err = '';
	}
?>