<!-- modal 3 grade-->
<div class="modal fade" id="create_class">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card-outline card-info">
            <div class="modal-header">
                <h4 class="modal-title" id="font">បញ្ចូលព័ត៌មានកម្រិតសិក្សា</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="../action/create_class.php">
                <div class="modal-body" id="font">
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០១-កម្រិតសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="class_grade" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសវេនសិក្សា-</option>
                                        <?php
                                        $sql = "SELECT *FROM tbl_grade";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['id'] ?>"><?php echo $row['grade_kh'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០២-ប្រភេទថ្នាក់*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="class_type" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសប្រភេទថ្នាក់-</option>
                                        <?php
                                        $sql = "SELECT *FROM tbl_class_type";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['id'] ?>"><?php echo $row['class_type_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០៣-គ្រូបង្រៀន*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="teach_name" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសវេនសិក្សា-</option>
                                        <?php
                                        $sql = "SELECT *FROM tbl_teacher";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['teach_id'] ?>"><?php echo $row['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៤-វេនសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="class_time" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសវេនសិក្សា-</option>
                                        <?php
                                        $sql = "SELECT *FROM tbl_study_time";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['id'] ?>"><?php echo $row['time_kh'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០៥-ឆ្នាំសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="class_acadyear" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសវេនសិក្សា-</option>
                                        <?php
                                        $sql = "SELECT *FROM tbl_acadyear";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['id'] ?>"><?php echo $row['acadyear'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៦-អ្នកបញ្ចូលទិន្នន័យ*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="class_modify_by" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសអ្នកបញ្ចូលទិន្នន័យ-</option>
                                        <?php
                                        $sql = "SELECT *FROM tbl_user";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['user_id'] ?>"><?php echo $row['fullname'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">បោះបង់</button>
                    <button type="submit" name="create_class" class="btn btn-primary">រក្សាទុក</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end modal 3 grade -->