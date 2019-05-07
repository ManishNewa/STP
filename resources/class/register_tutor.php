<?php

class RegisterTutor{

	private $firstname;
	private $lastname;
	private $qualification;
	private $subject;
	private $grade;
	private $email;
	private $university;
	private $username;
	private $address;
	private $contact;
	private $password;
	private $role;
	private $image;

	public function __construct($fname, $lname, $u_qualification, $u_subject, $u_grade, $u_address, $u_email, $u_university, $u_username, $u_contact, $u_password, $u_role, $u_image){

		$this->firstname = $fname;
		$this->lastname = $lname;
		$this->qualification = $u_qualification;
		$this->subject = $u_subject;
		$this->grade = $u_grade;
		$this->email = $u_email;
		$this->university = $u_university;		
		$this->username = $u_username;
		$this->address = $u_address;
		$this->contact = $u_contact;
		$this->password = $u_password;
		$this->role = $u_role;
		$this->image = $u_image;
		
	}

	public function register_in_tutor(){

		$query = "INSERT INTO tutor (t_fname, t_lname, image, t_address, t_contact, t_qualification, t_email, t_subject, university, grade, availability) ";

		$query.= "VALUES ('$this->firstname', '$this->lastname', '$this->image', '$this->address', '$this->contact', '$this->qualification', '$this->email', '$this->subject', '$this->university', '$this->grade', 'yes')";

		RegisterTutor::process($query);
			

	}
	public function register_in_user(){

		$query = "INSERT INTO user (username, u_password, u_email, u_role) ";
		$query.= "VALUES ('$this->username', '$this->password', '$this->email', '$this->role')";

		RegisterTutor::process($query);
	}	

	private static function process($query){

		global $database;
		$result = $database->query($query);
		if(!$result){
			die("Failed to insert into tutor table");
		}else{
			echo "Inserted";
		}	
	}

}

?>