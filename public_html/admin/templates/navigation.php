<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.html">Student Tutor Portal</a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <!-- <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div> -->
  </form>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">

    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
        <!-- <span class="badge badge-danger">9+</span> -->
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">

        <div id="dropdown-messages">

         <a class="dropdown-item" href="#">
          <div>
              <strong>Manish Maharjan</strong>
              <span class="push-right text-muted">
                  <em>Yesterday</em>
              </span>
          </div>
          <div>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Pellentesque eleifend...</div>
         </a>


        <div class="dropdown-divider"></div>

      
        <a class="dropdown-item  text-center" href="#"><strong>See All Notifications</strong></a>
        
      </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
        
          
          <?php

            $assignment = new Assignment();

            $check_new_enrolls = $assignment->count_new_enrolls();

            if($check_new_enrolls>0){

              echo "<span class='badge badge-danger'>";
              echo $check_new_enrolls;
              echo "</span>";

            }

          ?>


      </a>
      <div class="dropdown-menu dropdown-menu-right" id="dropdown-notification" aria-labelledby="messagesDropdown">

        <a class="dropdown-item" href="index.php?src=assignment">
          <i class="fas fa-tasks" id="icon-padding"></i> New Enrolls
          
          <?php 

              if($check_new_enrolls>0){

                echo "<span class='badge badge-danger'>";
                echo $check_new_enrolls;
                echo "</span>";

              }
              
           ?>
          <!-- <span class="push-right text-muted small">4 minutes ago</span> -->
        </a>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="#">
          <i class="fa fa-envelope fa-fw" id="icon-padding"></i> New Message
          <!-- <span class="push-right text-muted small">4 minutes ago</span> -->
        </a>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="#">
          <i class="fa fa-comment fa-fw" id="icon-padding"></i> New Comment
          <!-- <span class="push-right text-muted small">4 minutes ago</span> -->
        </a>

        <div class="dropdown-divider"></div>        

        <a class="dropdown-item  text-center" href="#"><strong>See All Notifications</strong></a>
        
      </div>
    </li>
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i>  <i class="fa fa-caret-down"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a>
        <a class="dropdown-item" href="#"><i class="fa fa-user fa-fw"></i> Activity Log</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
    </li>
  </ul>


</nav>