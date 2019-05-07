<?php
	 	
	$student = new Student();
	$user = new User();

	if(isset($_POST['checkBoxArray'])){

		foreach ($_POST['checkBoxArray'] as $checkboxvalue) {

			// echo $checkboxvalue . " ";
			$bulk_options = $_POST['bulk_options'];		
			
			switch ($bulk_options) {
				case 'assign':
					
					break;
				
				case 'remove_assign':
					
					break;
				
				case 'delete':
					$result = mysqli_fetch_array($student->find_student_by_id($checkboxvalue));
					$email = $result['s_email'];
					$user->delete_users_by_email($email);
					$student->delete_student_by_id($checkboxvalue);
					break;
				
				default:
					
					break;
			}

		}

	}
	
?>


<!-- DataTables Example -->
<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  List of Students
	</div>
	<div class="card-body">

  	<form action="" method="POST">	
  		<div class="row">
			<div id="bulkOptionContainer" class="col-md-4">
		   	 <select class="form-control" name="bulk_options" id=""> 
		   	 	<option value="">Select Options</option>
		   	 	<option value="assign">Assign</option>
		   	 	<option value="remove_assign">Remove Assign</option>
		   	 	<option value="delete">Delete</option>
		   	 </select>				    	
		   </div>
		   <div class="col-md-4">
		   		<input type="submit" name="tsubmit" class="btn btn-success" value="Apply">
		   		<a class="btn btn-primary" href="index.php?src=add_student">Add New</a>
		   		<input input type="submit" name="tedit" class="btn btn-primary" value="Edit">
		   </div>	
		
		</div>
		<br>

	  <div class="table-responsive">
		    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">	    

		      <thead>
		        <tr>
		          <th><input type="checkbox" id="selectAllBoxes"></th>		        
		          <th>Id</th>
		          <th>Name</th>
		          <th>Address</th>
		          <th>Contact</th>		          
		          <th>Grade</th>
		          <th>Email</th>
		        </tr>
		      </thead>
		      <tfoot>
		        <tr>
		          <th><input type="checkbox" id="1selectAllBoxes"></th>		        
		          <th>Id</th>
		          <th>Name</th>
		          <th>Address</th>
		          <th>Contact</th>		          
		          <th>Grade</th>
		          <th>Email</th>
		        </tr>
		      </tfoot>
		      <tbody>

		    <?php
				
				$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

                $items_per_page = 5;


	            $items_total_count = Student::count_all_students();

 	            $paginate = new Paginate($page, $items_per_page, $items_total_count);

				$sql = "SELECT *FROM student ";
				$sql.= "LIMIT {$items_per_page} ";
				$sql.= "OFFSET {$paginate->offset()} ";
				                  
		    	$student_results = $student->paginate_all_students($sql);

		    	while ($row = mysqli_fetch_array($student_results)){

		    ?>
		   <tr class="text-capitalize">
		   		  <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="<?php echo $row['s_id'] ?>"></td>
		          <td><?php echo $row['s_id'] ?></td>
		          <td><?php echo $row['s_fname'] . " " . $row['s_lname'] ?></td>
		          <td><?php echo $row['s_address'] ?></td>
		          <td><?php echo $row['s_contact'] ?></td>
		          <td><?php echo $row['s_grade'] ?></td>
		          <td class="text-lowercase"><?php echo $row['s_email'] ?></td>
		   		  <td><a class="btn btn-primary" href="index.php?src=update_student&id=<?php echo $row['s_id'] ?>">Edit</a></td>

		        </tr>

		    <?php
		    
		    	}

	        ?>
		        
		      </tbody>
		    </table>

		    <?php

				echo"<nav aria-label='Page navigation example'>";
				echo "<ul class='pagination justify-content-center'>"; 

				if($paginate->totalPages() > 1){

					if($paginate->has_previousPage()){                        
						echo "<li class='page-item'><a class='page-link' href='index.php?src=student&page={$paginate->previousPage()}'>Previous</a></li>";
					}

					for($i=1 ; $i<=$paginate->totalPages() ; $i++){

						if($i == $paginate->current_page){
							echo "<li class='page-item active'><a class='page-link' href='index.php?src=student&page={$i}'>{$i}</a></li>";
						}else{
							echo "<li class='page-item'> <a class='page-link' href='index.php?src=student&page={$i}'>{$i}</a></li>";
						}                        


					}

					if($paginate->has_nextPage()){                        
						echo "<li class='page-item'><a class='page-link' href='index.php?src=student&page={$paginate->nextPage()}'>Next</a></li>";
					}

				}

				echo "</ul>";
				echo "</nav>";


			 ?>

		  </div>

		</form>
	</div>
	<!-- Card body ends -->
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>


<?php //require_once(ATEMPLATES_PATH . "/footer.php"); ?>