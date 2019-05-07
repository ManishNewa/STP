<?php

	function admin_display_student_data_in_form(){
		
		$student = new Student();
		$user = new User();

		if(isset($_GET['id'])){

		    $s_id = $_GET['id'];
		    
		    $select_student_query = $student->find_student_by_id($s_id); 
		  
		                    
		    while($row = mysqli_fetch_assoc($select_student_query)){

			    $s_fname = $row['s_fname'];
			    $s_lname = $row['s_lname'];
			    $s_address = $row['s_address'];
			    $s_contact = $row['s_contact'];
			    $s_email = $row['s_email'];
			    $s_grade = $row['s_grade'];
		                        
			}
			
			$select_user_query = $user->find_user_by_email($s_email);

			while($row = mysqli_fetch_assoc($select_user_query)){

				$username = $row['username'];
		                        
			}

		}
	}

	function admin_update_student_data(){

		$student = new Student();
		
		if(isset($_POST['update_student'])){

		    $s_fname = $_POST['fname'];
		    $s_lname = $_POST['lname'];
		    $s_address = $_POST['address'];
		    $s_contact = $_POST['contact'];
		    $s_grade = $_POST['grade'];
		    $username = $_POST['username'];
		    $u_password = $_POST['password'];
		    $u_password1 = $_POST['password'];

		    $s_id = $_GET['id'];
		    
		    $student->update_students($s_id, $s_fname, $s_lname, $s_address, $s_contact, $s_grade);

			echo "Succeccfully Updated Student: <a href = 'index.php?src=student'> View All Student </a>";
		}
	}

?>