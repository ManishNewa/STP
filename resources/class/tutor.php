<?php

class Tutor{
	
	public static function count_all_tutors(){

		$sql = "SELECT *FROM tutor";			
		return Tutor::count_results($sql);
		
	}
	
	public static function count_by_subject($subject){

		$sql = "SELECT *FROM tutor WHERE t_subject = '$subject";				
		return Tutor::count_results($sql);
	
	}

	public static function count_by_all_conditions($subject, $grade, $availability){

		$sql = "SELECT *FROM tutor WHERE t_subject = '$subject' AND grade = '$grade' AND availability = '$availability'";			
		return Tutor::count_results($sql);
	
	}

	
	public static function count_available_tutors(){

		$sql = "SELECT *FROM tutor WHERE availability = 'yes'";			
		return Tutor::count_results($sql);
	
	}



	private static function count_results($sql){

		global $database;
		$result = $database->query($sql);
		return $count = mysqli_num_rows($result);

	}

	

	public function paginate_all_tutors($sql){


		return Tutor::tutor_results($sql);
		
	}

	public function find_all_tutors(){

		$sql = "SELECT *FROM tutor ";

		return Tutor::tutor_results($sql);
		
	}

	public function find_tutor_by_id($id){

		$sql = "SELECT *FROM tutor WHERE t_id = $id";

		return Tutor::tutor_results($sql);
		

	}

	public function find_tutor_by_email($email){

		$sql = "SELECT *FROM tutor WHERE t_email = '{$email}' ";

		return Tutor::tutor_results($sql);
		
	}
	public function find_tutor_by_subject($subject){

		$sql = "SELECT *FROM tutor WHERE t_subject = '{$subject}' ";

		return Tutor::tutor_results($sql);
		
	}
	
	public function find_tutor_by_subject_and_grade($subject, $grade){

		$sql = "SELECT *FROM tutor WHERE t_subject = '{$subject}' AND grade = '{$grade}' ";

		return Tutor::tutor_results($sql);
		
	}
	public function find_tutor_by_subject_and_availability($subject, $availability){

		$sql = "SELECT *FROM tutor WHERE t_subject = '{$subject}' AND availability = '{$availability}' ";

		return Tutor::tutor_results($sql);
		
	}


	public function find_tutor_by_all_conditions($subject, $grade, $availability){

		$sql = "SELECT *FROM tutor WHERE t_subject = '$subject' AND grade = '$grade' AND availability = '$availability' ";

		return Tutor::tutor_results($sql);

	}
	public function update_tutor($t_id, $t_fname, $t_lname, $t_address, $t_contact, $t_qualification, $t_subject, $availability, $grade, $image){
	
		$sql = "UPDATE tutor SET t_fname = '{$t_fname}', t_lname = '{$t_lname}', t_address = '{$t_address}', t_contact = '{$t_contact}', t_qualification = '{$t_qualification}', t_subject = '{$t_subject}', availability = '{$availability}', grade = '{$grade}', image = '{$image}' WHERE t_id = $t_id";

		return Tutor::tutor_results($sql);
	}

	public function update_tutor_profile($t_id, $t_fname, $t_lname, $t_address, $t_contact, $t_qualification, $t_subject, $grade){
	
		$sql = "UPDATE tutor SET t_fname = '{$t_fname}', t_lname = '{$t_lname}', t_address = '{$t_address}', t_contact = '{$t_contact}', t_qualification = '{$t_qualification}', t_subject = '{$t_subject}', grade = '{$grade}' WHERE t_id = $t_id";

		return Tutor::tutor_results($sql);
	}



	public function assign_tutor($t_id){

		$sql = "UPDATE tutor SET availability = 'no' WHERE t_id = $t_id";

		return Tutor::tutor_results($sql);

	}
	public function remove_tutor_assign($t_id){

		$sql = "UPDATE tutor SET availability = 'yes' WHERE t_id = $t_id";

		return Tutor::tutor_results($sql);

	}


	public function delete_tutors_by_id($id){

		$sql = "DELETE FROM tutor WHERE t_id = $id";

		return Tutor::tutor_results($sql);
		

	}

	private static function tutor_results($sql){

		global $database;

		// $sql.= "LIMIT 6 ";		
        // $sql.= "OFFSET {$paginate->offset()}";
		$result = $database->query($sql);	
		return $result;
	}


}

?>