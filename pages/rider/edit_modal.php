<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Rider Info</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Rider ID:</label>
                    <input name="txt_edit_rider" class="form-control input-sm" type="int" value="'.$row['rider_id'].'"/>
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input name="txt_edit_name" class="form-control input-sm" type="text" value="'.$row['name'].'"/>
                </div>
                <div class="form-group">
                    <label>Phone Number:</label>
                    <input name="txt_edit_phone" class="form-control input-sm" type="int" value="'.$row['phone_number'].'"/>
                </div>
                <div class="form-group">
                    <label>Username:</label>
                    <input name="txt_edit_uname" class="form-control input-sm" id="username" type="text" value="'.$row['username'].'"/>
                    <label id="user_msg" style="color:#CC0000;" ></label>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input name="txt_edit_pass" class="form-control input-sm" type="password" value="'.$row['password'].'"/>
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>