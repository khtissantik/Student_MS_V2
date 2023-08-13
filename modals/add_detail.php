<!-- modal 3 grade-->
<div class="modal fade" id="create_detail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card-outline card-info">
            <div class="modal-header">
                <h4 class="modal-title" id="font">បញ្ចូលព័ត៌មានកម្រិតសិក្សា</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="../action/create_detail.php">
                <div class="modal-body" id="font">
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០១-ឈ្មោះ</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="detail_kh" class="form-control" placeholder="បញ្ចូលឈ្មោះ">
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០២-ឆ្នាំសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="acadyear" class="form-control" required>
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
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០៣-កម្រិតសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="grade" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសកម្រិតសិក្សា-</option>
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
                                <label for="exampleInputEmail1">០៤-វេនសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="time" class="form-control" required>
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
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">បោះបង់</button>
                    <button type="submit" name="create_detail" class="btn btn-primary">រក្សាទុក</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end modal 3 grade -->