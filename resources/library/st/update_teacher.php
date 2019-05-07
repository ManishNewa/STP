<?php 
include"db.php";
include"link.php";

if(isset($_GET['edit_teachers'])){
    $t_id = $_GET['edit_teachers'];
    
     $query = "SELECT * FROM teacher WHERE t_id = $t_id";    
     $select_teacher_query = mysqli_query($con, $query);
                    
    while($row = mysqli_fetch_assoc($select_teacher_query)){
    $t_fname = $row['t_fname'];
    $t_lname = $row['t_lname'];
    $t_address = $row['t_address'];
    $t_contact = $row['t_contact'];
    $t_qualification = $row['t_qualification'];
    $t_email = $row['t_email'];
    $t_subject = $row['t_subject'];
    $availability = $row['availability'];
    $grade = $row['grade'];
                        
} }

if(isset($_POST['update_teacher'])){
    $t_fname = $_POST['t_fname'];
    $t_lname = $_POST['t_lname'];
    $t_address = $_POST['t_address'];
    $t_contact = $_POST['t_contact'];
    $t_qualification = $_POST['t_qualification'];
    $t_email = $_POST['t_email'];
    $t_subject = $_POST['t_subject'];
    $availability = $_POST['availability'];
    $grade = $_POST['grade'];
    
    $query = "UPDATE teacher SET t_fname = '{$t_fname}', t_lname = '{$t_lname}', t_address = '{$t_address}', t_contact = '{$t_contact}', t_qualification = '{$t_qualification}', t_email = '{$t_email}', t_subject = '{$t_subject}', grade = '{$grade}' WHERE t_id = $t_id";

$update_teacher_query = mysqli_query($con, $query);
if(!$update_teacher_query){
    die("Query Failed" . mysqli_error($con));
}
echo "Succeccfully Updated Teacher:" . "<a href = view_all_teacher.php> View All Teacher </a>";
}
?>
<form action="" method="POST" enctype="multipart/form-data"> 
    <div class = "form-group">
    <label for="t_fname"> First Name </label>
    <input class="form-control" name="t_fname" type="text" value="<?php echo $t_fname;?>">
    </div>
    
    <div class = "form-group">
    <label for="t_lname"> Last Name </label>
    <input class="form-control" name="t_lname" type="text" value="<?php echo $t_lname;?>">
    </div>
    
    <div class = "form-group">
    <label for="t_address"> Address </label>
    <input class="form-control" name="t_address" type="text" value="<?php echo $t_address;?>">
    </div>
    
    <div class = "form-group">
    <label for="t_contact"> Contact </label>
    <input class="form-control" name="t_contact" type="text" value="<?php echo $t_contact;?>">
    </div>
    
    <div class = "form-group">
    <label for="t_qualification"> Qualification </label>
    <input class="form-control" name="t_qualification" type="text" value="<?php echo $t_qualification;?>">
    </div>
    
    <div class = "form-group">
    <label for="t_email"> Email </label>
    <input class="form-control" name="t_email" type="email" value="<?php echo $t_email;?>">
    </div>
    
     <div class = "form-group">
    <label for="t_subject"> Email </label>
    <input class="form-control" name="t_subject" type="text" value="<?php echo $t_subject;?>">
    </div>
    
    <div class = "form-group">
    <label for="availability"> Availability </label>
    <select id="" name="availability">
    <option value=""> Select Option </option>
    <option value="Anytime"> Anytime </option>   
    <option value="Now"> now </option> 
    </select>
    </div>
   
    <div class = "form-group">
    <label for="grade"> Grade </label>
    <select id="" name="grade">
   <option value=""> Select Option </option>
    <option value="All"> All </option>   
    <option value="1"> 1 </option>
    <option value="2"> 2 </option>
    <option value="3"> 3 </option>
    <option value="4"> 4 </option>
    <option value="5"> 5 </option>
    <option value="6"> 6 </option>
    <option value="7"> 7 </option>
    <option value="8"> 8 </option>
    <option value="9"> 9 </option>
    <option value="10"> 10 </option>
    <option value="+2"> +2 </option>
    <option value="Bachelor"> Bachelor </option> 
    </select>
    </div>
    
    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_teacher" value="Update Teacher">    
    </div>
    
</form>

