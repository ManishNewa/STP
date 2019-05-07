 <?php

  session_start();
  require_once('../init.php');
  require_once(TEMPLATES_PATH . "/header.php");  
  
?>

<?php
  //Redirects to the login page if the user is not logged in
  /*Setting up session for students*/
  
  // set_session();

  if($_SESSION['role'] != "student"){
      header("Location: login.php");
  }

  /*Destroying session when user logs out*/
  
  if(isset($_POST['logout'])){
      session_destroy();        
      header("Location: login.php");
  }

  
?>

  <body id="page-top">

    <!-- Navigation -->
    <?php require_once(TEMPLATES_PATH . "/navigation.php"); ?>


    <header class="masthead text-white text-center">
      <!-- <div class="overlay"></div> -->
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">
            Find a tutor in your area today!            
            
          </div>
          <div class="intro-heading">
            Contact a professional tutor to start in-person or online tutoring!
          </div>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form method="POST" action="search.php" >
            <div class="input-group subject_input_search">
             <!--  <div class="col-12 col-md-9 mb-2 mb-md-0"> -->
                <input type="text" class="form-control form-control-lg" placeholder="Enter a subject name..." name="subject_name" required="required">
              <!-- </div> -->
              <!-- <div class="col-12 col-md-3"> -->
                <button type="submit" name="search_submit" class="btn btn-primary">Search</button>
              <!-- </div> -->
            </div>
          </form>
        </div>
        
      </div>
    </header>


    <!-- Services -->
    <?php// require_once(PAGES_PATH . "/services.php"); ?>


    <!-- Portfolio Grid -->
    <?php require_once(PAGES_PATH . "/how_it_works.php"); ?>


    <!-- Team -->
    <?php require_once(PAGES_PATH . "/team.php"); ?>

    <!-- About -->
    <?php require_once(PAGES_PATH . "/about.php"); ?>

    <!-- Clients -->
    <?php// require_once(PAGES_PATH . "/clients.php"); ?>


    <!-- Contact -->
    <?php require_once(PAGES_PATH . "/contact.php"); ?>

  
    <!-- Logout Modal-->
    <?php require_once(MODALS_PATH . "/logout.php") ?>
    
    <!-- Edit Profile Modal -->
    <?php //require_once(MODALS_PATH . "/edit_profile.php") ?>


    


    <!-- Footer -->
    <?php require_once(TEMPLATES_PATH . "/footer_content.php"); ?> 
    <?php require_once(TEMPLATES_PATH . "/footer.php"); ?>  
