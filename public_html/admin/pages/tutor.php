<?php
	 	
	$tutor = new Tutor();
	$user = new User();

	if(isset($_POST['tcheckBoxArray'])){

		foreach ($_POST['tcheckBoxArray'] as $checkboxvalue) {

			// echo $checkboxvalue . " ";
			$bulk_options = $_POST['tbulk_options'];		
			
			switch ($bulk_options) {
				case 'assign':
					
					break;
				
				case 'remove_assign':
					
					break;
				
				case 'delete':
					$result = mysqli_fetch_array($tutor->find_tutors_by_id($checkboxvalue));
					$email = $result['t_email'];
					$user->delete_users_by_email($email);
					$tutor->delete_tutors_by_id($checkboxvalue);
					break;
				
				default:
					# code...
					break;
			}

		}

	}
	
?>


<!-- DataTables Example -->
<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  List of Tutors
	</div>
	<div class="card-body">
		<form action="" method="POST">
			<div class="row">
				<div id="tbulkOptionContainer" class="col-md-4">
			   	 <select class="form-control" name="tbulk_options" id=""> 
			   	 	<option value="">Select Options</option>
			   	 	<option value="assign">Assign</option>
			   	 	<option value="remove_assign">Remove Assign</option>
			   	 	<option value="delete">Delete</option>
			   	 </select>				    	
			   </div>

			   <div class="col-md-4">
			   		<input type="submit" name="tsubmit" class="btn btn-success" value="Apply">
			   		<a class="btn btn-primary" href="index.php?src=add_tutor">Add New</a>
			   </div>		    		
			</div>
			<br>


	  <div class="table-responsive">


	    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">	    
		    
		      <thead>
		        <tr>
		          <th><input type="checkbox" id="tselectAllBoxes"></th>		    
		          <th>Id</th>
		          <th>Name</th>
		          <th>Subject</th>
		          <th>University</th>
		          <th>Address</th>
		          <th>Contact</th>
		          <th>Email</th>
		        </tr>
		      </thead> 

		      <tfoot>
		        <tr>
		          <th><input type="checkbox" id="t1selectAllBoxes"></th>		    
		          <th>Id</th>
		          <th>Name</th>
		          <th>Subject</th>
		          <th>University</th>
		          <th>Address</th>
		          <th>Contact</th>
		          <th>Email</th>
		        </tr>
		      </tfoot>

		      <tbody>

		    <?php

				$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

                $items_per_page = 10;


	            $items_total_count = Tutor::count_all_tutors();

 	            $paginate = new Paginate($page, $items_per_page, $items_total_count);

				$sql = "SELECT *FROM tutor ";
				$sql.= "LIMIT {$items_per_page} ";
				$sql.= "OFFSET {$paginate->offset()} ";
				                  

		    	$tutor_results = $tutor->paginate_all_tutors($sql);

		    	while ($row = mysqli_fetch_array($tutor_results)){

		    ?>
		   <tr class="text-capitalize">
		   		  <td><input class="tcheckBoxes" type="checkbox" name="tcheckBoxArray[]" value="<?php echo $row['t_id'] ?>"></td>
		          <td><?php echo $row['t_id'] ?></td>
		          <td><?php echo $row['t_fname'] . " " . $row['t_lname'] ?></td>
		          <td><?php echo $row['t_subject'] ?></td>
		          <td><?php echo $row['university'] ?></td>
		          <td><?php echo $row['t_address'] ?></td>
		          <td><?php echo $row['t_contact'] ?></td>
		          <td class="text-lowercase"><?php echo $row['t_email'] ?></td>
		   		  <td><a class="btn btn-primary" href="index.php?src=update_tutor&id=<?php echo $row['t_id'] ?>">Edit</a></td>


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
						echo "<li class='page-item'><a class='page-link' href='index.php?src=tutor&page={$paginate->previousPage()}'>Previous</a></li>";
					}

					for($i=1 ; $i<=$paginate->totalPages() ; $i++){

						if($i == $paginate->current_page){
							echo "<li class='page-item active'><a class='page-link' href='index.php?src=tutor&page={$i}'>{$i}</a></li>";
						}else{
							echo "<li class='page-item'> <a class='page-link' href='index.php?src=tutor&page={$i}'>{$i}</a></li>";
						}                        


					}

					if($paginate->has_nextPage()){                        
						echo "<li class='page-item'><a class='page-link' href='index.php?src=tutor&page={$paginate->nextPage()}'>Next</a></li>";
					}

				}

				echo "</ul>";
				echo "</nav>";


			 ?>

	  </div>
	  </form>

	</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>


  
</div>

<?php 
	
	require_once(ATEMPLATES_PATH . "/footer.php");

?>