<?php
// include"db.php";
      require_once(TEMPLATES_PATH ."/header.php");
    // require_once(CLASS_PATH . "/register_tutor");

if(isset($_POST['add_tutor'])){

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
    

    // echo "before uploading";

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)) {
        // echo "The file ". basename( $_FILES['image']['name']). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


    //the path to store the uploaded image
    if(isset($_POST["imageToUpload"])){
      echo "Uploading image start";
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
    echo "Succeccfully added new Tutor:" . "<a href = 'index.php?src=tutor'> View All Tutor </a>";

  }
  /*End of tutor registration*/


?>

<form method="POST" action="" enctype="multipart/form-data">
  
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
            <div class="col-md-4">
              <div class="form-label-group">
                <label for="qualification">Qualification</label>
                <select class="form-control" name="qualification">
                  <option value="">Select one</option>                  
                  <option value="10">10</option>
                  <option value="+2">+2</option>
                  <option value="bachelors">Bachelors</option>
                  <option value="masters">Masters</option>
                  <option value="PhD">PhD</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-label-group">
                <label for="subject">Choose Subject</label>
                <select class="form-control" name="subject">
                  <option value="">Select one</option>                  
                  <option value="english">English</option>                
                  <option value="maths">Maths</option>
                  <option value="nepali">Nepali</option>
                  <option value="science">Science</option>
                  <option value="social studies">Social Studies</option>
                  <option value="economics">Economics</option>
                  <option value="marketing">Marketing</option>
                  <option value="economics">Economics</option>
                  <option value="computer studies">Computer Science</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-label-group">
                <label for="grade">Teach Grade</label>
                <select class="form-control" name="grade">
                  <option value="">Select one</option>                  
                  <option value="all">All</option>               
                  <option value="5">Under 5</option>
                  <option value="10">Under 10</option>
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
                <label for="image">Upload Image</label>
                <input type="file" id="image" name="image" class="form-control-file">
              </div>
            </div>
            
            <div class="col-md-5">
              <div class="form-label-group">
                <label for="availability">Availability</label>
                <select class="form-control" name="availability">
                  <option value="">Select one</option>                  
                  <option value="anytime">Anytime</option>
                  <option value="now">Now</option>
                  <option value="reserved">Reserved</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="form-label-group">
             <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required="required">
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

        <div class="form-group">
          <input class="btn btn-primary" type="submit" name="add_tutor" value="Add Tutor">    
        </div>
        
      </div>
      <!-- Card body ends -->

    </div>
    <!-- Card ends here -->
  </div>
</form>
