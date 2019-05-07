 <?php
    
    $user = new User();  
    $tutor = new Tutor();
    $student = new Student();
    $assignment = new Assignment();

    $count_all_users = $user->count_all_users();
    $pending_enrollments = $assignment->count_new_enrolls();
    $available_tutors = $tutor->count_available_tutors();
    $assigned_tutors = $assignment->count_tutors_assigned();
    $enrolled_students = $assignment->count_students_assigned();

  ?>
    <!-- Bootstrap core JavaScript-->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="./vendor/chart.js/Chart.min.js"></script>
    <script src="./vendor/datatables/jquery.dataTables.js"></script>
    <script src="./vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="./js/demo/datatables-demo.js"></script>
    <script src="./js/demo/chart-area-demo.js"></script>    
    <!-- <script src="./js/demo/chart-bar-demo.js"></script> -->
    <script src="./js/script.js"></script>
    <!-- MDBootstrap Datatables  -->
    <script type="text/javascript" src="./js/addons/datatables.min.js"></script>

    <script>
      // Set new default font family and font color to mimic Bootstrap's default styling
      Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
      Chart.defaults.global.defaultFontColor = '#292b2c';

      // Bar Chart Example
      var ctx = document.getElementById("myBarChart");
      var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Users", "Pending Enrollments", "Available Tutors", "Assigned Tutors", "Students Enrolled"],
          datasets: [{
            label: "Total",
            backgroundColor: "rgba(2,117,216,1)",
            borderColor: "rgba(2,117,216,1)",
            data: [
                <?php echo $count_all_users; ?>,
                <?php echo $pending_enrollments; ?>,
                <?php echo $available_tutors; ?>,
                <?php echo $assigned_tutors; ?>,
                <?php echo $enrolled_students; ?>
            ],
          }],
        },
        options: {
          scales: {
            xAxes: [{
              time: {
                unit: 'month'
              },
              gridLines: {
                display: false
              },
              ticks: {
                maxTicksLimit: 6
              }
            }],
            yAxes: [{
              ticks: {
                min: 0,
                max: 70,
                maxTicksLimit: 5
              },
              gridLines: {
                display: true
              }
            }],
          },
          legend: {
            display: false
          }
        }
      });

    </script>
    
    
  </body>

</html>


