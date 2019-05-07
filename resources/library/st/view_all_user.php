<?php include"db.php"; 
include"link.php";?>

<table class="table table-bordered table-hover">
<thead>
<tr>
<th> ID </th>
<th> Username </th>
<th> Password </th>
<th> FirstName </th>
<th> LastName </th>
<th> Email </th>
<th> Role </th>  
<th> Edit </th>
<th> Delete </th>
 </tr>    
</thead> 
<tbody>
<?php

    $query = "SELECT * FROM user";    
    $select_user = mysqli_query($con, $query);
                    
    while($row = mysqli_fetch_assoc($select_user)){
    $user_id = $row['user_id'];
    $username = $row['username'];
    $u_password = $row['u_password'];
    $u_fname = $row['u_fname']; 
    $u_lname = $row['u_lname']; 
    $u_email = $row['u_email'];  
    $u_role = $row['u_role'];  
                        
    echo"<tr>";
    echo "<td> $user_id </td>";
    echo "<td> $username </td>";
    echo "<td> $u_password </td>";
    echo "<td> $u_fname </td>";
    echo "<td> $u_lname </td>";
    echo "<td> $u_email </td>";
    echo "<td> $u_role </td>";
                        
    echo "<td><a href='update_user.php?edit_users={$user_id}'>Edit</a></td>"; 
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='delete_user.php?delete_users={$user_id}'>Delete</a></td>";    
    echo"</tr>";
    }
?>
</tbody>
</table>
