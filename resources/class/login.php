
<?php

class Login{

	private $email;
	private $password;
	private $role;

	public function __construct($u_email,$u_password,$u_role){
		$this->email = $u_email;
		$this->password = $u_password;
		$this->role = $u_role;
	}


	public function checkUser(){
		
		$query = "SELECT *FROM user WHERE u_email ='$this->email' AND u_password = '$this->password' AND u_role = '$this->role' ";
		return Login::userExists($query);
		
	}

	private static function userExists($query){

		global $database;
		$result = $database->query($query);
		$user_found = mysqli_num_rows($result);
		if($user_found!=0){
            return true;
        }
	}
	
}



?>