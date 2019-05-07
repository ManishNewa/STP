<?php    
    session_start();
    // load up your configuration file  
    require_once("../init.php");  
?>

<?php
    
    /*Checks if user is logged in or not*/  

    if($_SESSION['role'] != "student"){
        header("Location: login.php");
    }

    

    /*Sends tutor request to the admin*/
    tutor_assign_request();   
?>

<body id="page-top">

    <!-- Navigation -->
    <?php require_once(TEMPLATES_PATH . "/search_navigation.php"); ?>

    
    <header class="masthead text-white text-center">
      <!-- <div class="overlay"></div> -->
      
      <div class="main-container">

        <div class="left">
          <div class="title">
            <h4>English Tutor Online</h4>
            <p>You’ve  come to the right place to find the best tutors. Our online tutors are ready to give you the help you need.</p>
          </div>
          <div class="left-contents">

            <form method="POST" action="">
              <div class="form-group row">
                <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                <div class=col-sm-2></div>
                <div class="col-sm-8">
                  <select class="form-control" name="subject" id="subject" required="required">          
                        <option value="">Select Option</option> 
                        <option value="english">English</option>                
                        <option value="maths">Maths</option>
                        <option value="nepali">Nepali</option>
                        <option value="economics">Economics</option>
                    </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="grade" class="col-sm-2 col-form-label">Grade</label>
                <div class=col-sm-2></div>
                <div class="col-sm-8">
                   <select class="form-control" id="grade" name="grade"  placeHolder="All">
                      <option value="all" >All</option>
                      <option value="10" >10</option>
                      <option value="+2" >+2</option>
                      <option value="bachelors" >Bachelors</option>
                      <option value="masters" >Masters</option>
                    </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="availability" class="col-sm-2 col-form-label">Availability</label>
                <div class=col-sm-2></div>
                <div class="col-sm-8">
                  <select class="form-control" id="availability" name="availability"  placeHolder="Anytime">
                      <option value="anytime" >Anytime</option>
                      <option value="yes" >Now</option>
                    </select>
                </div>
              </div>              
              <button type="submit" name="subject_search_again" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
        <div class="right">
          <div class="title">
            <h3 class="result_header">See the details of teachers and enroll with them now</h3>
          </div>
            <!-- Scrolling the tutors results -->
          <div class="container result_container">
            <div class="row"><!-- Cards showing results of tutors -->

            <?php
            
              $tutor = new Tutor();
              
              if(isset($_POST['search_submit'])){               

                $subject = strtolower($_POST['subject_name']);   
                
                $_SESSION['subject'] = $subject;                             

                $tutor_found = $tutor->find_tutor_by_subject($subject);

                // $t_found = mysqli_num_rows($tutor_found);
                // if($t_found<0){
                //   echo "Tutors not found";z
                // }                      

              }else if(isset($_POST['subject_search_again'])){                          

                $subject = $_POST['subject'];
                $grade = $_POST['grade'];
                $availability = $_POST['availability']; 

                $_SESSION['subject'] = $subject;
                $_SESSION['grade'] = $grade;
                $_SESSION['availability'] = $availability;

                if($grade == "all" && $availability == "anytime"){

                  $tutor_found = $tutor->find_tutor_by_subject($subject);

                }else if($grade == "all" && $availability == "yes"){

                  $tutor_found = $tutor->find_tutor_by_subject_and_availability($subject, $availability);

                }else if($grade !="all" && $availability =="anytime"){

                  $tutor_found = $tutor->find_tutor_by_subject_and_grade($subject, $grade);

                }else{

                  $tutor_found = $tutor->find_tutor_by_all_conditions($subject, $grade, $availability);

                }                
              
              }else{

                $tutor_found = $tutor->find_all_tutors();
              
              } 
              
              while($tutor_list = mysqli_fetch_array($tutor_found)){

            ?>
              <div class="col-sm-4">
                <div class="tutor-contents">

                  <img class="rounded-circle tutor-image" alt="..." src="./img/tutors/<?php echo $tutor_list['image'] ?>">

                  <div class="tutor-body">
                    <?php $id = $tutor_list['t_id']; ?>
                    <h5 class="tutor-name text-capitalize"><?php 
                    echo $tutor_list['t_fname'] . " " . $tutor_list['t_lname'];  ?></h5>

                    <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#tutor_details_<?php //echo $tutor_list['t_id']; ?>"> View Details </button>  -->
                    <a class="btn btn-primary" href="./tutor/index.php?id=<?php echo $tutor_list['t_id'] ?>" >View Details</a>
                    <hr>

                    <p class="tutor-text">I can teach : <span class="text-capitalize"><?php echo $tutor_list['t_subject']; ?></span> </p>

                    <a href="" class="btn tutor-start-btn start" data-toggle="modal" data-target="#enroll_<?php echo $tutor_list['t_id']; ?>">Start Now</a>


                    <!-- View details modal -->

                    <?php// require(MODALS_PATH . "/view-tutor-details.php"); ?>

                    <!-- This is the enrollment modal -->
                    
                    <?php require(MODALS_PATH . "/tutor-request.php"); ?>

                  </div>
                </div>
              </div>

            <?php    

              }              

            ?>
            
          </div>
        </div>
      </div>
    </header>

    <div class="imgBox">
      
    </div>
  
    <!-- Logout Modal-->
    <?php require_once(MODALS_PATH . "/logout.php") ?>

    <!-- Edit Profile Modal -->
    <?php// require_once(MODALS_PATH . "/edit_profile.php") ?>
    

    <!-- Footer -->
    <?php require_once(TEMPLATES_PATH . "/footer_content.php"); ?> 
    <?php require_once(TEMPLATES_PATH . "/footer.php"); ?>

<script type="text/javascript">
  document.getElementById('subject').value = "<?php echo isset($_SESSION['subject']) ? $_SESSION['subject'] : '';?>";
  document.getElementById('grade').value = "<?php echo $_SESSION['grade'];?>";
  document.getElementById('availability').value = "<?php echo $_SESSION['availability'];?>";
</script>
