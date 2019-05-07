<?php 

echo $_GET['src'];
// include"db.php";
// include"link.php";

// if(isset($_GET['edit_students'])){
//     $s_id = $_GET['edit_students'];
    
//      $query = "SELECT * FROM student WHERE s_id = $s_id";    
//      $select_student_query = mysqli_query($con, $query);
                    
//     while($row = mysqli_fetch_assoc($select_student_query)){
//     $s_fname = $row['s_fname'];
//     $s_lname = $row['s_lname'];
//     $s_address = $row['s_address'];
//     $s_contact = $row['s_contact'];
//     $s_email = $row['s_email'];
//     $s_grade = $row['s_grade'];
                        
// } }

// if(isset($_POST['update_student'])){
//     $s_fname = $_POST['s_fname'];
//     $s_lname = $_POST['s_lname'];
//     $s_address = $_POST['s_address'];
//     $s_contact = $_POST['s_contact'];
//     $s_email = $_POST['s_email'];
//     $s_grade = $_POST['s_grade'];
    
//     $query = "UPDATE student SET s_fname = '{$s_fname}', s_lname = '{$s_lname}', s_address = '{$s_address}', s_contact = '{$s_contact}', s_email = '{$s_email}', s_grade = '{$s_grade}' WHERE s_id = $s_id";

// $update_student_query = mysqli_query($con, $query);
// if(!$update_student_query){
//     die("Query Failed" . mysqli_error($con));
// }
// echo "Succeccfully Updated Student:" . "<a href = view_all_student.php> View All Student </a>";
// }
?><!-- 
<form action="" method="POST" enctype="multipart/form-data"> 
    <div class = "form-group">
    <label for="s_fname"> First Name </label>
    <input class="form-control" name="s_fname" type="text" value="<?php echo $s_fname;?>">
    </div>
    
    <div class = "form-group">
    <label for="s_lname"> Last Name </label>
    <input class="form-control" name="s_lname" type="text" value="<?php echo $s_lname;?>">
    </div>
    
    <div class = "form-group">
    <label for="s_address"> Address </label>
    <input class="form-control" name="s_address" type="text" value="<?php echo $s_address;?>">
    </div>
    
    <div class = "form-group">
    <label for="s_contact"> Contact </label>
    <input class="form-control" name="s_contact" type="text" value="<?php echo $s_contact;?>">
    </div>
    
    <div class = "form-group">
    <label for="s_email"> Email </label>
    <input class="form-control" name="s_email" type="email" value="<?php echo $s_email;?>">
    </div>
   
    <div class = "form-group">
    <label for="s_grade"> Grade </label>
    <select id="" name="s_grade">
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
    <input class="btn btn-primary" type="submit" name="update_student" value="Update Student">    
    </div>
    
</form>

 -->