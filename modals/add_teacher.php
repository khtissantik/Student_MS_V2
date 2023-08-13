<!-- modal create_new_student-->
<div class="modal fade" id="create_teacher">
    <div class="modal-dialog modal-xl">
        <div class="modal-content card-outline card-info">
            <form action="../action/create_teacher.php" method="post">
                <div class="modal-header">
                    <h4 class="modal-title" id="font">បញ្ចូលព័ត៌មានគ្រូ</h4>
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
                                <label for="exampleInputEmail1">០១-ឈ្មោះ*</label>
                                <input type="text" name="name" class="form-control" required placeholder="បញ្ចូលឈ្មោះខ្មែរ">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០២-ភេទ*</label>
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
                                <label for="exampleInputEmail1">០៣-ជនជាតិ*</label>
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
                                <label for="exampleInputEmail1">០៤-ថ្ងៃខែឆ្នាំកំណើត*</label>
                                <input type="date" name="dob" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៥-ស្ថានភាពសិស្ស*</label>
                                <select name="marital" class="form-control" required>
                                    <option value="" selected disabled>--ជ្រើសរើស--</option>
                                    <?php
                                    $sql = "SELECT *FROM tbl_marital";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?= $row['id'] ?>"><?php echo $row['marital_kh'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៦-លេខទំនាក់ទំនង*</label>
                                <input type="text" name="phone" class="form-control" required placeholder="បញ្ចូលលេខទូរស័ព្ទ">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០៧-ទីកន្លែងកំណើតភូមិ*</label>
                                <input type="text" name="pob_village" class="form-control" required placeholder="បញ្ចូលទីកន្លែងកំណើត">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៨-ឃុំ / សង្កាត់*</label>
                                <input type="text" name="pob_commune" class="form-control" required placeholder="បញ្ចូលឃុំ / សង្កាត់">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">០៩-ស្រុក / ខណ្ឌ*</label>
                                <input type="text" name="pob_district" class="form-control" required placeholder="បញ្ចូលស្រុក / ខណ្ឌ">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១០-ខេត្ត / ក្រុង*</label>
                                <input type="text" name="pob_province" class="form-control" required placeholder="បញ្ចូលខេត្ត / ក្រុង">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">១១-លេខអត្តសញ្ញាណប័ណ្ណ*</label>
                                <input type="text" name="identity_no" class="form-control" required placeholder="បញ្ចូលលេខអត្តសញ្ញាណប័ណ្ណ">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១២-តេលេក្រាម*</label>
                                <input type="text" name="telegram" class="form-control" required placeholder="បញ្ចូលលេខ">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១៣-email</label>
                                <input type="text" name="email" class="form-control" placeholder="បញ្ចូលអុីម៉ែល">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១៤-អ្នកបញ្ចូលទិន្នន័យ</label>
                                <select name="teach_modify_by" class="form-control" required>
                                    <option value="" selected disabled>--ជ្រើសរើសអ្នកកែទិន្នន័យ--</option>
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
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">១៥-ទីកន្លែងបច្ចុប្បន្នភូមិ*</label>
                                <input type="text" name="cur_village" class="form-control" required placeholder="បញ្ចូលទីកន្លែងបច្ចុប្បន្ន">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១៦-ឃុំ / សង្កាត់*</label>
                                <input type="text" name="cur_commune" class="form-control" required placeholder="បញ្ចូលឃុំ / សង្កាត់">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១៧-ស្រុក / ខណ្ឌ*</label>
                                <input type="text" name="cur_district" class="form-control" required placeholder="បញ្ចូលស្រុក / ខណ្ឌ">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">១៨-ខេត្ត / ក្រុង*</label>
                                <input type="text" name="cur_province" class="form-control" required placeholder="បញ្ចូលខេត្ត / ក្រុង">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">បោះបង់</button>
                    <button type="submit" name="create_teacher" class="btn btn-primary">រក្សាទុក</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->