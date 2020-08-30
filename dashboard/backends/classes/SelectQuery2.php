<?php
	class SelectQuery extends DbConnect
	{
		public function check_if_email_exists ($email,$table) {
			$sql = "SELECT 1 FROM ".$table." WHERE email = :email AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':email'=>$email]);
			// print_r($check_query->errorInfo());
			return $check_query->fetchColumn(); 
		}
		 
		public function check_if_hospital_exists ($name,$email) {
			$sql = "SELECT 1 
					FROM hospital_list
					WHERE name = :name
					AND email = :email
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':name'=>$name,':email'=>$email]);
			// print_r($check_query->errorInfo());
			return $check_query->fetchColumn(); 
		}
		 
		 

		public function get_hospital_id_with_identity($identity)	{
			$sql = "SELECT id 
					FROM hospital_list 
					WHERE (email = :identity OR phone = :identity)
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['identity'=>$identity]);
			echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC)['id'];
		}
		 
		 
		public function get_hospital_by_id($id)	{
			$sql = "SELECT * 
					FROM group_list 
					WHERE id = :id
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['id'=>$id]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function get_hospital_by_unique_id($unique_id)	{
			$sql = "SELECT * 
					FROM group_list 
					WHERE unique_id = :unique_id
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['unique_id'=>$unique_id]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC);
		}
	  
		 
		public function check_if_teacher_already_in_group($group_name,$identity,$hospital) {
			$sql = "SELECT 1 
					FROM teacher_list 
					WHERE groups LIKE CONCAT('%', :group_name, ' | ', :hospital ,'%')
					AND (email = :identity OR phone = :identity)
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['group_name'=>$group_name,'identity'=>$identity,'hospital'=>$hospital]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetchColumn();
		}
		 
		public function get_teacher_details ($id) {
			$sql = "SELECT * FROM teacher_list WHERE id =:id AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['id'=>$id]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function get_student_details ($id) {
			$sql = "SELECT * FROM student_list WHERE id =:id AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['id'=>$id]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function get_student_details_by_identity ($identity) {
			$sql = "SELECT * 
					FROM student_list 
					WHERE (email =:identity OR phone = :identity) 
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['identity'=>$identity]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function get_admin_details ($id) {
			$sql = "SELECT * FROM admin_list WHERE id =:id AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['id'=>$id]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function get_hospital_details ($id) {
			$sql = "SELECT * FROM hospital_list WHERE id =:id AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['id'=>$id]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function check_for_teacher_groups ($id) {
			$sql = "SELECT groups FROM teacher_list WHERE id =:id AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['id'=>$id]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC)['groups'];
		}
		public function check_for_student_groups ($id) {
			$sql = "SELECT groups FROM student_list WHERE id =:id AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['id'=>$id]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC)['groups'];
		}
	
		public function get_assignment_file_name($id)
		{
			$sql = "SELECT teacher_attach FROM assignment_list
					WHERE id =:id 
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['id'=>$id]);
			// echo print_r($check_query->errorInfo());
			// print_r($record_array = $check_query->fetch(PDO::FETCH_ASSOC));
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC)['teacher_attach'];
		}
		public function get_lesson_file_name($id)
		{
			$sql = "SELECT teacher_attach FROM lesson_list
					WHERE id =:id 
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['id'=>$id]);
			// echo print_r($check_query->errorInfo());
			// print_r($record_array = $check_query->fetch(PDO::FETCH_ASSOC));
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC)['teacher_attach'];
		}
		public function get_assignment_submit_file_name($assignment_id)
		{
			$sql = "SELECT student_attach 
					FROM assignment_submissions
					WHERE assignment_id =:assignment_id 
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['assignment_id'=>$assignment_id]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC)['student_attach'];
		}
		 
	 
		public function get_token_details($token)
		{
			$sql = "SELECT *
					FROM invite_tokens 
					WHERE token = :token
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['token'=>$token]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function check_if_token_exists($token) {
			$sql = "SELECT 1
					FROM invite_tokens 
					WHERE token =:token
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['token'=>$token]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetchColumn();
		}
		 
		 
		public function check_if_assignment_already_submitted ($student_id,$assignment_id) {
			$sql = "SELECT 1
					FROM assignment_submissions
					WHERE student_id = :student_id 
					AND assignment_id = :assignment_id 
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['student_id'=>$student_id,'assignment_id'=>$assignment_id]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetchColumn();
		}
		 
		public function confirm_user_pass ($user_id,$pass) {
			$sql = "SELECT pass
					FROM user_list 
					WHERE id = :user_id ";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['user_id'=>$user_id]);
			$record_array = $check_query->fetch(PDO::FETCH_ASSOC);
			// echo print_r($check_query->errorInfo());

			return (password_verify($pass, $record_array['pass']));
		}
		public function confirm_admin_pass ($admin_id,$pass) {
			$sql = "SELECT pass
					FROM hospital_list 
					WHERE id = :admin_id ";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['admin_id'=>$admin_id]);
			$record_array = $check_query->fetch(PDO::FETCH_ASSOC);
			// echo print_r($check_query->errorInfo());

			return (password_verify($pass, $record_array['pass']));
		}
	 
		 
		public function get_hospital_list () {
			$sql = "SELECT name FROM hospital_list WHERE status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute([]);
			// echo print_r($check_query->errorInfo());
			return $record_array = $check_query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function get_login_identity ($identity,$table) {
			$sql = "SELECT * 
					FROM {$table}
					WHERE ((email = :input) 
					OR (phone = :input)) 
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$identity]);
			// print_r($check_query->errorInfo());
			$record_array = $check_query->fetch(PDO::FETCH_ASSOC);
			return $record_array;
		}
		public function check_if_role_matches ($identity,$role,$table) {
			$sql = "SELECT * 
					FROM {$table} 
					WHERE ( (email = :input) OR (phone = :input) ) 
					AND role = :role AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$identity,':role'=>$role]);
			// print_r($check_query->errorInfo());
			$record_array = $check_query->fetchColumn();
			return $record_array;
		}
		public function check_if_passwords_match ($identity,$password,$table='user_list') {
			$sql = "SELECT * FROM ".$table." WHERE email = :input OR phone = :input";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$identity]);
			$record_array = $check_query->fetch(PDO::FETCH_ASSOC);
			// echo print_r($check_query->errorInfo());

			return (password_verify($password, $record_array['pass']));
		}
	 
		 
		 
	}
?>