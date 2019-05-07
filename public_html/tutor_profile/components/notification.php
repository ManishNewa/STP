   <?php

      // session_start();
      $t_id = $_SESSION['t_id'];

      $assignment = new Assignment();  
      $student = new Student();

       if(isset($_GET['sid'])){

          $s_id = $_GET['sid'];
          $assignment->remove_notify($t_id,$s_id);

      }

      

   ?>

    <h3><i class="fa fa-angle-right"></i> All Notifications</h3>
    <!-- COMPLEX TO DO LIST -->
    <div class="row mt">
      <div class="col-md-12">
        <section class="task-panel tasks-widget">
          <div class="panel-heading">
            <div class="pull-left">
              <h5><i class="fa fa-tasks"></i> Students Assignments</h5>
            </div>
            <br>
          </div>
          <div class="panel-body">
            <div class="task-content">
              <ul class="task-list">
                <?php 

                  $all_notifications = $assignment->show_all_by_tutor($t_id);

                  while($data = mysqli_fetch_array($all_notifications)){
                    
                    $s_id = $data['s_id'];
                    $notify = $data['notify'];

                    $student_found = $student->find_student_by_id($s_id);
                    while($student_data = mysqli_fetch_array($student_found)){
                      
                      $s_id = $student_data['s_id'];
                      $s_name = $student_data['s_fname'] . " " . $student_data['s_lname'];

                 ?>
                <li>
              
                  <div class="task-title">
                    <span class="task-title-sp">You have been assigned to a student named <span class="text-capitalize"><b><?php echo $s_name ?></b></span></span>
                   
                      <?php 

                        $notify = $assignment->check_notify($t_id, $s_id);

                        if($notify!=0){

                          echo "<a href=''><span class='badge bg-important'>Unseen</span></a>";

                        }else{

                          echo "<a href=''><span class='badge bg-important'>Seen</span></a>";
                          echo "<div>(Further details will be informed through message)</div>";
                        }

                      ?>
                      <div class="pull-right">

                        <?php 

                          if($notify>0){
                        
                        ?>
                        <a class="btn btn-success btn-xs" href="index.php?src=notification&sid=<?php echo $s_id ?>" > Check </a>
                        
                        <?php
                        
                          }else{

                            echo "<i class= 'fa fa-check'></i>";
                        
                          }

                        ?> 

                      </div>
                      
                    
                  </div>
                </li>
              <?php 

                  }
                 
                
                }

               ?>


              </ul>
            </div>
          </div>
        </section>
      </div>
      <!-- /col-md-12-->
    </div>
    <!-- /row -->

