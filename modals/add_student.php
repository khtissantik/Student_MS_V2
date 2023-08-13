<!-- modal create_new_student-->
<div class="modal fade" id="create_student">
    <div class="modal-dialog modal-xl">
        <div class="modal-content card-outline card-info">
            <form action="../action/create_student.php" method="post">
                <div class="modal-header">
                    <h4 class="modal-title" id="font">បញ្ចូលព័ត៌មានសិស្ស</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">

                    <!-- profile -->

                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="../dist/img/pf.jpg" alt="User profile picture">
                        </div>
                    </div>

                    <!-- end profile -->
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០១-អត្តលេខសិស្ស*</label>
                                <input type="text" name="student_id" class="form-control" required placeholder="បញ្ចូលអត្តលេខសិស្ស">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០២-ឈ្មោះ*</label>
                                <input type="text" name="name" class="form-control" required placeholder="បញ្ចូលឈ្មោះខ្មែរ">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៣-ភេទ*</label>
                                <select name="gender" class="form-control" required>
                                    <option value="" selected disabled>--ជ្រើសរើសភេទ--</option>
                                    <?php
                                    $sql = "SELECT *FROM tbl_gender";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?= $row['id'] ?>"><?php echo $row['gender_kh'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៤-ជនជាតិ*</label>
                                <select name="nationality" class="form-control" required>
                                    <option value="" selected disabled>--ជ្រើសរើសជនជាតិ--</option>
                                    <?php
                                    $sql = "SELECT *FROM tbl_nationality";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?= $row['id'] ?>"><?php echo $row['nat_kh'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០៥-ថ្ងៃខែឆ្នាំកំណើត*</label>
                                <input type="date" name="dob" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៦-ឆ្នាំសិក្សា*</label>
                                <select name="acadyear" class="form-control" required>
                                    <option value="" selected disabled>--ជ្រើសរើសឆ្នាំសិក្សា--</option>
                                    <?php
                                    $sql = "SELECT *FROM tbl_acadyear";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?= $row['id'] ?>"><?php echo $row['acadyear'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៧-កម្រិតសិក្សា*</label>
                                <select name="grade" class="form-control" required>
                                    <option value="" selected disabled>--ជ្រើសរើសកម្រិតសិក្សា--</option>
                                    <?php
                                    $sql = "SELECT *FROM tbl_grade";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?= $row['id'] ?>"><?php echo $row['grade_kh'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៨-ប្រភេទថ្នាក់*</label>
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
                                <label for="exampleInputEmail1">០៩-វេនសិក្សា*</label>
                                <select name="time" class="form-control" required>
                                    <option value="" selected disabled>--ជ្រើសរើសវេនសិក្សា--</option>
                                    <?php
                                    $sql = "SELECT *FROM tbl_study_time";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?= $row['id'] ?>"><?php echo $row['time_kh'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៩-អ្នកបញ្ចូលទិន្នន័យ*</label>
                                <select name="stu_modify_by" class="form-control" required>
                                    <option value="" selected disabled>--ជ្រើសរើសអ្នកបញ្ចូលទិន្នន័យ--</option>
                                    <?php
                                    $sql = "SELECT *FROM tbl_user";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?= $row['user_id'] ?>"><?php echo $row['fullname'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៩-រូបភាព*</label>
                                <input type="file" name="img" class="form-control" placeholder="បញ្ចូលរូបភាព">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">១០-ទីកន្លែងកំណើតភូមិ*</label>
                                <input type="text" name="pob_village" class="form-control" required placeholder="បញ្ចូលទីកន្លែងកំណើត">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១១-ឃុំ / សង្កាត់*</label>
                                <input type="text" name="pob_commune" class="form-control" required placeholder="បញ្ចូលឃុំ / សង្កាត់">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១២-ស្រុក / ខណ្ឌ*</label>
                                <input type="text" name="pob_district" class="form-control" required placeholder="បញ្ចូលឃុំ / សង្កាត់">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១៣-ខេត្ត / ក្រុង*</label>
                                <input type="text" name="pob_province" class="form-control" required placeholder="បញ្ចូលខេត្ត / ក្រុង">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">១៤-ឪពុកឈ្មោះ*</label>
                                <input type="text" name="father_name" class="form-control" required placeholder="បញ្ចូលឈ្មោះឪពុក">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១៥-មុខរបរ</label>
                                <input type="text" name="father_job" class="form-control" placeholder="បញ្ចូលមុខរបរ">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១៦-មា្ដយឈ្មោះ*</label>
                                <input type="text" name="mother_name" class="form-control" required placeholder="បញ្ចូលឈ្មោះម្ដាយ">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១៧-មុខរបរ</label>
                                <input type="text" name="mother_job" class="form-control" placeholder="បញ្ចូលមុខរបរ">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">១៨-ទីកន្លែងបច្ចុប្បន្នភូមិ*</label>
                                <input type="text" name="cur_village" class="form-control" required placeholder="បញ្ចូលទីកន្លែងបច្ចុប្បន្ន">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១៩-ឃុំ / សង្កាត់*</label>
                                <input type="text" name="cur_commune" class="form-control" required placeholder="បញ្ចូលឃុំ / សង្កាត់">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">២០-ស្រុក / ខណ្ឌ*</label>
                                <input type="text" name="cur_district" class="form-control" required placeholder="បញ្ចូលស្រុក / ខណ្ឌ">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">២១-ខេត្ត / ក្រុង*</label>
                                <input type="text" name="cur_province" class="form-control" required placeholder="បញ្ចូលខេត្ត / ក្រុង">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">២២-លេខទូរស័ព្ទអាណាព្យាបាល*</label>
                                <input type="text" name="guardian_phone" class="form-control" required placeholder="បញ្ចូលលេខទូរស័ព្ទអាណាព្យាបាល">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">២៣-លេខតេឡេក្រាម</label>
                                <input type="text" name="telegram" class="form-control" placeholder="បញ្ចូលលេខតេឡេក្រាម">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">២៤-ឈ្មោះគណនី Facebook</label>
                                <input type="text" name="fb" class="form-control" placeholder="បញ្ចូលឈ្មោះគណនី Facebook">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">២៥-អុីម៉ែល</label>
                                <input type="email" name="email" class="form-control" placeholder="បញ្ចូលអុីម៉ែល">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">បោះបង់</button>
                    <button type="submit" name="create_student" class="btn btn-primary">រក្សាទុក</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->