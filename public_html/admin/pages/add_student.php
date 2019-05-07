<?php
// include"db.php";
      require_once(TEMPLATES_PATH ."/header.php");
    // require_once(CLASS_PATH . "/register_tutor");

if(isset($_POST['register_student'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $grade = $_POST['grade'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];    
    $role = "student";

    $register_student = new RegisterStudent( $fname,$lname,$username,$grade,$email,
    $address,$contact,$password,$role);
    
    $register_student->register_in_student();
    $register_student->register_in_user();

   echo "Succeccfully added new Student:" . "<a href = 'index.php?src=student'> View All Students </a>";

  }
  /*End of tutor registration*/


?>
<form method="POST" action="">
	<div class="container">
	    <div class="card card-register mx-auto">
	      <div class="card-header">Register an Account</div>
	      <div class="card-body">
	       
			  <div class="form-group">
			    <div class="form-row">
			      <div class="col-md-6">
			        <div class="form-label-group">
			          <label for="firstName">First name</label>
			          <input type="text" id="firstName" name="fname" class="form-control" required="required" autofocus="autofocus">
			        </div>
			      </div>
			      <div class="col-md-6">
			        <div class="form-label-group">
			          <label for="lastName">Last name</label>
			          <input type="text" id="lastName" name="lname" class="form-control" required="required">
			        </div>
			      </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="form-row">
			      <div class="col-md-8">
			        <div class="form-label-group">
			          <label for="username">Username</label>
			          <input type="text" id="username" name="username" class="form-control" required="required">
			        </div>
			      </div>
			      <div class="col-md-4">
			        <div class="form-label-group">
			        <label for="grade">Grade</label>
			        <select class="form-control" name="grade">
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
			      <input type="email" id="inputEmail" name="email" class="form-control" required="required">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="form-row">
			      <div class="col-md-7">
			        <div class="form-label-group">
			          <label for="address">Address</label>
			          <input type="text" id="address" name="address" class="form-control" required="required">
			        </div>
			      </div>
			      <div class="col-md-5">
			        <div class="form-label-group">
			          <label for="contact">Contact Number</label>
			          <input type="text" id="contact" name="contact" class="form-control" required="required">
			        </div>
			      </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="form-row">
			      <div class="col-md-6">
			        <div class="form-label-group">
			          <label for="inputPassword">Password</label>
			          <input type="password" name="password" id="inputPassword" class="form-control" required="required">
			        </div>
			      </div>
			      <div class="col-md-6">
			        <div class="form-label-group">
			          <label for="confirmPassword">Confirm password</label>
			          <input type="password" id="confirmPassword" class="form-control"  required="required">
			        </div>
			      </div>
			    </div>
			  </div>

			  <div class="modal-footer">
			    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			    <button type="submit" name="register_student" class="btn btn-primary">Register</button> 
			  </div>
			</div>
		</div>
	</div>
</form>

