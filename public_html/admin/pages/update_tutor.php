<?php
    
    $tutor = new Tutor();
    $user = new User();

    if(isset($_GET['id'])){

        $t_id = $_GET['id'];

        $select_tutor_query = $tutor->find_tutor_by_id($t_id);

        while($row = mysqli_fetch_array($select_tutor_query)){

            $t_fname = $row['t_fname'];
            $t_lname = $row['t_lname'];
            $t_address = $row['t_address']; 
            $t_contact = $row['t_contact'];
            $qualification = $row['t_qualification'];            
            $t_email = $row['t_email'];
            $t_subject = $row['t_subject'];            
            $availability = $row['availability'];
            $grade = $row['grade'];
            $image = $row['image'];
            

        }

        $select_user_query = $user->find_user_by_email($t_email);

        while($row = mysqli_fetch_assoc($select_user_query)){

            $username = $row['username'];
                            
        }
    }

      if(isset($_POST['update_tutor'])){

          $t_fname = $_POST['fname'];
          $t_lname = $_POST['lname'];
          $t_address = $_POST['address']; 
          $t_contact = $_POST['contact'];
          $t_qualification = $_POST['qualification'];
          $t_subject = $_POST['subject'];            
          $availability = $_POST['availability'];
          $grade = $_POST['grade'];
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
            $image_dir = IMAGES_PATH . "/tutors/";
            $image_file = $image_dir . basename($_FILES["imageToUpload"]["name"]);
            
            // Check if image file is a actual image or fake image
            if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $image_file)) {
                
                // echo "The file ". basename( $_FILES["imageToUpload"]["name"]). " has been uploaded.";
            
            } else {

                echo "Sorry, there was an error uploading your file.";
            
            }
            
          }
          
          /*Ending of Image uploading part*/

          
          $tutor->update_tutor($t_id, $t_fname, $t_lname, $t_address, $t_contact, $t_qualification, $t_subject, $availability, $grade,$image);

          echo "Successfully Updated Tutor: <a href = 'index.php?src=tutor'> View All Tutors </a>";
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
                      <input type="text" id="firstName" name="fname" value="<?php echo $t_fname ?>" class="form-control" required="required" autofocus="autofocus">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <label for="lastName">Last name</label>
                      <input type="text" id="lastName" name="lname" value="<?php echo $t_lname ?>" class="form-control" required="required">
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
                        <option value="<?php echo $qualification ?>"><?php echo $qualification ?></option>              
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
                        <option value="<?php echo $t_subject ?>" > <?php echo $t_subject ?> </option>
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
                      <select class="form-control" name="grade" value="<?php echo $grade ?>" >
                        <option value="value="<?php echo $grade ?>"><?php echo $grade ?></option>  
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
                  <input type="email" id="inputEmail" name="email" value="<?php echo $t_email ?>" class="form-control" disabled>
                </div>
              </div>
              
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-7">
                    <div class="form-label-group">
                      <!-- <label for="image">Upload Image</label> -->
                      <img src="../img/tutors/<?php echo $image; ?>" width=100>
                      <input type="file" id="image" name="image" value="<?php echo $image ?>" class="form-control-file">
                    </div>
                  </div>
                  
                  <div class="col-md-5">
                    <div class="form-label-group">
                      <label for="availability">Availability</label>
                      <select class="form-control" name="availability" value="<?php echo $availability ?>" >              
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
                      <input type="text" id="username" name="username" value="<?php echo $username ?>" class="form-control" disabled>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-7">
                    <div class="form-label-group">
                      <label for="address">Address</label> 
                      <input type="text" id="address" name="address" value="<?php echo $t_address ?>" class="form-control" required="required">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-label-group">
                      <label for="contact">Contact Number</label>
                      <input type="text" id="contact" name="contact" value="<?php echo $t_contact ?>" class="form-control" required="required">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <label for="inputPassword">Password</label>
                      <input type="password" name="password" class="form-control" value="<?php echo $password ?>" required="required">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <label for="confirmPassword">Confirm password</label>
                      <input type="password" class="form-control" value="<?php echo $password ?>" required="required">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <input class="btn btn-primary" type="submit" name="update_tutor" value="Update">    
              </div>
           </div>
        </div>
    </div> 
</form>
          




