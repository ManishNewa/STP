<?php
	
	class Assignment{

		public function count_all_assign(){

			$sql = "SELECT *FROM assign";

			$result = Assignment::assign_results($sql);
			return mysqli_num_rows($result);

		}

		public function count_tutors_assigned(){

			$sql = "SELECT DISTINCT t_id FROM assign WHERE assignment='true'";

			$result = Assignment::assign_results($sql);
			return mysqli_num_rows($result);

		}
		public function count_students_assigned(){

			$sql = "SELECT DISTINCT s_id FROM assign WHERE assignment='true'";

			$result = Assignment::assign_results($sql);
			return mysqli_num_rows($result);

		}

		public function count_new_enrolls(){

			$sql = "SELECT *FROM assign WHERE new_enrolls = 'true'";

			$result = Assignment::assign_results($sql);

			return mysqli_num_rows($result);

		}

		public function count_new_assigns($t_id){

			$sql = "SELECT *FROM assign WHERE t_id = $t_id AND notify = 'true'";

			$result = Assignment::assign_results($sql);

			return mysqli_num_rows($result);

		}

		public function show_all_assign(){

			
			$sql = "SELECT * FROM assign DESC assign_id ";

			return Assignment::assign_results($sql);

		}
		
		public function show_all_by_tutor($t_id){

			
			$sql = "SELECT * FROM assign WHERE t_id = $t_id ";

			return Assignment::assign_results($sql);

		}


		public function paginate_all_assign($sql){

			return Assignment::assign_results($sql);
			
		}

		public function check_assign($s_id){

			$sql = "SELECT assignment FROM assign WHERE s_id = $s_id";

			$assigned_query = Assignment::assign_results($sql);

			return  mysqli_num_rows($assigned_query);
			

		}

		public function check_notify($t_id, $s_id){

			$sql = "SELECT *FROM assign WHERE t_id = $t_id AND s_id = $s_id AND notify = 'true'";

			$assigned_query = Assignment::assign_results($sql);

			return  mysqli_num_rows($assigned_query);
			

		}



		public function assign($t_id, $s_id){

			$sql = "INSERT INTO assign (t_id,s_id,assignment,new_enrolls) VALUES ($t_id, $s_id,'false','true')";

			return Assignment::assign_results($sql);

		}

		public function add_assign($assign_id){

			$sql = "UPDATE assign SET assignment = 'true', new_enrolls = 'false', notify ='true' WHERE assign_id = {$assign_id} ";

			Assignment::assign_results($sql);

			return Assignment::get_tutor_from_assign($assign_id);


		}

		public function remove_assign($assign_id){

			$sql = "UPDATE assign SET assignment = 'false' WHERE assign_id = {$assign_id} ";

			Assignment::assign_results($sql);
		
			return Assignment::get_tutor_from_assign($assign_id);

			
		}

		public function remove_notify($t_id, $s_id){

			$sql = "UPDATE assign SET notify = 'false' WHERE t_id = {$t_id} AND s_id = {$s_id} ";

			Assignment::assign_results($sql);
		
			// return Assignment::get_tutor_from_assign($assign_id);

			
		}

		public function delete($assign_id){

			
			$t_id = Assignment::get_tutor_from_assign($assign_id);

			$sql = "DELETE FROM assign WHERE assign_id = $assign_id";

			Assignment::assign_results($sql);

			return $t_id;

		}

		public static function get_tutor_from_assign($assign_id){

			$sql = "SELECT *FROM assign WHERE assign_id = $assign_id";
			
			$tutor_found = Assignment::assign_results($sql);

			while($tutor = mysqli_fetch_array($tutor_found)){

				return $t_id = $tutor['t_id'];

			}


		}

		public static function assign_results($sql){

			global $database;
			$results = $database->query($sql);
			return $results;

		}


	}



?>