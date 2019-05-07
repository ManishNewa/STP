<?php    
    session_start();
    // load up your config file  
    require_once("../init.php");  
?>

<?php
    
    /*Checks if user is logged in or not*/  
    if(!isset($_SESSION["email"])){

      header("Location:login.php");

    }
    
    /*Destroying session when user logs out*/  
    if(isset($_GET['logout'])){

        session_destroy();        
        header("Location: login.php");

    }   


    if(isset($_POST['request_tutor'])){

      $student = new Student();
      $assignment = new Assignment();


      $tutor_id = $_GET['request'];
      $student_email = $_SESSION["email"];

      $student_result = $student->find_student_by_email($student_email);

      while($row = mysqli_fetch_array($student_result)){

       $student_id = $row['s_id'];

      }

      /*Checks if the student has already been assigned to a tutor or not*/

      if($assignment->check_assign($student_id)){

        echo " Student has been assigned already ";

      }else{

        $assignment->assign($tutor_id, $student_id);
        

      }

      

      

    }   
?>

<body id="page-top">

    <!-- Navigation -->
    <?php require_once(TEMPLATES_PATH . "/search_navigation.php"); ?>

    <!-- Logout Modal-->
    <?php require_once(MODALS_PATH . "/logout.php") ?>
    
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
                  <select class="form-control" name="subject" required="required">
                        <option value="all">Select one</option>                  
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
                      <option value="now" >Now</option>
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

                $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

                $items_per_page = 3;   

                $subject = strtolower($_POST['subject_name']);

                $items_total_count = Tutor::count_by_subject($subject);

                $paginate = new Paginate($page, $items_per_page, $items_total_count);

                $sql = "SELECT *FROM tutor WHERE t_subject = '$subject' ";
                $sql.= "LIMIT {$items_per_page} ";
                $sql.= "OFFSET {$paginate->offset()} ";                                  

                $tutor_found = $tutor->paginate_all_tutors($sql);                      

              }else if(isset($_POST['subject_search_again'])){


                $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

                $items_per_page = 3;               

                $subject = strtolower($_POST['subject']);
                $grade = $_POST['grade'];
                $availability = $_POST['availability']; 

                $items_total_count = Tutor::count_by_all_conditions($subject, $grade, $availability);

                $paginate = new Paginate($page, $items_per_page, $items_total_count);

                $sql = "SELECT *FROM tutor WHERE t_subject = '$subject' AND grade = '$grade' AND availability = '$availability' ";
                $sql.= "LIMIT {$items_per_page} ";
                $sql.= "OFFSET {$paginate->offset()} ";

                $tutor_found = $tutor->paginate_all_tutors($sql); 
                /*$subject = $_POST['subject'];
                $grade = $_POST['grade'];
                $availability = $_POST['availability']; 
                
                $tutor_found = $tutor->find_tutor_by_all_conditions($subject, $grade, $availability);*/
              
              }else{


                $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

                $items_per_page = 3;               

                $items_total_count = Tutor::count_all_tutors();

                $paginate = new Paginate($page, $items_per_page, $items_total_count);

                $sql = "SELECT *FROM tutor ";
                $sql.= "LIMIT {$items_per_page} ";
                $sql.= "OFFSET {$paginate->offset()} ";

                $tutor_found = $tutor->paginate_all_tutors($sql); 

                // $tutor_found = $tutor->find_all_tutors();
              
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

                    <button class="btn btn-primary" data-toggle="modal" data-target="#tutor_details_<?php echo $tutor_list['t_id']; ?>"> View Details </button> 
                    <hr>

                    <p class="tutor-text">I can teach : <span class="text-capitalize"><?php echo $tutor_list['t_subject']; ?></span> </p>

                    <a href="" class="btn tutor-start-btn start" data-toggle="modal" data-target="#enroll_<?php echo $tutor_list['t_id']; ?>">Start Now</a>


                    <!-- View details modal -->

                      <?php require(MODALS_PATH . "/view-tutor-details.php"); ?>

                    <!-- This is the enrollment modal -->
                    
                      <?php require(MODALS_PATH . "/tutor-request.php"); ?>

                  </div>
                </div>
              </div>

            <?php    

              }

              echo "<div class='col-sm-12'>";
              echo"<nav aria-label='Page navigation example'>";
              echo "<ul class='pagination justify-content-center'>"; 

              if($paginate->totalPages() > 1){

                if($paginate->has_previousPage()){                        
                  echo "<li class='page-item'><a class='page-link' href='search.php?page={$paginate->previousPage()}'>Previous</a></li>";
                }

                for($i=1 ; $i<=$paginate->totalPages() ; $i++){

                  if($i == $paginate->current_page){
                    echo "<li class='page-item active'><a class='page-link' href='search.php?page={$i}'>{$i}</a></li>";
                  }else{
                    echo "<li class='page-item'> <a class='page-link' href='search.php?page={$i}'>{$i}</a></li>";
                  }                        


                }

                if($paginate->has_nextPage()){                        
                  echo "<li class='page-item'><a class='page-link' href='search.php?page={$paginate->nextPage()}'>Next</a></li>";
                }

              }

              echo "</ul>";
              echo "</nav>";
              echo "</div>";


             


              

            ?>
            
          </div>
        </div>
      </div>
    </header>

    <div class="imgBox">
      
    </div>
  
    <!-- Logout Modal-->
    <?php require_once(MODALS_PATH . "/logout.php") ?>

    <!-- View Tutor Details Modal 1 -->
    

    <!-- Footer -->
    <?php require_once(TEMPLATES_PATH . "/footer_content.php"); ?> 
    <?php require_once(TEMPLATES_PATH . "/footer.php"); ?>

