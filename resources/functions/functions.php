<?php 

	// function logout(){
		
	// 	if(isset($_POST['logout'])){
	// 		session_destroy();        
	// 		header("Location: login.php");
	// 	}

	// }

	// function check_user_logged(){

	// 	if(!isset($_SESSION["email"])){
	// 		header("Location:login.php");
	// 	}

	// 	if($_SESSION["user_role"] != "student"){
	// 		header("Location:login.php");
	// 	}
	// }

	function tutor_assign_request(){

		if(isset($_POST['request_tutor'])){

	      $student = new Student();
	      $assignment = new Assignment();


	      $tutor_id = $_GET['request'];
	      $student_email = $_SESSION["email"];

	      $student_result = $student->find_student_by_email($student_email);

	      while($row = mysqli_fetch_array($student_result)){

	       $student_id = $row['s_id'];

	      }

	      /*Checks if the student has already been assigned to a tutor or not*/
	      /*Max number of tutor is 2 for every student*/
	      $assign_count = $assignment->check_assign($student_id);

	      if($assign_count>=2){

	        echo " Student has been assigned two tutors already ";

	      }else{

	        $assignment->assign($tutor_id, $student_id);        

	      }
	    }

	}

	function display_student_data_in_form(){
		
		
	}

	function update_student_data(){

		
	}

?>