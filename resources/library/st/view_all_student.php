<?php include"db.php"; 
include"link.php";?>

<table class="table table-bordered table-hover">
<thead>
<tr>
<th> ID </th>
<th> FirstName </th>
<th> LastName </th>
<th> Address </th>
<th> Contact </th>
<th> Email </th>
<th> Grade </th>  
<th> Edit </th>
<th> Delete </th>
 </tr>    
</thead> 
<tbody>
<?php

    $query = "SELECT * FROM student";    
    $select_student = mysqli_query($con, $query);
                    
    while($row = mysqli_fetch_assoc($select_student)){
    $s_id = $row['s_id'];
    $s_fname = $row['s_fname']; 
    $s_lname = $row['s_lname']; 
    $s_address = $row['s_address'];  
    $s_contact = $row['s_contact'];
    $s_email = $row['s_email'];  
    $s_grade = $row['s_grade'];  
                        
    echo"<tr>";
    echo "<td> $s_id </td>";
    echo "<td> $s_fname </td>";
    echo "<td> $s_lname </td>";
    echo "<td> $s_address </td>";
    echo "<td> $s_contact </td>";
    echo "<td> $s_email </td>";
    echo "<td> $s_grade </td>";
                        
    echo "<td><a href='update_student.php?edit_students={$s_id}'>Edit</a></td>"; 
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='delete_student.php?delete_students={$s_id}'>Delete</a></td>";    
    echo"</tr>";
    }
?>
</tbody>
</table>
