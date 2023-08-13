<!-- include header -->
<?php include('header.php'); ?>

<body class="hold-transition sidebar-mini ">
    <div class="wrapper">

        <!-- Navbar and  Main Sidebar Container and brand logo-->
        <?php include('navbar.php'); ?>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary  elevation-4" style="background-color: #0087B2;">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="../dist/img/logo.png" alt="Stung Thmey Logo" class="brand-image img-circle " style="opacity: .8">
                <span class="brand-text h6" id="font">សាលាបឋមសិក្សាស្ទឹងថ្មី</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar mt-1">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-flat nav-collapse-hide-child nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" id="font">
                        <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="index.php" class="nav-link " role="button">
                                <i class="nav-icon fas fa-home "></i>
                                <p>
                                    ទំព័រដើម
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">គ្រប់គ្រងទិន្នន័យ</li>
                        <li class="nav-item treeview">
                            <a href="teacher.php" class="nav-link ">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    គ្រូបង្រៀន
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="class.php" class="nav-link active">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    ថ្នាក់រៀន
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="schedule.php" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    កាលវិភាគសិក្សា
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="student.php" class="nav-link">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>
                                    សិស្ស
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="subject.php" class="nav-link">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>
                                    មុខវិជ្ជា
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="student_score.php" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                    ពិន្ទុសិស្ស
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="attenden.php" class="nav-link">
                                <i class="nav-icon fas fa-user-check"></i>
                                <p>
                                    វត្តមានសិស្ស
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="report.php" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    របាយការណ៍
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">ការកំណត់</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    កំណត់
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="permission.php" class="nav-link">
                                        <i class="nav-icon fas fa-user-cog"></i>
                                        <p>សិទ្ធអ្នកប្រើប្រាស់</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="note.php" class="nav-link">
                                        <i class="nav-icon fas fa-sticky-note"></i>
                                        <p>កត់ចំណាំ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="backup_data.php" class="nav-link ">
                                        <i class="nav-icon fas fa-file-download"></i>
                                        <p>បម្រុងទុក</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>ឯកសារពាក់ព័ន្ធ</p>
                                        <i class="right fas fa-angle-left"></i>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="new_acadyear.php" class="nav-link">
                                                <i class="nav-icon fa fa-plus fa-lg"></i>
                                                <p>បង្កើតឆ្នាំសិក្សាថ្មី</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="new_grade.php" class="nav-link">
                                                <i class="nav-icon fa fa-plus fa-lg"></i>
                                                <p>បង្កើតកម្រិតសិក្សាថ្មី</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="new_nationality.php" class="nav-link">
                                                <i class="nav-icon fa fa-plus fa-lg"></i>
                                                <p>បង្កើតសញ្ជាតិថ្មី</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="new_stu_status.php" class="nav-link">
                                                <i class="nav-icon fa fa-plus fa-lg"></i>
                                                <p>បង្កើតស្ថានភាពសិស្សថ្មី</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="new_teach_status.php" class="nav-link">
                                                <i class="nav-icon fa fa-plus fa-lg"></i>
                                                <p>បង្កើតបង្កើតស្ថានភាពគ្រូថ្មី</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link ">
                                        <i class="nav-icon fas fa-info-circle fa-lg"></i>
                                        <p>អំពី</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </nav>

                <!-- /.sidebar-menu -->

            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header" id="font">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">ថ្នាក់រៀន</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">ទំព័រដើម</a></li>
                                <li class="breadcrumb-item active">ថ្នាក់រៀន</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- -------------------------------------------------------------------------------------------------------------------- -->




            <!-- Main content -->
            <section class="content ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group" id="font">
                                <div class="row">
                                    <div class="col">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <select name="#" class="form-control" required>
                                                <option value="" selected disabled>-ជ្រើសរើសឆ្នាំសិក្សា-</option>
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
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                            </div>
                                            <select name="#" class="form-control" required>
                                                <option value="" selected disabled>-ជ្រើសរើសកម្រិតថ្នាក់-</option>
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
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                            </div>
                                            <select name="#" class="form-control" required>
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
                            <!-- /.card -->

                            <div class="card ">
                                <div class="card-header p-3" id="font">
                                    <h3 class="card-title">ថ្នាក់រៀន</h3>
                                    <div class="card-tools">
                                        <a href="class.php"><button class="btn btn-danger mr-2 " type="button"><i class="nav-icon"></i> ថយក្រោយ</button></a>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body p-3" id="font">
                                    <table id="example1" class="table table-bordered table-hover">

                                        <thead>
                                            <tr style="font-size: 13px;">
                                                <th>ល.រ</th>
                                                <th>អត្តលេខ</th>
                                                <th>ឈ្មោះខ្មែរ</th>
                                                <th>ភេទ</th>
                                                <th>ថ្ងៃខែឆ្នាំកំណើត</th>
                                                <th>ឆ្នាំសិក្សា</th>
                                                <th>កម្រិត</th>
                                                <th>ប្រភេទថ្នាក់</th>
                                                <th>វេនសិក្សា</th>
                                                <th>លេខទូរស័ព្ទ</th>
                                                <th>ស្ថានភាព</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 14px;">
                                        <?php
                                            if ($_GET['grade_id'] AND $_GET['time_id'] AND $_GET['acadyear_id'] AND $_GET['class_type_id']) {
                                                $grade_id = mysqli_real_escape_string($con,  $_GET['grade_id']);
                                                $time_id = mysqli_real_escape_string($con, $_GET['time_id']);
                                                $acadyear_id = mysqli_real_escape_string($con, $_GET['acadyear_id']);
                                                $class_type_id = mysqli_real_escape_string($con, $_GET['class_type_id']);
                                                $query = "SELECT * FROM tbl_grade
                                                INNER JOIN tbl_student on tbl_grade.id=tbl_student.grade
                                                INNER JOIN tbl_class_type on tbl_student.class_type = tbl_class_type.id
                                                INNER JOIN tbl_gender on tbl_student.gender=tbl_gender.id
                                                INNER JOIN tbl_study_time on tbl_student.time=tbl_study_time.id
                                                INNER JOIN tbl_acadyear on tbl_student.acadyear = tbl_acadyear.id
                                                INNER JOIN tbl_status on tbl_student.status = tbl_status.id
                                                WHERE tbl_grade.id = $grade_id AND tbl_study_time.id = $time_id AND tbl_acadyear.id = $acadyear_id AND tbl_class_type.id = $class_type_id AND tbl_status.id = 1";
                                                $query_run = mysqli_query($con, $query);

                                                if (mysqli_num_rows($query_run) > 0) {
                                                    foreach ($query_run as $row) {
                                            ?>
                                                    <tr>
                                                        <td><?= $row['stu_id']; ?></td>
                                                        <td><?= $row['student_id']; ?></td>
                                                        <td><?= $row['name']; ?></td>
                                                        <td><?= $row['gender_kh']; ?></td>
                                                        <td><?= $row['dob']; ?></td>
                                                        <td><?= $row['acadyear']; ?></td>
                                                        <td><?= $row['grade_kh']; ?></td>
                                                        <td><?= $row['class_type_name']; ?></td>
                                                        <td><?= $row['time_kh']; ?></td>
                                                        <td><?= $row['guardian_phone']; ?></td>
                                                        <td><a class="btn btn-info btn-sm"><?= $row['status']; ?></a></td>
                                                        
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
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->

        </div>
            <!-- --------------------------------------------------------------------------------------------------------------------- -->
        </div>
        <?php include("../modals/add_class.php") ?>
        <?php include('footer.php'); ?>