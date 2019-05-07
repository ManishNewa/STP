<?php 

    require_once("header.php");
    require_once("../../init.php");

    $tutor = new Tutor();
    // $email = $_SESSION["email"];

    $id = $_GET['id'];


    // $tutor_found = $tutor->find_tutor_by_email($email);
    $tutor_found = $tutor->find_tutor_by_id($id);

    while($row = mysqli_fetch_array($tutor_found)){

        $t_id = $row['t_id'];
        $t_fname = $row['t_fname'];
        $t_lname = $row['t_lname'];
        $t_address = $row['t_address']; 
        $t_contact = $row['t_contact'];
        $qualification = $row['t_qualification'];
        $university = $row['university'];            
        $t_email = $row['t_email'];
        $t_subject = $row['t_subject'];            
        $availability = $row['availability'];
        $grade = $row['grade'];
        $image = $row['image'];

    }

?>


<div class="container emp-profile">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                <img src="../img/tutors/<?php echo $image ?>" alt="tutor image"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-head">

                <h4 class="text-capitalize">
                    <?php echo $t_fname . " " . $t_lname ?>
                </h4>

                <h6 class="text-capitalize">
                    <?php echo $t_subject ?> tutor
                </h6>

                <p class="proile-rating">RANKINGS : <span>8/10</span></p>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="col-md-2">
            <a class="profile-edit-btn" href="../search.php" name="close" >Close </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="profile-work">
                <p><h4>Tutor Description</h4></p>
                <p><h6>Graduated from <span class="text-capitalize"><?php echo $university ?> University </span></h6></p>

                    <!-- This is the enrollment modal -->
                    

            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <label>User Id</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $t_id ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                        </div>
                        <div class="col-md-6">
                            <p class="text-capitalize"><?php echo $t_fname . " " . $t_lname ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $t_email ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $t_contact ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Address</label>
                        </div>
                        <div class="col-md-6">
                            <p class="text-capitalize"><?php echo $t_address ?></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Experience</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Education Level</label>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-capitalize"><?php echo $qualification ?> </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>English Level</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Availability</label>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-capitalize"><?php echo $availability ?></p>
                                </div>
                            </div>
                    <div class="row">
                        <div class="col-md-12">
                           <!--  <label>Your Bio</label><br/>
                            <p>Your detail description</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
</div>

<?php require(MODALS_PATH . "/tutor-request.php"); ?>

<?php require_once("footer.php"); ?>



