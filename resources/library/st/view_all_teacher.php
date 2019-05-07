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
<th> Qualification </th>
<th> Email </th>
<th> Subject </th>
<th> Availability </th>
<th> Grade </th>  
<th> Edit </th>
<th> Delete </th>
 </tr>    
</thead> 
<tbody>
<?php

    $query = "SELECT * FROM teacher";    
    $select_teacher = mysqli_query($con, $query);
                    
    while($row = mysqli_fetch_assoc($select_teacher)){
    $t_id = $row['t_id'];
    $t_fname = $row['t_fname']; 
    $t_lname = $row['t_lname']; 
    $t_address = $row['t_address'];  
    $t_contact = $row['t_contact'];
    $t_qualification = $row['t_qualification'];
    $t_email = $row['t_email']; 
    $t_subject = $row['t_subject'];
    $availability = $row['availability'];
    $grade = $row['grade'];  
                        
    echo"<tr>";
    echo "<td> $t_id </td>";
    echo "<td> $t_fname </td>";
    echo "<td> $t_lname </td>";
    echo "<td> $t_address </td>";
    echo "<td> $t_contact </td>";
    echo "<td> $t_qualification </td>";
    echo "<td> $t_email </td>";
    echo "<td> $t_subject </td>";
    echo "<td> $availability </td>";
    echo "<td> $grade </td>";
                        
    echo "<td><a href='update_teacher.php?edit_teachers={$t_id}'>Edit</a></td>"; 
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='delete_teacher.php?delete_teachers={$t_id}'>Delete</a></td>";    
    echo"</tr>";
    }
?>
</tbody>
</table>
