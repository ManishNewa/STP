<?php
     
  $tutor = new Tutor();

  $tutor_found = $tutor->find_tutor_by_email($_SESSION['email']);

  $tutor_data = mysqli_fetch_array($tutor_found);

?>

<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">

      <p class="centered"><a href="javascript:;"><img src="../img/tutors/<?php echo $tutor_data['image'] ?>" class="img-circle" width="80"></a></p>
      <h5 class="centered text-capitalize"><?php echo $tutor_data['t_fname'] . " " . $tutor_data['t_lname']  ?></h5>
      <li class="mt">
        <a href="index.php?src=profile" class="active">
          <i class="fa fa-dashboard"></i>
          <span>Profile</span>
          </a>
      </li>   
      
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>

