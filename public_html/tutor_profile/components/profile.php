<?php
     
  $tutor = new Tutor();

  $tutor_found = $tutor->find_tutor_by_email($_SESSION['email']);




  while($row = mysqli_fetch_array($tutor_found)){

        $t_id = $row['t_id'];
        $_SESSION['t_id'] = $t_id;
        $t_fname = $row['t_fname'];
        $t_lname = $row['t_lname'];
        $t_address = $row['t_address']; 
        $t_contact = $row['t_contact'];
        $qualification = $row['t_qualification'];
        $university = $row['university'];            
        $t_email = $row['t_email'];
        $t_subject = $row['t_subject'];            
        $availability = $row['availability'];
        $grade = $row['grade'];
        $image = $row['image'];

  }


  if(isset($_POST['update_tutor'])){

      $t_fname = $_POST['fname'];
      $t_lname = $_POST['lname'];
      $t_address = $_POST['address']; 
      $t_contact = $_POST['contact'];
      $t_qualification = $_POST['qualification'];
      $t_subject = $_POST['subject'];        
      $grade = $_POST['grade'];
      
      $tutor->update_tutor_profile($t_id, $t_fname, $t_lname, $t_address, $t_contact, $t_qualification, $t_subject, $grade);

      echo "Successfully Updated tutor Information";
  }

?>


<div class="row mt">
  <div class="col-lg-12">
    <div class="row content-panel">
      <div class="col-md-1">
        
      </div>
      <!-- /col-md-4 -->
      <div class="col-md-4">
        <h2 class="text-capitalize"><?php echo $t_fname . " " . $t_lname;  ?></h2>
        <p>I am a certified, experienced <span  class="text-capitalize"><?php echo $t_subject;  ?></span> teacher who has worked with nearly 800 students over the last 6 years. I completed my <?php echo $qualification;  ?> level from <?php echo $university; ?> university . I am passionate about <?php echo $t_subject;  ?> and believe that everyone has the potential to be successful!  I currently reside in <?php echo $t_address;  ?> and I teach <span  class="text-capitalize"><?php echo $t_subject;  ?></span> in NCCS college.
.</p>
        <br>
        
      </div>
      <!-- /col-md-4 -->
      <div class="col-md-4 pull-right">
        <div class="profile-pic">
          <p><img src="../img/tutors/<?php echo $tutor_data['image'] ?>" class="img-circle"></p>
        </div>
      </div>
      <!-- /col-md-4 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /col-lg-12 -->
  <div class="col-lg-12 mt">
    <div class="row content-panel">
      <div class="panel-heading">
        <ul class="nav nav-tabs nav-justified">
          <li class="active">
            <a data-toggle="tab" href="#details">Tutor Details</a>
          </li>
          <li>
            <a data-toggle="tab" href="#edit">Edit Profile</a>
          </li>
        </ul>
      </div>
      <!-- /panel-heading -->
      <div class="panel-body">
        <div class="tab-content">
          <div id="details" class="tab-pane active">
            <div class="row">
              <div class="col-md-6">
                <h4 id="tutor_details">
                <div class="row">
                    <div class="col-md-4">
                        <label>User Id</label>
                    </div>
                    <div class="col-md-4">
                        <p><?php echo $t_id ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Name</label>
                    </div>
                    <div class="col-md-4">
                        <p class="text-capitalize"><?php echo $t_fname . " " . $t_lname ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Email</label>
                    </div>
                    <div class="col-md-4">
                        <p><?php echo $t_email ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Phone</label>
                    </div>
                    <div class="col-md-4">
                        <p><?php echo $t_contact ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Address</label>
                    </div>
                    <div class="col-md-4">
                        <p class="text-capitalize"><?php echo $t_address ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Contact</label>
                    </div>
                    <div class="col-md-4">
                        <p class="text-capitalize"><?php echo $t_contact ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Qualification</label>
                    </div>
                    <div class="col-md-4">
                        <p class="text-capitalize"><?php echo $qualification ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Address</label>
                    </div>
                    <div class="col-md-4">
                        <p class="text-capitalize"><?php echo $t_address ?></p>
                    </div>
                </div>

              </h4>
              
              </div>
              <!-- /col-md-6 -->
              
              <!-- /col-md-6 -->
            </div>
            <!-- /row -->
          </div>

          <!-- /tab-pane -->
          <div id="edit" class="tab-pane">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 detailed">
                <h4 class="mb">Personal Information</h4>
                <form role="form" class="form-horizontal" method="POST" action="">
                  
                  <div class="form-group">
                    <label class="col-lg-3 control-label">First Name</label>
                    <div class="col-lg-6">
                      <input type="text" placeholder=" " name="fname" class="form-control" value="<?php echo $t_fname ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" placeholder=" " name="lname" class="form-control" value="<?php echo $t_lname ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Qualification</label>
                    <div class="col-lg-6">
                       <select class="form-control" name="qualification"  required="required">   

                        <option value="<?php echo $qualification ?>"><?php echo $qualification ?></option>      
                        <option value="10">10</option>
                        <option value="+2">+2</option>
                        <option value="bachelors">Bachelors</option>
                        <option value="masters">Masters</option>
                        <option value="PhD">PhD</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Choose Subject</label>
                    <div class="col-lg-6">
                       <select class="form-control" name="subject" required="required">
                        <option value="<?php echo $t_subject ?>"><?php echo $t_subject ?></option>
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
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Teach Grade</label>
                    <div class="col-lg-6">
                        <select class="form-control" name="grade"  required="required" >
                        <option value="<?php echo $grade ?>" ><?php echo $grade ?></option> 
                        <option value="10">10</option>
                        <option value="+2">+2</option>
                        <option value="bachelors">Bachelors</option>
                        <option value="masters">Masters</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Email Address</label>
                    <div class="col-lg-6">
                  <input type="email" id="inputEmail" name="email" value="<?php echo $t_email ?>" class="form-control" disabled>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Address</label>
                    <div class="col-lg-6">
                  <input type="text" id="address" name="address" value="<?php echo $t_address ?>" class="form-control" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Contact</label>
                    <div class="col-lg-6">
                    <input type="text" id="address" name="contact" value="<?php echo $t_contact ?>" class="form-control" required="required">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Password</label>
                    <div class="col-lg-6">
                    <input type="password" name="password" class="form-control" value="<?php echo $password ?>" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Confirm Password</label>
                    <div class="col-lg-6">
                     <input type="password" name="password" class="form-control" value="<?php echo $password ?>" required="required">
                    </div>
                  </div>

                <input class="btn btn-primary" type="submit" name="update_tutor" value="Update"> 
                </form>
              </div>
              <!-- /col-lg-8 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /tab-pane -->
        </div>
        <!-- /tab-content -->
      </div>
      <!-- /panel-body -->
    </div>
    <!-- /col-lg-12 -->
  </div>
  <!-- /row -->
</div>
<!-- /container -->
