<?php

class RegisterStudent{

	private $firstname;
	private $lastname;
	private $username;
	private $grade;
	private $email;
	private $address;
	private $contact;
	private $password;
	private $role;

	public function __construct($fname, $lname, $u_name, $u_grade, $u_email, $u_address, $u_contact, $u_password, $u_role){

		$this->firstname = $fname;
		$this->lastname = $lname;
		$this->username = $u_name;
		$this->grade = $u_grade;
		$this->email = $u_email;
		$this->address = $u_address;
		$this->contact = $u_contact;
		$this->password = $u_password;
		$this->role = $u_role;

	}

	public function register_in_student(){

		$query = "INSERT INTO student (s_fname, s_lname, s_address, s_contact, s_grade, s_email) ";
		$query.="VALUES ('$this->firstname', '$this->lastname', '$this->address', '$this->contact', '$this->grade', '$this->email')";

		RegisterStudent::process($query);
			

	}
	public function register_in_user(){

		$query = "INSERT INTO user (username, u_password, u_email, u_role) ";
		$query.= "VALUES ('$this->username', '$this->password', '$this->email', '$this->role')";

		RegisterStudent::process($query);
	}

	private static function process($query){

		global $database;
		$result = $database->query($query);
		if(!$result){
			die("Failed to insert into student table");
		}	
	}

}

?>