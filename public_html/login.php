<?php
  ob_start();

  session_start();

  require_once('../init.php');
  require_once(TEMPLATES_PATH . "/header.php");

?>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <h5 class="card-header mx-auto ">Login</h5>
        <div class="card-body">
          <form method="POST" action="login.php">
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" class="form-control" required="required" autofocus="autofocus" name="email">
            </div>

            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password" required="required">
            </div>

            <div class="form-group">
              <label for="login">Login as</label>
              <select class="form-control" name="user">
                <option value="admin">Admin</option>
                <option value="tutor">Tutor</option>
                <option value="student">Student</option>
              </select>
            </div>

            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit" name="submit">Login</button>
          </form> 
     
        </div> 
        <div class="text-center">
          <a class="d-block medium " href="forgot-password.php"><span>Forgot Password?</span></a> 
          <div>
            <button class="btn btn-success mt-3 col-sm-6" data-toggle="modal" data-target="#registerstudentModal"><span class="registerbtns">Register as Student</span></button>
            <a class="btn btn-danger mt-3 col-sm-5" href="#" data-toggle="modal" data-target="#registertutorModal"><span class="registerbtns">Join as Tutor</span></a>
          </div>  

          <br/>
            
        </div>
      </div>
    </div>


  <?php require_once(MODALS_PATH . "/registration.php"); ?>

<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>

<?php

  /*Checks the login part*/
  // Test whether the admin user exists
  if(isset($_POST['submit'])){

    $user_role = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    // set_session(); 
    $_SESSION['email'] = $email;
    $_SESSION['role'] = $user_role;

    $login = new Login($email,$password,$user_role);

    if($check = $login->checkUser()){
    
      switch($user_role) {

        case 'student':          
          header("Location: index.php");
          break;

        case 'admin':
          header("Location: ./admin/"); 
          break;        

        case 'tutor':         
          header("Location: ./tutor_profile/");
          break;

      }
    
    }

  }
  /*End of Checking the login part*/


  /*Register a student*/
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
    echo "Student registered successfully";
  }
  /*End of student registration*/


  /*Register a tutor*/
  if(isset($_POST['register_tutor'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $qualification = $_POST['qualification'];
    $subject = $_POST['subject'];
    $grade = $_POST['grade'];
    $email = $_POST['email'];
    $availability = $_POST['availability'];
    $username = $_POST['username'];
    $address = $_POST['address']; 
    $contact = $_POST['contact'];
    $password = $_POST['password'];    
    $role = "tutor";
    $image = $_FILES['image']['name'];

    /*Image uploading part*/

    $image_dir = IMAGES_PATH . "/tutors/";
    $target_dir = $image_dir . basename($_FILES['image']['name']);
    

    echo "before uploading";

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)) {
        echo "The file ". basename( $_FILES['image']['name']). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


    //the path to store the uploaded image
    if(isset($_POST["imageToUpload"])){
      // echo "Uploading image start";
      $image_dir = IMAGES_PATH . "/tutor/";
      $image_file = $image_dir . basename($_FILES["imageToUpload"]["name"]);
      
      // Check if image file is a actual image or fake image
      if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $image_file)) {
              // echo "The file ". basename( $_FILES["imageToUpload"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
      
    }
    
    /*Ending of Image uploading part*/


    $register_tutor = new RegisterTutor($fname,$lname,$qualification,$subject,$grade,$address,$email,$availability,$username,$contact,$password,$role,$image);
    
    $register_tutor->register_in_tutor();
    $register_tutor->register_in_user();

  }
  /*End of tutor registration*/

?>