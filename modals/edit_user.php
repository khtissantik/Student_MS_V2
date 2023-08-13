<!-- modal -->
<div class="modal fade" id="edit_user">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card-outline card-info">
            <div class="modal-header">
                <h4 class="modal-title" id="font">បន្ថែមអ្នកប្រើប្រាស់</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../action/create_user.php" method="post">

                <div class="modal-body" id="font">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ឈ្មោះ</label>
                                <input type="text" class="form-control" name="name" placeholder="បញ្ចូលឈ្មោះ">
                            </div>
                            <div class="form-group">
                                <label>ថ្ងៃខែឆ្នាំកំណើត</label>
                                <input type="date" name="dob" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>លេខទូរស័ព្ទ</label>
                                <input type="number" name="phone" class="form-control" placeholder="បញ្ចូលលេខទូរស័ព្ទ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ឈ្មោះអ្នកប្រើប្រាស់</label>
                                <input type="text" name="username" class="form-control" placeholder="បញ្ចូលឈ្មោះអ្នកប្រើប្រាស់">
                            </div>
                            <div class="form-group">
                                <label>ពាក្យសម្ងាត់</label>
                                <input type="text" name="password" class="form-control" placeholder="បញ្ចូលពាក្យសម្ងាត់">
                            </div>
                            <div class="form-group">
                                <label>សិទ្ធប្រើប្រាស់</label>
                                <select id="font" class="form-control select2" name="permission" required style="width: 100%;">
                                    <option>---ជ្រើសរើស---</option>
                                    <option>Onwer</option>
                                    <option>Admin</option>
                                    <option>Teacher</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="create_user" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->