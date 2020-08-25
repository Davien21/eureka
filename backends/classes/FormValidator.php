<?php
	/**
	 * This Class is responsible for all form validations
	 */
	class FormValidator 
	//extends DBConnect
	{
		public function __toString () {
			return "Name: ".__CLASS__."<br>This Object allows you to perform input validations";
		}
		public function sanitizeInputs($value,$ucf=false) {
			$value = trim($value);
			$value = filter_var($value, FILTER_SANITIZE_STRING);
			if ($ucf === true) {
				$value = ucfirst($value);
			}
			return $value;
		}
		public function sanitizePasswords($value) {
			$value = htmlspecialchars($value);
			return $value;
		}
		public function check_if_selected ($post_variable) {
			if (isset($_POST[$post_variable])) {
				return $this->sanitizeInputs($_POST[$post_variable]);
			}else {
				return '';
			}
		}
		public function alpha_num_rand ($str_len,$dataset = '') {
			// String of all possible characters 
		    $possibles = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
		    // Shuffle $possibles and returns string of specific length 
		    if (!empty($dataset)) {

		    }else $result = substr(str_shuffle($possibles),0, $str_len); 
		    return $result;
		}
		public function check_valid_date ($variable,$label) {
			if(check_if_empty($variable,$label)['status']) {
				return check_if_empty($variable,$label);
			}else {
				$date_given = date_create($variable);
				if (is_object($date_given) and get_class($date_given) === 'DateTime') {
					$date = new DateTime($variable);
					$now = new DateTime('today');
					if($date < $now ) {
						return ['status'=>true,'error'=>'Cannot use a date in  the past'];
					}
				}else {
					return ['status'=>true,'error'=>'Invalid Input received'];
				}

			}
		}
		public function check_if_deadline_passed ($date) {
			$date = new DateTime($date);
			$now = new DateTime('today');
			if($date < $now ) {
				return ['status'=>true,'error'=>'Deadline reached'];
			}
		}
		public function check_if_empty ($variable,$label) {
			if(empty($variable)) {
				return ['status'=>true,'error'=>$label. " is required"];
			}
		}
		public function check_string_length ($variable,$label) {
			if (strlen($variable) < 3) {
				$error_status = true;
				return ['status'=>$error_status,'error'=>$label. " is too short"];
			}
		}
		public function check_comments_length ($variable) {
			if (strlen($variable) > 250) {
				$error_status = true;
				return ['status'=>$error_status,'error'=>'Too many characters'];
			}
		}
		public function check_if_string_contains_number ($variable,$label) {
			$var_as_array = str_split($variable);
			for ($i = 0;$i<count($var_as_array);++$i) {
				if (is_numeric($var_as_array[$i])) {
					$error_status = true;
					return ['status'=>$error_status,'error'=>"Numbers are not allowed"];
					break;
				}
			}
		}
		//refactor string errors for different types:
		public function check_string_errors ($variable,$label) {
			if($this->check_if_empty($variable,$label)['status']) {
				return $this->check_if_empty($variable,$label)['error'];
			}
			else if($this->check_string_length ($variable,$label)['status']) {
				return $this->check_string_length ($variable,$label)['error'];
			}
		}
		public function check_comments ($variable,$label) {
			if(check_if_empty($variable,$label)['status']) {
				return check_if_empty($variable,$label)['error'];
			}
			else if(check_comments_length($variable)['status']) {
				return check_comments_length($variable)['error'];
			}
		}
		public function check_word_count ($variable,$label) {
			if (str_word_count($variable)>1) {
				$result = ['status'=>true, 'error'=>'Only one word allowed'];
				return $result;
			}
		}
		public function check_number_length ($variable,$label) {
			if (strlen((string) $variable) < 11) {
				$result = ['status'=>true, 'error'=>$label. " is too short"];
				return $result;
			}else if (strlen((string) $variable) > 11) {
				$result = ['status'=>true, 'error'=>$label. " is too long"];
				return  $result;
			}
		}
		public function check_valid_email ($variable,$label) {
			if ($this->check_if_empty($variable,$label)['status']) {
				return $this->check_if_empty($variable,$label);
			}else if(!filter_var($variable, FILTER_VALIDATE_EMAIL)) {
				$error_status = true;
				return ['status'=>$error_status,'error'=>'Invalid email address'];
			}
		}
		public function check_valid_phone_number ($variable,$label) {
			if($this->check_if_empty($variable,$label)['status']) {
				return $this->check_if_empty($variable,$label)['error'];
			}
			else {
				 $pattern = '/^(\+234|0)[7-9]{1}(0|1)\d{8}$/';
				 $error_status = true;
			    if(!( preg_match($pattern,$variable))) {
			        return ['status'=>$error_status,'error'=>"Please Input a Valid ".$label]['error']; 
				}
			}
		}
		 
		public function check_upload_status ($variable,$label) {
			if (check_if_empty($variable,$label)['status']) {
				$error_status = true;
				return ['status'=>$error_status,'error'=>"Please Upload a ".$label]['error'];
			}
		}
		public function check_all_errors ($array_of_errors) {
			$any_errors;
			foreach ($array_of_errors as $key => $value) {
				if (!empty($value)) {
					$any_errors = true;
					break;
				}else if(empty($value)) {
					$any_errors = false;
				}
			}
			return $any_errors;
		}
		public function check_if_numeric ($variable,$label) {
			if (!is_numeric($variable)) {
				return ['status'=>false,'error'=>$label." is not a valid number"]['error'];
			}
		}
		public function check_number($variable,$label) {
			if(check_if_empty($variable,$label)['status']) {
				return check_if_empty($variable,$label)['error'];
			}else {
				if(!is_numeric($variable)) {
					return ['status'=>false,'error'=>$label." is not a valid number"]['error'];
				}
			}
		}
		 
		public function check_password ($pass,$label) {
			if(empty($pass)) {
				$result = ['status'=>true, 'error'=>("{$label} is required")];
				return $result['error'];
			}else if ($this->check_string_length($pass, $label)['status']) {
				return "{$label} is too short"; 
			}else if (!$this->check_if_string_contains_number($pass,$label)['status']) {
				return $result =  $label. " must have at least one number!";
			}
		}
		public function check_passwords ($pass_1,$pass_2) {
			if(empty($pass_1) or empty($pass_2)) {
				$result = ['status'=>true, 'error'=>('Please Fill in both passwords')];
				return $result['error'];
			}else if ($pass_1 !== $pass_2) {
				return 'Passwords do not match!';
			}else if ($this->check_string_length($pass_2, $label)['status']) {
				return 'Password is too short'; 
			}else if (!$this->check_if_string_contains_number($pass_2,$label)['status']) {
				return $result =  $label. " must have at least one number!";
			}
		}
		public function hashPassword ($password) {
			return password_hash($password, PASSWORD_DEFAULT);
		}
		 
		// Error messages
		
		//invalid db actions
		public function check_if_email_exists ($email,$table,$database) {
			$select_query = new SelectQuery($database);
			$email_exists = $select_query->check_if_email_exists($email,$table);
			// var_dump($email_exists);
			if ($email_exists) {
				$error_status = true;
				return ['status'=>$error_status,'error'=>'This email is already registered'];
			}
		}
		public function check_email_in_db ($email,$table,$database) {
			if (check_valid_email($email,'Email')['status']) {
				return check_valid_email($email,'Email')['error'];
			}else if (check_if_email_exists ($email,$table,$database)['status']) {
				return check_if_email_exists ($email,$table,$database);
			}
		}
		public function grant_login_access ($identity,$table,$database) {
			$select_query = new SelectQuery($database);
			$login_exists = $select_query -> get_login_identity ($identity,$table);
			return $login_exists;
		}
		public function check_if_passwords_match ($identity,$password,$table,$database) {
			if (check_if_empty($password,'Password')['status']) {
				return check_if_empty($variable,$label)['error'];
			}else {
				$select_query = new SelectQuery($database);
				$password_matches = $select_query->check_if_passwords_match($identity,$identity,$password,$table);
				if (!$password_matches) {
					return ['status'=>true,'error'=>'Incorrect Password'];
				}
			}
		}
		public function check_if_role_matches($identity,$role,$table) {
			$select_query = new SelectQuery('academia');
			$role_matches = $select_query->check_if_role_matches($identity,$role,$table);
			return $role_matches;
		}
		 
		public function is_value_in_db ($value,$column_name,$table,$database,$extra_condition='') {
			$select_query = new SelectQuery($database);
			$does_group_exist = $select_query->check_if_exists($value,$column_name,$table,$extra_condition);
			return $does_group_exist;
		}
		public function make_token ($min,$max,$table,$database) {
			$select_query = new SelectQuery($database);
			$token = mt_rand($min,$max);
			$token_exists = $select_query->check_if_exists($token,'invite_tokens','token'," AND status = 'enabled'");
			if ($token_exists) {
				make_token ($min,$max,$table,$database);
			}else {
				return $token;
			}

			// return mt_rand($min,$max);
		}
		 
	}
?>