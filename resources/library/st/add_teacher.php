<?php
// include"db.php";
    require_once(CLASS_PATH . "/register_tutor");

if(isset($_POST['add_teacher'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $qualification = $_POST['qualification'];
    $subject = $_POST['subject'];
    $grade = $_POST['grade'];
    $email = $_POST['email'];
    $availability = $_POST['availability'];
    $username = $_POST['username'];
    $address = $_POST['address']; 
    $contact = $_POST['contact'];
    $password = $_POST['password'];    
    $role = "tutor";
    $image = $_FILES['image']['name'];

    /*Image uploading part*/

    $image_dir = IMAGES_PATH . "/tutors/";
    $target_dir = $image_dir . basename($_FILES['image']['name']);
    

    echo "before uploading";

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)) {
        echo "The file ". basename( $_FILES['image']['name']). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


    //the path to store the uploaded image
    if(isset($_POST["imageToUpload"])){
      echo "Uploading image start";
      $image_dir = IMAGES_PATH . "/tutor/";
      $image_file = $image_dir . basename($_FILES["imageToUpload"]["name"]);
      
      // Check if image file is a actual image or fake image
      if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $image_file)) {
              echo "The file ". basename( $_FILES["imageToUpload"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
      
    }
    
    /*Ending of Image uploading part*/


    $register_tutor = new RegisterTutor($fname,$lname,$qualification,$subject,$grade,$address,$email,$availability,$username,$contact,$password,$role,$image);
    
    $register_tutor->register_in_tutor();
    $register_tutor->register_in_user();

  }
  /*End of tutor registration*/




    $query = "INSERT INTO Teacher (t_fname, t_lname, t_address, t_contact, t_qualification, t_email, t_subject, availability, grade) VALUES ('$t_fname', '$t_lname', '$t_address', '$t_contact', '$t_qualification', '$t_email', '$t_subject', '$availability', '$grade')";

    $add_teacher_query = mysqli_query($con, $query);
    if(!$add_teacher_query){
        die("Query Failed" . mysqli_error($con));
    }
    echo "Succeccfully Added New Teacher:" . "<a href = view_all_teacher.php> View All Teacher </a>";
}
?>

<?php //include"link.php" ?> 
<form action="" method="POST" enctype="multipart/form-data"> 
    <div class = "form-group">
    <label for="t_fname"> First Name </label>
    <input class="form-control" name="t_fname" type="text">
    </div>
    
    <div class = "form-group">
    <label for="t_lname"> Last Name </label>
    <input class="form-control" name="t_lname" type="text">
    </div>
    
    <div class = "form-group">
    <label for="t_address"> Address </label>
    <input class="form-control" name="t_address" type="text">
    </div>
    
    <div class = "form-group">
    <label for="t_contact"> Contact </label>
    <input class="form-control" name="t_contact" type="text">
    </div>
    
    <div class = "form-group">
    <label for="t_qualification"> Qualification </label>
    <input class="form-control" name="t_qualification" type="text">
    </div>
    
    <div class = "form-group">
    <label for="t_email"> Email </label>
    <input class="form-control" name="t_email" type="email">
    </div>
    
    <div class = "form-group">
    <label for="t_subject"> Subject </label>
    <input class="form-control" name="t_subject" type="text">
    </div>
    
    <div class = "form-group">
    <label for="grade"> Grade </label>
    <select id="" name="grade">
    <option value=""> Select Option </option>
    <option value="All"> All </option> 
    <option value="10"> 10 </option>
    <option value="+2"> +2 </option>
    <option value="bachelors"> Bachelors </option>
    <option value="masters"> Masters </option>
    </select>
    </div>
    
    <div class = "form-group">
    <label for="availability"> Availability </label>
    <select id="" name="availability">
    <option value=""> Select Option </option>
    <option value="anytime"> Anytime </option>   
    <option value="now"> now </option> 
    </select>
    </div>
    
    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="add_teacher" value="Add Teacher">    
    </div>

    
</form>
