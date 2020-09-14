<?php

	if (isset($_POST['register'])) {
    $form = new FormValidator();
		//Declaration of patient's details 
		$fname  = ucwords($form->sanitizeInputs($_POST['fname']));
		$lname  = ucwords($form->sanitizeInputs($_POST['lname']));
		$phone  = ucwords($form->sanitizeInputs($_POST['phone']));
		$address  = ucwords($form->sanitizeInputs($_POST['address']));
		$kin_name  = ucwords($form->sanitizeInputs($_POST['kin_name']));
		$kin_num  = ucwords($form->sanitizeInputs($_POST['kin_num']));
    
		//Error handling
		$fname_err = $form->check_string_errors($fname, "Patient's First Name");
		$lname_err = $form->check_string_errors($lname, "Patient's Last Name");
		$phone_err = $form->check_string_errors($phone, "Patient's Phone Number");
		$address_err = $form->check_string_errors($address, "Patient's Address");
    $kin_name_err = $form->check_string_errors($kin_name, "Next of kin's name");
    $kin_num_err = $form->check_valid_phone_number($kin_num, "Next of kin's number");
		$all_errors = [
      $fname_err,$lname_err,$phone_err,$address_err,$kin_name_err,$kin_num_err
		];
		//Db actions
		if (!$form->check_all_errors($all_errors)) {
      $patient = [];
      $patient['hospital_id'] = $hospital_id;
      $patient['fname'] = $fname;
      $patient['lname'] = $lname;
      $patient['phone'] = $phone;
      $patient['address'] = $address;
      $patient['kin_name'] = $kin_name;
      $patient['kin_num'] = $kin_num;
      require 'classes/Patient.php';
      $patient_cl = new Patient($user_id);
			$err = $patient_cl->addPatient($patient);
			if(!empty($err)) return $alert_info['success'] = $err['message'];
			$alert_info['success'] = 'You have successfully registered this patient';
		}
	}else {
    $fname  = '';
		$lname  = '';
		$phone  = '';
		$address  = '';
		$kin_name  = '';
		$kin_num  = '';

		$fname_err  = '';
		$lname_err  = '';
		$phone_err  = '';
		$address_err  = '';
		$kin_name_err  = '';
		$kin_num_err  = '';
	}
	$alert_info = [];
?>