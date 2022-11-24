<?php
// include 'nav.php';
require_once 'database.php';

?>


<div class="modal" id="delete_records_confirmation_modal" tabindex="-1" style="margin-top: 100px;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header" style="background-color:bisque">
        <h5 class="modal-title">Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Do you want to delete this record?</p>
      </div>
      <div class="modal-footer">
        <button id="confirm_delete_btn" type="button" class="btn btn-success">Confirm</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
