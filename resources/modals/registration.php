<!-- Student registration modal -->

<div class="modal fade" id="registerstudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register your account</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!-- <div class="modal-body"> -->
      <div class="card card-register mx-auto ">
    <div class="card-header">Enter your details</div>
      <div class="card-body">
      <form method="POST" action="login.php">

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
                  <option value="">Select one</option>   
                  <option value="10">Under 10</option>
                  <option value="+2">+2</option>
                  <option value="bachelors">Bachelors</option>
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

      </form>
      </div>
    </div>
      <!-- </div> -->
      
      
    </div>
  </div>
</div>

<!-- End of Student registration modal -->



<!-- Tutor registration modal -->

<div class="modal fade" id="registertutorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register your account</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!-- <div class="modal-body"> -->
      <div class="card card-register mx-auto ">
        <div class="card-header">Enter your details</div>
          <div class="card-body">
          <form method="POST" action="login.php" enctype="multipart/form-data">

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
                        <option value="economics">Economics</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <label for="grade">Teach Grade</label>
                      <select class="form-control" name="grade">
                        <option value="">Select one</option>     
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
                      <label for="availability">University</label>
                      <select class="form-control" name="availability">
                        <option value="">Select one</option>                  
                        <option value="tribhuwan">Tribhuwan University</option>
                        <option value="kathmandu">Kathmandu University</option>
                        <option value="pokhara">Pokhara University</option>
                        <option value="purwanchal">Purwanchal University</option>
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

              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" name="register_tutor" class="btn btn-primary">Register</button> 
            </div>

          </form>
          </div>
        </div>   
      
    </div>
  </div>
</div>

<!-- End of tutor registration modal -->
