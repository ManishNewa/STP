<?php include"db.php"; 

if(isset($_GET['delete_users'])){
    $user_id = $_GET['delete_users'];
    
    $query = "DELETE FROM user WHERE user_id = $user_id";
    $delete_user = mysqli_query($con, $query);
    if(!$delete_user){
        die("Query Failed". mysqli_error($con));
    }
    header("Location: view_all_user.php");
    
}
?>