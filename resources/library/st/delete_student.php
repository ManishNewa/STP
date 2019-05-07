<?php include"db.php"; 

if(isset($_GET['delete_students'])){
    $s_id = $_GET['delete_students'];
    
    $query = "DELETE FROM student WHERE s_id = $s_id";
    $delete_student = mysqli_query($con, $query);
    if(!$delete_student){
        die("Query Failed". mysqli_error($con));
    }
    header("Location: view_all_student.php");
    
}
?>