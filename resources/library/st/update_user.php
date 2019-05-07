<?php 
include"db.php";
include"link.php";

if(isset($_GET['edit_users'])){
    $user_id = $_GET['edit_users'];
    
     $query = "SELECT * FROM user WHERE user_id = $user_id";    
     $select_user_query = mysqli_query($con, $query);
                    
    while($row = mysqli_fetch_assoc($select_user_query)){
    
    $username = $row['username'];
    $u_password = $row['u_password'];
    $u_fname = $row['u_fname']; 
    $u_lname = $row['u_lname']; 
    $u_email = $row['u_email'];  
    $u_role = $row['u_role'];
                        
} }

if(isset($_POST['update_user'])){
    $username = $_POST['username'];
    $u_password = $_POST['u_password'];
    $u_fname = $_POST['u_fname'];
    $u_lname = $_POST['u_lname'];
    $u_email = $_POST['u_email'];
    $u_role = $_POST['u_role'];
    
    $query = "UPDATE user SET username = '{$username}', u_password = '{$u_password}', u_fname = '{$u_fname}', u_lname = '{$u_lname}', u_email = '{$u_email}', u_role = '{$u_role}' WHERE user_id = $user_id";

$update_user_query = mysqli_query($con, $query);
if(!$update_user_query){
    die("Query Failed" . mysqli_error($con));
}
echo "Succeccfully Updated User:" . "<a href = view_all_user.php> View All User </a>";
}
?>
<form action="" method="POST" enctype="multipart/form-data"> 
    
     <div class = "form-group">
    <label for="username">  UserName </label>
    <input class="form-control" name="username" type="text" value="<?php echo $username;?>">
    </div>
    
     <div class = "form-group">
    <label for="u_password"> Password </label>
    <input class="form-control" name="u_password" type="text" value="<?php echo $u_password;?>">
    </div>
    
    <div class = "form-group">
    <label for="u_fname"> First Name </label>
    <input class="form-control" name="u_fname" type="text" value="<?php echo $u_fname;?>">
    </div>
    
    <div class = "form-group">
    <label for="u_lname"> Last Name </label>
    <input class="form-control" name="u_lname" type="text" value="<?php echo $u_lname;?>">
    </div>
    
    <div class = "form-group">
    <label for="u_email"> Email </label>
    <input class="form-control" name="u_email" type="email" value="<?php echo $u_email;?>">
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
    <input class="btn btn-primary" type="submit" name="update_user" value="Update User">    
    </div>
    
</form>

