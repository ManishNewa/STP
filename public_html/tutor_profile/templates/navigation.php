<header class="header black-bg">
  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
  <!--logo start-->
  <a href="index.php" class="logo"><b><span>Tutor</span></b></a>
  <!--logo end-->
  <div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav pull-right top-menu">
      
      <!-- notification dropdown start-->
      <li id="header_notification_bar" class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">

          <?php 


            $assignment = new Assignment();
            if(isset($_SESSION['t_id'])){
              $t_id = $_SESSION['t_id'];
              $check_notify = $assignment->count_new_assigns($t_id);
            }
            
           ?>
          <i class="fa fa-bell-o"></i>
            <?php 
              if(isset($_SESSION['t_id'])){
               if($check_notify>0){
                echo "<span class='badge bg-warning'>";
                echo $check_notify; 
                echo "</span>";
               }
              }

            ?>
              
          </a>
        <ul class="dropdown-menu extended notification">
          <div class="notify-arrow notify-arrow-yellow"></div>
          <li>
            <?php 
              
             if($check_notify>0){
              echo "<p class='yellow'>";
              echo "You have $check_notify new notifications";
              echo "</p>";             
             }              
            ?>
          </li>
          <li>
            <a href="javascript:;">              
                
              <?php 
                
               if($check_notify>0){
               
                echo "<span class='label label-success'><i class='fa fa-plus'></i></span>";
                echo "New User Registered.";
                echo "<span class='small italic pull-right'></span>";             
               
               }else{

                echo "<span class='label label-success'><i class='fa fa-times'></i></span>";
                echo "No new notification";
                echo "<span class='small italic pull-right'></span>";     

               }              
              ?>
            
            </a>
          </li>

        <?php

           if($check_notify>0){

            echo "<li>";
            echo "<a href='index.php?src=notification'>See all notifications</a>";
            echo "</li>";

           }else{

            echo "<li>";
            echo "<a href='index.php?src=notification'>See old notifications</a>";
            echo "</li>";

           }

         ?>     
        </ul>
      </li>
      <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
  </div>
  <div class="top-menu">
    <ul class="nav pull-right top-menu">
      <li><a class="logout" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a></li>
      <!-- <li><a class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li> -->
      
    </ul>
  </div>
</header>