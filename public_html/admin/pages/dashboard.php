 <?php

  $tutor = new Tutor();
  $student = new Student();
  $assignment = new Assignment();

  $assignments_count = $assignment->count_all_assign();
  $tutors_count = $tutor->count_all_tutors();
  $student_count = $student->count_all_students();
  $new_enrolls_count = $assignment->count_new_enrolls();


 ?>


 <div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>

  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-clipboard-check"></i>
          </div>
          <div class="mr-5"><?php echo $assignments_count ?> Assignments</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="index.php?src=assignment">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="mr-5"><?php echo $student_count ?> Students</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="index.php?src=student">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-chalkboard-teacher"></i>
          </div>
          <div class="mr-5"><?php echo $tutors_count ?> Tutors</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="index.php?src=tutor">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-list-ul"></i>
          </div>
          <div class="mr-5"><?php echo $new_enrolls_count ?> New Enrolls</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="index.php?src=assignment">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- Area Chart -->
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-bar"></i>
            Bar Chart Example</div>
          <div class="card-body">
            <canvas id="myBarChart" width="100%" height="50"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>     
    </div>

</div>
