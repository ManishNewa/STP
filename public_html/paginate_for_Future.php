<!-- php code in the search.php file -->
<?php

                $tutor = new Tutor();
                // $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
                // $items_per_page = 3;
                  

                if(isset($_POST['search_submit'])){
                  
                  $subject = strtolower($_POST['subject_name']);
                  /*
                  $items_total_count = Tutor::count_by_subject($subject);

                  $paginate = new Paginate($page, $items_per_page, $items_total_count);*/

                  $tutor_found = $tutor->find_tutor_by_subject($subject);

                  

                }else if(isset($_POST['subject_search_again'])){

                  $subject = $_POST['subject'];
                  $grade = $_POST['grade'];
                  $availability = $_POST['availability']; 
/*
                  $items_total_count = Tutor::count_by_all_conditions($subject, $grade, $availability);

                  $paginate = new Paginate($page, $items_per_page, $items_total_count);   */                

                  $tutor_found = $tutor->find_tutor_by_all_conditions($subject, $grade, $availability);
                
                }else{
                  
                  /*$items_total_count = Tutor::count_all();

                  $paginate = new Paginate($page, $items_per_page, $items_total_count);   */                

                  $tutor_found = $tutor->find_all_tutors();
                
                } 
                while($tutor_list = mysqli_fetch_array($tutor_found)){
                  include("searchDisplay.php");
                }

                  /*echo"<nav aria-label='Page navigation example'>";
                   echo "<ul class='pagination justify-content-center'>"; 

                        if($paginate->totalPages() > 1){

                          if($paginate->has_previousPage()){                        
                            echo "<li class='page-item'><a class='page-link' href='search.php?page={$paginate->previousPage()}'>Previous</a></li>";
                          }

                          for($i=1 ; $i<=$paginate->totalPages() ; $i++){

                            if($i == $paginate->current_page){
                              echo "<li class='page-item active'><a class='page-link' href='search.php?page={$i}'>{$i}</a></li>";
                            }                            


                          }

                          if($paginate->has_nextPage()){                        
                            echo "<li class='page-item'><a class='page-link' href='search.php?page={$paginate->nextPage()}'>Next</a></li>";
                          }
                        
                          

                        }


                   echo "</ul>";
                 echo "</nav>";
*/               
           
 ?>




