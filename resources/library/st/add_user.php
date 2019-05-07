<?php
include"db.php";
if(isset($_POST['add_user'])){
    $username = $_POST['username'];
    $u_password = $_POST['u_password'];
    $u_fname = $_POST['u_fname'];
    $u_lname = $_POST['u_lname'];
    $u_email = $_POST['u_email'];
    $u_role = $_POST['u_role'];
    
   $query = "INSERT INTO User (username,u_password, u_fname, u_lname, u_email, u_role) VALUES ('$username', '$u_password', '$u_fname', '$u_lname', '$u_email', '$u_role')";


$add_user_query = mysqli_query($con, $query);
if(!$add_user_query){
    die("Query Failed" . mysqli_error($con));
}
    echo "Succeccfully Added New Users:" . "<a href = view_all_user.php> View All User </a>";
}    
?>

<html>
  <?php include"link.php" ?> 
<form action="" method="POST" enctype="multipart/form-data"> 
    
    <div class = "form-group">
    <label for="username"> UserName </label>
    <input class="form-control" name="username" type="text">
    </div>
    
    <div class = "form-group">
    <label for="u_password"> Password </label>
    <input class="form-control" name="u_password" type="password">
    </div>
    <div class = "form-group">
    <label name="u_fname"> First Name </label>
    <input class="form-control" name="u_fname" type="text">
    </div>
    
    <div class = "form-group">
    <label for="u_lname"> Last Name </label>
    <input class="form-control" name="u_lname" type="text">
    </div>
  
    <div class = "form-group">
    <label for="u_email"> Email </label>
    <input class="form-control" name="u_email" type="email">
    </div>
  
    <div class = "form-group">
    <label for="u_role"> User Role </label>
    <select id="" name="u_role">
    <option value=""> Select Option </option>   
    <option value="admin"> Admin</option> 
    <option value="user"> User </option> 
    </select>
    </div>
    
    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="add_user" value="Add User">    
    </div>

    
</form>
</html>
