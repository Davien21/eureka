<?php
	// echo 'insert Query connected';
	class InsertQuery extends DbConnect
	{	
		public function add_school($name,$email) {
			$sql = "INSERT INTO school_list(name,email)
					VALUES(:name,:email)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute(['name'=>$name,'email'=>$email]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_admin($f_name,$l_name,$gender,$school_id,$email,$phone,$pass) {
			$sql = "INSERT INTO admin_list(f_name,l_name,gender,school_id,email,phone,pass)
					 VALUES(:f_name,:l_name,:gender,:school_id,:email,:phone,:pass)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'f_name'=>$f_name,'l_name'=>$l_name,'gender'=>$gender,
					'school_id'=>$school_id, 'email'=>$email,'phone'=> $phone,'pass'=>$pass
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_invite_accept($identity,$role,$group_id,$inviter_id,$inviter_role) {
			$sql = "INSERT INTO accepted_invitation_list(identity,role,group_id,inviter_id,inviter_role)
					 VALUES(:identity,:role,:group_id,:inviter_id,:inviter_role)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'identity'=>$identity,'role'=>$role,'group_id'=>$group_id,
					'inviter_id'=>$inviter_id, 'inviter_role'=>$inviter_role
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_invite_reject($identity,$role,$group_id,$inviter_id,$inviter_role) {
			$sql = "INSERT INTO rejected_invitation_list(identity,role,group_id,inviter_id,inviter_role)
					 VALUES(:identity,:role,:group_id,:inviter_id,:inviter_role)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'identity'=>$identity,'role'=>$role,'group_id'=>$group_id,
					'inviter_id'=>$inviter_id, 'inviter_role'=>$inviter_role
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_to_teacher_commissions($teacher_id,$group_id,$commission) {
			$sql = "INSERT INTO teacher_commissions(teacher_id,group_id,commission)
					 VALUES(:teacher_id,:group_id,:commission)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'teacher_id'=>$teacher_id,'group_id'=>$group_id,'commission'=>$commission
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_teacher($f_name,$l_name,$gender,$email,$phone,$pass) {
			$sql = "INSERT INTO teacher_list(f_name,l_name,gender,email,phone,pass)
					 VALUES(:f_name,:l_name,:gender,:email,:phone,:pass)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'f_name'=>$f_name,'l_name'=>$l_name,'gender'=>$gender,
					'email'=>$email,'phone'=> $phone,'pass'=>$pass
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_student($f_name,$l_name,$gender,$email,$phone,$pass) {
			$sql = "INSERT INTO student_list(f_name,l_name,gender,email,phone,pass)
					 VALUES(:f_name,:l_name,:gender,:email,:phone,:pass)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'f_name'=>$f_name,'l_name'=>$l_name,'gender'=>$gender,
					'email'=>$email,'phone'=> $phone,'pass'=>$pass
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"School details Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function insert_quiz_submission ($arr) {
			$sql = "INSERT INTO quiz_submissions(school_id,group_id,student_id,teacher_id,quiz_id,score,title,question_count)
					 VALUES(:school_id,:group_id,:student_id,:teacher_id,:quiz_id,:score,:title,:question_count)";
			$insert_query = PDO::prepare($sql);

			$insert_query -> 
				execute([
					'school_id'=>$arr['school_id'],'group_id'=>$arr['group_id'],
					'student_id'=>$arr['student_id'],'teacher_id'=>$arr['teacher_id'],
					'quiz_id'=>$arr['quiz_id'],'score'=>0,
					'title'=>$arr['title'],'question_count'=>$arr['question_count']
				]);
			if ($insert_query ->errorCode() == 0) {
				return ['data'=>'', 'status'=>true, 'message'=>"Quiz submitted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);

				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_group($school_id,$name,$fee,$duration,$description) {
			$sql = "INSERT INTO group_list(school_id,name,fee,duration,description)
					 VALUES(:school_id,:name,:fee,:duration,:description)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'school_id'=>$school_id, 'name'=> $name,'fee'=> $fee,
					'duration'=> $duration,'description'=> $description
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"New Group Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"New Group Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function make_new_quiz($school_id,$teacher_id,$group_id,$title) {
			$sql = "INSERT INTO quiz_list(school_id,teacher_id,group_id,title)
					 VALUES(:school_id,:teacher_id,:group_id,:title)";
				
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'school_id'=>$school_id, 'teacher_id'=> $teacher_id,
					'group_id'=>$group_id, 'title'=> $title
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"New Group Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"New Quiz Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_quiz_question ($school_id,$group_id,$question_no,$quiz_id,$question_data) {
			$sql = "INSERT INTO quiz_questions(school_id,quiz_id,group_id,question_no,question_data)
					 VALUES(:school_id,:quiz_id,:group_id,:question_no,:question_data)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'school_id'=>$school_id,'quiz_id'=>$quiz_id,'question_no'=>$question_no,
					'group_id'=>$group_id,'question_data'=>$question_data
				]);
			if ($insert_query ->errorCode() == 0) {
				return ['data'=>'','status'=>true, 'message'=>"Quiz question Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function submit_assignment ($arr) {
			$sql = "INSERT INTO assignment_submissions(																									assignment_id,school_id,group_id,teacher_id,
						answer,student_id,student_attach
					)
					 VALUES(
						 :assignment_id,:school_id, :group_id, :teacher_id,
						 :answer, :student_id, :student_attach
					)";
			$insert_query = PDO::prepare($sql);

			$insert_query -> 
				execute([
					'school_id'=>$arr['school_id'],'assignment_id'=>$arr['assignment_id'],
					'group_id'=>$arr['group_id'],'teacher_id'=>$arr['teacher_id'],
					'answer'=>$arr['answer'],
					'student_id'=>$arr['student_id'], 'student_attach'=>$arr['student_attach']
				]);
			if ($insert_query ->errorCode() == 0) {
				return ['data'=>'', 'status'=>true, 'message'=>"Assignment submitted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function submit_quiz ($arr) {
			$sql = "INSERT INTO quiz_submissions(school_id,student_id,teacher_id,quiz_id,score,group_given,title,question_count)
					 VALUES(
						:school_id,:student_id,:teacher_id,:quiz_id,:score,:group_given,:title,:question_count
					)";
			$insert_query = PDO::prepare($sql);

			$insert_query -> 
				execute([
					'school_id'=>$arr['school_id'], 'group_given'=>$arr['group_given'],
					'title'=>$arr['title'],'student_id'=>$arr['student_id'],'teacher_id'=>$arr['teacher_id'],
					'score'=>$arr['score'],'quiz_id'=>$arr['quiz_id'],'question_count'=>$arr['question_count']
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"Attachment Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"Quiz Recorded / Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_teacher_attachment($arr) {
			$sql = "INSERT INTO 
					teacher_attachments
					(school_id,teacher_id,attachment_name,attachment_group,file_name)
					VALUES(:school_id,:teacher_id,:attachment_name,:attachment_group,:file_name)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'school_id'=>$arr['school_id'],'teacher_id'=>$arr['teacher_id'],'attachment_name'=>$arr['attachment_name'],
					'attachment_group'=>$arr['attachment_group'],'file_name'=>$arr['file_name']
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"Attachment Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"Attachment Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_student_attachment($arr) {
			$sql = "INSERT INTO 
					student_attachments
					(school_id,student_id,attachment_name,attachment_group,file_name)
					VALUES(:school_id,:student_id,:attachment_name,:attachment_group,:file_name)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'school_id'=>$arr['school_id'],'student_id'=>$arr['student_id'],'attachment_name'=>$arr['attachment_name'],
					'attachment_group'=>$arr['attachment_group'],'file_name'=>$arr['file_name']
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"Attachment Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"Attachment Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_assignment($array_of_info) {
			$school_id = $array_of_info['school_id'];
			$teacher_id = $array_of_info['teacher_id'];
			$group_id = $array_of_info['group_id'];
			$title = $array_of_info['title'];
			$details = $array_of_info['details'];
			$lesson_id = $array_of_info['lesson_id'];
			$teacher_attach = $array_of_info['teacher_attach'];
			$deadline = $array_of_info['deadline'];
			$sql = "INSERT INTO assignment_list(school_id,teacher_id,group_id,title,details,lesson_id,teacher_attach,deadline)
					 VALUES(:school_id,:teacher_id,:group_id,:title,:details,:lesson_id,:teacher_attach,:deadline)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'school_id'=>$school_id,'teacher_id'=>$teacher_id,'group_id'=>$group_id,
					'title'=>$title,'details'=>$details,'lesson_id'=>$lesson_id,'teacher_attach'=>$teacher_attach,'deadline'=>$deadline
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"Assignment info Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"Assignment info Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_lesson($array_of_info) {
			$school_id = $array_of_info['school_id'];
			$teacher_id = $array_of_info['teacher_id'];
			$group_id = $array_of_info['group_id'];
			$title = $array_of_info['title'];
			$details = $array_of_info['details'];
			$teacher_attach = $array_of_info['teacher_attach'];
			$sql = "INSERT INTO lesson_list(school_id,teacher_id,group_id,title,details,teacher_attach)
					 VALUES(:school_id,:teacher_id,:group_id,:title,:details,:teacher_attach)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'school_id'=>$school_id,'teacher_id'=>$teacher_id,'group_id'=>$group_id,
					'title'=>$title,'details'=>$details,'teacher_attach'=>$teacher_attach,
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"New Group Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"Lesson info Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function add_teacher_invite_token($group_id,$commission,$duration,$identity,$token,$inviter_id,$inviter_role) {
			$sql = "INSERT INTO teacher_invite_tokens(group_id,commission,duration,identity,token,inviter_id,inviter_role)
					VALUES(:group_id,:commission,:duration,:identity,:token,:inviter_id,:inviter_role)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
						'group_id'=>$group_id,'inviter_id'=>$inviter_id,
						'commission'=>$commission,'duration'=>$duration,
						'identity'=>$identity,'token'=>$token,'inviter_role'=>$inviter_role
					]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"New Group Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"New Token Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		
		public function add_student_invite_token($group_id,$identity,$token,$inviter_id,$inviter_role) {
			$sql = "INSERT INTO student_invite_tokens(group_id,identity,token,inviter_id,inviter_role)
					VALUES(:group_id,:identity,:token,:inviter_id,:inviter_role)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
						'group_id'=>$group_id,'inviter_id'=>$inviter_id,
						'identity'=>$identity,'token'=>$token,'inviter_role'=>$inviter_role
					]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"New Group Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"New Token Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function register_teacher_token($group_id,$token) {
			$sql = "INSERT INTO teacher_invite_tokens(group_id,token)
					VALUES(:group_id,:token)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'group_id'=>$group_id,
					'token'=>$token
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"New Token Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"New Token Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		public function register_student_token($group_id,$token) {
			$sql = "INSERT INTO student_invite_tokens(group_id,token)
					VALUES(:group_id,:token)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'group_id'=>$group_id,
					'token'=>$token
				]);
			if ($insert_query ->errorCode() == 0) {
				// print_r(['data'=>'','status'=>true, 'message'=>"New Token Inserted Successfully"]);
				return ['data'=>'','status'=>true, 'message'=>"New Token Inserted Successfully"];
			}
			else {
				$error = $insert_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
	 
		
		
		
	}

?>
