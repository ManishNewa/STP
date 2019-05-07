<?php include"db.php"; 

if(isset($_GET['delete_teachers'])){
    $t_id = $_GET['delete_teachers'];
    
    $query = "DELETE FROM teacher WHERE t_id = $t_id";
    $delete_teacher = mysqli_query($con, $query);
    if(!$delete_teacher){
        die("Query Failed". mysqli_error($con));
    }
    header("Location: view_all_teacher.php");
    
}
?>