<?php

  session_start(); 
  
  require_once("../../init.php");
  require_once(ATEMPLATES_PATH . "/header.php");
  require_once(TEMPLATES_PATH . "/header.php");
   
?>

<?php
  

  //Redirects to the login page if the user is not logged in
  /*Setting up session for students*/
  
  // set_session();

  // if(!isset($_SESSION['email'])){
  //     header("Location:../login.php");
  // }

  if($_SESSION['role'] != "admin"){
      header("Location:../login.php");
  }

  /*Destroying session when user logs out*/
  
  if(isset($_POST['logout'])){
      session_destroy();        
      header("Location: ../login.php");
  }

  
?>

<?php

  

?>
  <body id="page-top">

    <!-- Navigation -->
    <?php require_once(ATEMPLATES_PATH . "/navigation.php"); ?>

    <div id="wrapper">

      <!-- Sidebar -->      
      <?php require_once(ATEMPLATES_PATH . "/sidebar.php"); ?>

      <div id="content-wrapper">
        <div class="sideshow">
          
        </div>
        <?php

          if(isset($_GET['src'])){

            require_once(APAGES_PATH . "/" . $_GET['src'] . ".php");

          }else{

            require_once(APAGES_PATH . "/dashboard.php");
          
          }

        

        ?>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
      <!--   <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer> -->

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    
      <?php require_once(MODALS_PATH . "/logout.php"); ?>


<!-- Footer -->
<?php require_once(ATEMPLATES_PATH . "/footer.php"); ?>