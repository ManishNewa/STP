<?php

	session_start();   

	require_once("../../init.php");	
 	require_once("./templates/header.php");
  
  // set_session();

    if($_SESSION['role'] != "tutor"){
        header("Location: ../login.php");
    }

    /*Destroying session when user logs out*/
    
    if(isset($_POST['logout'])){
        session_destroy();        
        header("Location: ../login.php");
    }

    /*Set user id*/

 



  
?>

	<!--header start-->
	<?php require_once("./templates/navigation.php"); ?>
    <!--header end-->

    <!--sidebar start-->
	<?php require_once("./templates/sidebar.php"); ?>
    <!--sidebar end-->


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <!-- row -->



        <?php

    	  if(isset($_GET['src'])){

            require_once(COMPONENTS_PATH . "/" . $_GET['src'] . ".php");

          }else{

            require_once(COMPONENTS_PATH . "/profile.php");
          
          }

        ?>



        <!-- /row -->
      </section>
    </section>
    <!--main content end-->





    <!-- Logout Modal-->
    <?php require_once(MODALS_PATH . "/logout.php") ?>


    <!--footer start-->
<?php require_once("./templates/footer.php"); ?>