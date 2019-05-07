<?php

	class Student{

		public static function count_all_students(){

			$sql = "SELECT *FROM student";			
			return Student::count_results($sql);
			
		}
		
		private static function count_results($sql){

			$result = Student::student_results($sql);
			return $count = mysqli_num_rows($result);

		}		

		public function paginate_all_students($sql){

			return Student::student_results($sql);

		}

		public function find_all_students(){

			$sql = "SELECT *FROM student";

			return Student::student_results($sql);

		}

		public function find_student_by_id($id){

			$sql = "SELECT *FROM student where s_id = $id";

			return Student::student_results($sql);

		}

		public function find_student_by_email($email){

			$sql = "SELECT *FROM student where s_email = '{$email}'";

			return Student::student_results($sql);

		}

		public function update_students($s_id, $s_fname, $s_lname, $s_address, $s_contact , $s_grade){

			$sql = "UPDATE student SET s_fname = '{$s_fname}', s_lname = '{$s_lname}', s_address = '{$s_address}', s_contact = '{$s_contact}', s_grade = '{$s_grade}' WHERE s_id = $s_id";

			return Student::student_results($sql);

		}

		public function delete_student_by_id($id){

			$sql = "DELETE FROM student where s_id = $id";

			return Student::student_results($sql);

		}

		public static function student_results($sql){

			global $database;

			$result = $database->query($sql);
			return $result;


		}

	}

?>