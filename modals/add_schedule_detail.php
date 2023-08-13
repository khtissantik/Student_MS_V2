<div class="modal fade" id="create_schedule_detail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card-outline card-info">
            <div class="modal-header">
                <h4 class="modal-title" id="font">បញ្ចូលទិន្នន័យកាលវិភាគ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="../action/create_schedule_detail.php">
                <div class="card-body">
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០១-កម្រិតសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="grade" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសកម្រិតសិក្សា</option>
                                        <?php
                                        $id=$_GET['grade_id'];
                                        $sql = "SELECT *FROM tbl_grade WHERE id=$id";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['id'] ?>" selected ><?php echo $row['grade_kh'] ?></option>
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
                                        $id=$_GET['class_type_id'];
                                        $sql = "SELECT *FROM tbl_class_type WHERE id=$id";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['id'] ?>" selected ><?php echo $row['class_type_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០៣-វេនសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="time" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសវេនសិក្សា-</option>
                                        <?php
                                        $id=$_GET['time_id'];
                                        $sql = "SELECT *FROM tbl_study_time WHERE id=$id";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['id'] ?>" selected><?php echo $row['time_kh'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៤-ឆ្នាំសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="acadyear" class="form-control" required>
                                        <option value="" selected disabled>-ជ្រើសរើសឆ្នាំសិក្សា-</option>
                                        <?php
                                        $id=$_GET['acadyear_id'];
                                        $sql = "SELECT *FROM tbl_acadyear WHERE id=$id";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <option value="<?= $row['id'] ?>" selected><?php echo $row['acadyear'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០១-ម៉ោងសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="time" name="sch_time" class="form-control" required placeholder="បញ្ចូលម៉ោងសិក្សា">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០២-សម្រាប់ថ្ងៃចន្ទ*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="sch_monday" class="form-control" required placeholder="បញ្ចូលទិន្នន័យថ្ងៃចន្ទ">
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៣-សម្រាប់ថ្ងៃអង្គារ*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="sch_tuesday" class="form-control" required placeholder="បញ្ចូលទិន្នន័យថ្ងៃអង្គារ">
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៤-សម្រាប់ថ្ងៃពុធ*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="sch_wednesday" class="form-control" required placeholder="បញ្ចូលទិន្នន័យថ្ងៃពុធ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០៥-សម្រាប់ថ្ងៃព្រហស្បតិ៍*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="sch_thursday" class="form-control" required placeholder="បញ្ចូលទិន្នន័យថ្ងៃព្រហស្បតិ៍">
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៦-សម្រាប់ថ្ងៃសុក្រ*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="sch_friday" class="form-control" required placeholder="បញ្ចូលទិន្នន័យថ្ងៃសុក្រ">
                                </div>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៧-សម្រាប់ថ្ងៃសៅរ៍*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="sch_saturday" class="form-control" required placeholder="បញ្ចូលទិន្នន័យថ្ងៃសៅរ៍">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">បោះបង់</button>
                    <button type="submit" name="create_schedule_detail" class="btn btn-primary">រក្សាទុក</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>