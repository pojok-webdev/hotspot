<div class="modal fade" id="editUser">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



      <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit User</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" id="txtEditName" class="form-control">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="" id="txtEditEmail" class="form-control">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" id="password" class="form-control">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Group</label>
                  <select class="form-control select2" style="width: 100%;" id="txtEditGroup">
                    <option disabled="disabled">Admin</option>
                    <option selected="selected">Non Admin</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnUpdate">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
