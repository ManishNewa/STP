<?php 


	/*Display the data in the form*/
		$student = new Student();
		$user = new User();

		if(isset($_SESSION['email'])){

		    $s_email = $_SESSION['email'];
		    
		    $select_student_query = $student->find_student_by_email($s_email); 
		  
		                    
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
/*Update the student information*/

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
?>

<form method="POST" action="" enctype="multipart/form-data">
	<div class="container">
	    <div class="card card-register mx-auto">
	      <div class="card-header">Update profile</div>
	      <div class="card-body">
	       
			  <div class="form-group">
			    <div class="form-row">
			      <div class="col-md-6">
			        <div class="form-label-group">
			          <label for="firstName">First name</label>
			          <input type="text" name="fname" class="form-control" required="required" value="<?php echo $s_fname;?>" autofocus="autofocus">
			        </div>
			      </div>
			      <div class="col-md-6">
			        <div class="form-label-group">
			          <label for="lastName">Last name</label>
			          <input type="text" name="lname" value="<?php echo $s_lname;?>"class="form-control" required="required">
			        </div>
			      </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="form-row">
			      <div class="col-md-8">
			        <div class="form-label-group">
			          <label for="username">Username</label>
			          <input type="text" name="username" value="<?php echo $username;?>" class="form-control" required="required">
			        </div>
			      </div>
			      <div class="col-md-4">
			        <div class="form-label-group">
			        <label for="grade">Grade</label>
			        <select class="form-control" name="grade" value="<?php echo $s_grade;?>">
			          <option value="10">10</option>
			          <option value="+2">+2</option>
			          <option value="bachelors">Bachelors</option>
			          <option value="masters">Masters</option>
			        </select>
			        </div>
			      </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="form-label-group">
			      <label for="inputEmail">Email address</label>
			      <input type="email" name="email" value="<?php echo $s_email;?>" class="form-control" disabled>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="form-row">
			      <div class="col-md-7">
			        <div class="form-label-group">
			          <label for="address">Address</label>
			          <input type="text" name="address" value="<?php echo $s_address;?>"" class="form-control" required="required">
			        </div>
			      </div>
			      <div class="col-md-5">
			        <div class="form-label-group">
			          <label for="contact">Contact Number</label>
			          <input type="text" name="contact" value="<?php echo $s_contact;?>" class="form-control" required="required">
			        </div>
			      </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="form-row">
			      <div class="col-md-6">
			        <div class="form-label-group">
			          <label for="inputPassword">Password</label>
			          <input type="password" name="password" value="" class="form-control" required="required">
			        </div>
			      </div>
			      <div class="col-md-6">
			        <div class="form-label-group">
			          <label for="confirmPassword">Confirm password</label>
			          <input type="password" value="" class="form-control"  required="required">
			        </div>
			      </div>
			    </div>
			  </div>

			  <div class="card-footer">
			    <button type="submit" name="update_student" class="btn btn-primary">Update</button> 
			  </div>
			</div>
		</div>
	</div>
</form>
