<div class="modal fade" id="enroll_<?php echo $tutor_list['t_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request the tutor?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Request" below if you want to enroll with the tutor.<?php echo $tutor_list['t_id']; ?></div>
      <div class="modal-footer">

        <form method="POST" action="search.php?request=<?php echo $tutor_list['t_id']; ?>">

          <!-- Enrollment code is still on process -->


          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" name="request_tutor" class="btn btn-primary">Request</button>              
        </form>
      </div>
    </div>
  </div>
</div>