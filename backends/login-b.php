<?php
	
	require 'backends/classes/DbConnect.php';
	// require 'database/classes/SelectQuery.php';
	// require 'database/classes/UpdateQuery.php';
	require 'backends/classes/FormValidator.php';
	require 'backends/classes/Registration.php';
	require 'backends/classes/Login.php';
	session_start();

	// echo $form_validator->alpha_num_rand(10);
	// $login->director_login();
	if (strstr($_GET['t'], 'director')) $login_type = 'director';
	else if (strstr($_GET['t'], 'staff')) $login_type = 'staff';
	foreach ($_SERVER as $key => $value) {
		echo "{$key} -> {$value}<br>";
	}
	if (isset($_POST['login'])) {
		$login = new Login();
		$form_val = new FormValidator();
		// echo "string";
		// //Declarations

		
		$identity  = $form_val->sanitizeInputs(strtolower($_POST['identity']));
		$pass  = $form_val->sanitizePasswords($_POST['pass']);
		
		// //Error handling
		$identity_err = $form_val->check_if_empty($identity, 'Email or Phone Number')['error'];
		$pass_err = $form_val->check_if_empty($pass, 'Password')['error'];
		$all_errors = [$identity_err,$pass_err];
		if (!$form_val->check_all_errors($all_errors)) {
			// echo $form_val->hashPassword($pass);
			$is_valid_login  = $login->check_valid_login($login_type,$identity,$pass);
			if ($is_valid_login) {
				$identity_err = $form_val->unregistered_user();
			}else {

			}
			
			// $is_valid_admin = grant_login_access ($identity,'admin_list','worldof_wow');
			// if (!empty($is_valid_admin)) {
			// 	$correct_pass = $select_query->check_if_passwords_match ($identity,$pass,'admin_list','worldof_wow');
			// 	if (!$correct_pass) {
			// 		$pass_err = 'Wrong Password';
			// 	}else {
			// 		$_SESSION['user'] = 'admin';
			// 		$_SESSION['id'] = $is_valid_admin['id'];
			// 		header('Location:admin/home.php');
			// 	}
			// }else {
			// 	$identity_err = 'Invalid identity Address';
			// }
		}
	}else {
		$identity  = '';
		$identity_err = '';
		$pass_err = '';
	}
?>