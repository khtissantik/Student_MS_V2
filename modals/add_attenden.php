<!-- modal create_new_student-->
<div class="modal fade" id="create_attenden">
    <div class="modal-dialog modal-xl">
        <div class="modal-content card-outline card-info">
            <form action="../action/create_attenden.php" method="post">
                <div class="modal-header">
                    <h4 class="modal-title" id="font">បញ្ចូលវត្តមានសិស្ស</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០១-កម្រិតសិក្សា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="att_grade" class="form-control" required>
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
                                    <select name="att_class_type" class="form-control" required>
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
                                    <select name="att_time" class="form-control" required>
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
                                    <select name="att_acadyear" class="form-control" required>
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
                            <div class="col">
                                <label for="exampleInputEmail1">០៥-អ្នកបញ្ចូលទិន្នន័យ*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select name="att_modify_by" class="form-control" required>
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
                    <div class="form-group" id="font">
                    <div class="card-body p-3" id="font">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr style="font-size: 13px;">
                                                <th>ល.រ</th>
                                                <th>អត្តលេខ</th>
                                                <th>ឈ្មោះខ្មែរ</th>
                                                <th>ភេទ</th>
                                                <th>ថ្ងៃខែឆ្នាំកំណើត</th>
                                                <th>លេខទូរស័ព្ទ</th>
                                                <th>ស្ថានភាព</th>
                                                <th class="text-success">វត្តមាន</th>
                                                <th class="text-primary">សុំច្បាប់</th>
                                                <th class="text-danger">អវត្តមាន</th>
                                                <th>មូលហេតុ</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 14px;">

                                            <?php
                                            if ($_GET['grade_id'] and $_GET['time_id'] and $_GET['acadyear_id'] and $_GET['class_type_id']) {
                                                $grade_id = mysqli_real_escape_string($con,  $_GET['grade_id']);
                                                $time_id = mysqli_real_escape_string($con, $_GET['time_id']);
                                                $acadyear_id = mysqli_real_escape_string($con, $_GET['acadyear_id']);
                                                $class_type_id = mysqli_real_escape_string($con, $_GET['class_type_id']);
                                                $query = "SELECT * FROM tbl_grade
                                                INNER JOIN tbl_student on tbl_grade.id=tbl_student.grade
                                                INNER JOIN tbl_class_type on tbl_student.class_type=tbl_class_type.id
                                                INNER JOIN tbl_gender on tbl_student.gender=tbl_gender.id
                                                INNER JOIN tbl_study_time on tbl_student.time=tbl_study_time.id
                                                INNER JOIN tbl_acadyear on tbl_student.acadyear = tbl_acadyear.id
                                                INNER JOIN tbl_status on tbl_student.status = tbl_status.id
                                                WHERE tbl_grade.id = $grade_id AND tbl_study_time.id = $time_id AND tbl_acadyear.id = $acadyear_id AND tbl_class_type.id = $class_type_id AND tbl_status.id = 1";
                                                $query_run = mysqli_query($con, $query);
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    foreach ($query_run as $row) {
                                                    $i=0;
                                            ?>
                                            <tr>
                                                <input type="hidden"name="student_id[]"value="<?= $row['stu_id'];?>">
                                                <td><?= $row['stu_id']; ?></td>
                                                <td><?= $row['student_id']; ?></td>
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['gender_kh']; ?></td>
                                                <td><?= $row['dob']; ?></td>
                                                <td><?= $row['guardian_phone']; ?></td>
                                                <td><a class="btn btn-info btn-sm"><?= $row['status']; ?></a></td>
                                                <td><input name="attenden<?=$i ?>" type="checkbox" id="checkboxPrimary1" value="<?= $row['student_id'] ?>"></td>
                                                <td><input name="attenden<?=$i ?>" type="checkbox" id="checkboxPrimary1" value="<?= $row['student_id'] ?>"></td>
                                                <td><input name="attenden<?=$i ?>" type="checkbox" id="checkboxPrimary1" value="<?= $row['student_id'] ?>"></td>
                                                <td><input type="text" name="att_note" class="form-group"></td>
                                                <?php $i++; ?>
                                            </tr>
                                        <?php
                                        }
                                        }
                                        } else {
                                            echo "<h5> No Record Found </h5>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">បោះបង់</button>
                    <button type="submit" name="create_attenden" class="btn btn-primary">រក្សាទុក</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->