<?php

  require_once('../config.php');
  require_once(TEMPLATES_PATH . "/header.php");
?>

  <body class="bg-dark">

    <div class="container">
      
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register as a Student</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <label for="firstName">First name</label>
                  <input type="text" id="firstName" class="form-control" required="required" autofocus="autofocus">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <label for="lastName">Last name</label>
                  <input type="text" id="lastName" class="form-control" required="required">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <label for="inputEmail">Email address</label>
              <input type="email" id="inputEmail" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" id="inputPassword" class="form-control" required="required">
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
          <a class="btn btn-primary btn-block" href="login.php">Register</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3 underlined_links" href="login.php"><span class="underlined_links">Login Page</span></a>
          <a class="d-block small underlined_links" href="forgot-password.php"><span class="underlined_links">Forgot Password?</span></a>
        </div>
      </div>
      </div>
               
    </div>
  </body>
  </html>
