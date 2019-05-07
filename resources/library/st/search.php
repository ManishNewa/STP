<?php include "db.php"; ?> 
<?php include "searchsubject.php"; ?> 


<?php
               
            if(isset($_POST['search'])){
            $name = $_POST['name'];
            $grade = $_POST['grade'];
            $availability = $_POST['availability'];
          
            $query = "SELECT * FROM teacher WHERE t_subject = '$name' AND availability = '$availability' AND grade = '$grade'";
            $search_query = mysqli_query($con, $query);
            if(!$search_query){
              die ("Query Failed". mysqli_error($con));
            }
      
        $count = mysqli_num_rows($search_query);
        if($count == 0){
          echo "NO RESULT";
        }else{
            echo "<table border=1>";
            echo "<tr><th> First Name </th>
                 <th> Last Name </th>
                 <th> Address </th>
                 <th> Contact </th>
                 <th> Email </th>
                 <th> Subject </th>
                 <th> Grade </th>
                 <th> Availability </th></tr>";
                   
          while($row = mysqli_fetch_assoc( $search_query)){
            echo "<tr><td>". $row['t_fname'] ."</td><td>". $row['t_lname'] ."</td><td>". $row['t_address']. "</td><td>". $row['t_contact'] ."</td><td>". $row['t_email'] ."</td><td>". $row['t_subject'] ."</td><td>" .$row['grade'] ."</td><td>". $row['availability'] ."</td></tr>" ;
              echo "</table>";
          }
        }
            }
                ?>