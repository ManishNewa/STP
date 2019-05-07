<?php

class User{


	public function count_all_users(){

		$sql = "SELECT *FROM user";

		return User::count_results($sql);
		

	}	
	
	private static function count_results($sql){

		global $database;
		$result = $database->query($sql);
		return $count = mysqli_num_rows($result);

	}

	public function find_user_by_email($email){

		$sql = "SELECT *FROM user WHERE u_email = '$email'";

		return User::user_results($sql);
		

	}	
	
	public function update_user($username,$email){

	}

	public function delete_users_by_email($email){

		$sql = "DELETE FROM user WHERE u_email = '$email'";

		return User::user_results($sql);
		

	}

	private static function user_results($sql){

		global $database;
		$result = $database->query($sql);	
		return $result;
	}


}

?>