<?php
	 	
	$tutor = new Tutor();
	$student  = new Student();
	$user = new User();
	$assignment = new Assignment();

	if(isset($_POST['acheckBoxArray'])){

		foreach ($_POST['acheckBoxArray'] as $checkboxvalue) {

			// echo $checkboxvalue . " ";
			$bulk_options = $_POST['abulk_options'];		
			
			switch ($bulk_options) {

				case 'assign':
					$t_id = $assignment->add_assign($checkboxvalue);
					$tutor->assign_tutor($t_id);

					break;
				
				case 'remove_assign':
					$t_id = $assignment->remove_assign($checkboxvalue);
					$tutor->remove_tutor_assign($t_id);
					
					break;

				case 'delete':
					$t_id = $assignment->delete($checkboxvalue);
					$tutor->remove_tutor_assign($t_id);

					break;
			}

		}

	}


	if(isset($_GET["assign_id"])){

		$assign_id = $_GET["assign_id"];
		$t_id = $assignment->add_assign($assign_id);
		$tutor->assign_tutor($t_id);
		
	}

	if(isset($_GET["remove_id"])){

		$remove_id = $_GET["remove_id"];
		$t_id = $assignment->remove_assign($remove_id);
		$tutor->remove_tutor_assign($t_id);

	}
	
?>


<!-- DataTables Example -->
<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  List of Assignments
	</div>
	<div class="card-body">

  	<form action="" method="POST">

    	<div class="row">
    		<div id="tbulkOptionContainer" class="col-md-4">
		   	 <select class="form-control" name="abulk_options" id=""> 
		   	 	<option value="">Select Options</option>
		   	 	<option value="assign">Assign</option>
		   	 	<option value="remove_assign">Remove Assign</option>
		   	 	<option class="delete_link" value="delete">Delete</option>
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
			          <th>Student Name</th>
			          <th>Tutor Name</th>
			          <th>Assignment</th>
			        </tr>
			      </thead>
			      <tfoot>
			        <tr>
			          <th><input type="checkbox" id="t1selectAllBoxes"></th>		        
			          <th>Id</th>
			          <th>Student Name</th>
			          <th>Tutor Name</th>
			          <th>Assignment</th>
			        </tr>
			      </tfoot>
			      <tbody>

			    <?php

					$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	                $items_per_page = 5;

		            $items_total_count = Assignment::count_all_assign();

	 	            $paginate = new Paginate($page, $items_per_page, $items_total_count);

					$sql = "SELECT *FROM assign ";
					$sql.= "LIMIT {$items_per_page} ";
					$sql.= "OFFSET {$paginate->offset()} ";
					                  
			    	$assigned_results = $assignment->paginate_all_assign($sql);


			    	while ($assign_row = mysqli_fetch_array($assigned_results)){
			    		
			    		$assign_id = $assign_row['assign_id'];
			    		$t_id = $assign_row['t_id'];
			    		$s_id = $assign_row['s_id'];

				    	$tutor_results = $tutor->find_tutor_by_id($t_id);
				    	$student_results = $student->find_student_by_id($s_id);

			    ?>
				   <tr class="text-capitalize">
				   	
			   		  <td><input class="tcheckBoxes" type="checkbox" name="acheckBoxArray[]" value="<?php echo $assign_id ?>"></td>
			          <td><?php echo $assign_id ?></td>

			          <td>		          	
				          <?php

					          while($student_row = mysqli_fetch_array($student_results)){

					           echo $student_row['s_fname'] . " " . $student_row['s_lname'];

					          }	
				           	
				          ?>

			          </td>

			          <td>		          	
				          <?php
					          while($tutor_row = mysqli_fetch_array($tutor_results)){

					           echo $tutor_row['t_fname'] . " " . $tutor_row['t_lname'];

					          }	
				          ?>
			          </td>
			          <td><?php echo $assign_row['assignment'] ?></td>

			          <?php

			          	if($assign_row['assignment'] == "true"){

			          ?>

			   		  	<td><a class="btn btn-primary" href="index.php?src=assignment&remove_id=<?php echo $assign_row['assign_id'] ?>">Remove assign</a></td>
			   		  	
			   		  <?php

			   		  	}else{

			          ?>
			   		  <td><a class="btn btn-primary" href="index.php?src=assignment&assign_id=<?php echo $assign_row['assign_id'] ?>">Assign</a></td>


			   		  <?php 

			   		  	}
			   		  ?>


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
							echo "<li class='page-item'><a class='page-link' href='index.php?src=assignment&page={$paginate->previousPage()}'>Previous</a></li>";
						}

						for($i=1 ; $i<=$paginate->totalPages() ; $i++){

							if($i == $paginate->current_page){
								echo "<li class='page-item active'><a class='page-link' href='index.php?src=assignment&page={$i}'>{$i}</a></li>";
							}else{
								echo "<li class='page-item'> <a class='page-link' href='index.php?src=assignment&page={$i}'>{$i}</a></li>";
							}                        


						}

						if($paginate->has_nextPage()){                        
							echo "<li class='page-item'><a class='page-link' href='index.php?src=assignment&page={$paginate->nextPage()}'>Next</a></li>";
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

