<ul class="sidebar navbar-nav" id="sidequery">
	<li class="nav-item" >
	  <a class="nav-link active" id="dashboard" href="index.php?src=dashboard">
	    <i class="fas fa-fw fa-tachometer-alt"></i>
	    <span>Dashboard</span>
	  </a>
	</li>

	<li class="nav-item dropdown">
	  <a class="nav-link dropdown-toggle" id="pages" href="index.php?src=student" id="studentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    <i class="fas fa-fw fa-users"></i>
	    <span>Students</span>
	  </a>
	  <div class="dropdown-menu" aria-labelledby="studentDropdown">
	  	<a class="dropdown-item" href="index.php?src=student">View all Students</a>
	  	<div class="dropdown-divider"></div>
	    <h6 class="dropdown-header">Actions:</h6>
	    <a class="dropdown-item" href="index.php?src=add_student">Add Student</a>
	    <a class="dropdown-item" href="index.php?src=assign_tutor">Assign Tutor</a>
	    </a>	    
	  </div>
	</li>

	<li class="nav-item dropdown">
	  <a class="nav-link dropdown-toggle" href="#" id="tutorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    <i class="fas fa-fw fa-chalkboard-teacher"></i>
	    <span>Tutor</span>
	  </a>
	  <div class="dropdown-menu" aria-labelledby="tutorDropdown"> 
		<a class="dropdown-item" href="index.php?src=tutor">View all Tutors</a>
	  	<div class="dropdown-divider"></div>
	    <h6 class="dropdown-header">Actions:</h6>
	    <a class="dropdown-item" href="index.php?src=add_tutor" >Add Tutor</a>
	  </div>
	</li>

	<li class="nav-item" >
	  <a class="nav-link active" id="assignment" href="index.php?src=assignment">
	    <i class="fas fa-fw fa-check-square"></i>
	    <span>Assign Tutor</span>
	  </a>
	</li>

</ul>

<?php //require_once(MODALS_PATH . "/registration.php") ?> 