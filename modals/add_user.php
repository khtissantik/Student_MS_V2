<!-- modal -->
<div class="modal fade" id="create_user">
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
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">ឈ្មោះ</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="fullname" placeholder="បញ្ចូលឈ្មោះ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">ឈ្មោះអ្នកប្រើប្រាស់</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control" placeholder="បញ្ចូលឈ្មោះអ្នកប្រើប្រាស់">
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">ពាក្យសម្ងាត់</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="password" class="form-control" placeholder="បញ្ចូលពាក្យសម្ងាត់">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">សិទ្ធអ្នកប្រើប្រាស់</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                        <select class="form-control" name="permission" required>
                                        <option value="" selected disabled>-ជ្រើសរើសសិទ្ធ-</option>
                                        <option>Onwer</option>
                                        <option>Admin</option>
                                        <option>Teacher</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">ស្ថានភាព</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="status" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសស្ថានភាព-</option>
                                        <?php
                                        $sql = "SELECT *FROM tbl_status";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['id'] ?>"><?php echo $row['status'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">លេខទូរស័ព្ទ</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="phone" class="form-control" placeholder="បញ្ចូលលេខទូរស័ព្ទ">
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">អ្នកកែទិន្នន័យ</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                </div>
                                <input type="text" name="modify_by" class="form-control" placeholder="បញ្ចូលអ្នកកែទិន្នន័យចុងក្រោយ">
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-danger" data-dismiss="modal">បោះបង់</button>
    <button type="submit" name="create_user" class="btn btn-primary">រក្សាទុក</button>
</div>
        </div>
        
    </div>
    
</div>
</div>

</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->