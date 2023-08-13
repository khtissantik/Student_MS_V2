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
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

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
                            <?php
                            if ($_GET['grade_id']) {
                                $grade_id = mysqli_real_escape_string($con,  $_GET['grade_id']);
                                $time_id = mysqli_real_escape_string($con, $_GET['time_id']);
                                $acadyear_id = mysqli_real_escape_string($con, $_GET['acadyear_id']);
                                $query = "SELECT * FROM tbl_grade
                                INNER JOIN class on tbl_grade.id = class.class_grade
                                INNER JOIN students on tbl_grade.id = students.grade
                                INNER JOIN tbl_time on class.time = tbl_time.id
                                INNER JOIN tbl_acadyear on class.class_acadyear = tbl_acadyear.id
                                WHERE tbl_grade.id = $grade_id AND tbl_time.id = $time_id AND tbl_acadyear.id = $acadyear_id";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    $row = mysqli_fetch_array($query_run);

                            ?>
                                <h1 class="m-0"><?= $row['grade_kh']; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">ទំព័រដើម</a></li>
                                <li class="breadcrumb-item active">កាលវិភាគសិក្សា</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!---------------------------------------------------------------------------------------------------------------------- -->

            <!-- filter -->
            <!-- Scheduls 1 -->
            <!-- Main content -->
            <section class="content ">
                <div class="container-fluid">
                    <div class="card">
                        <!-- /.card-header -->

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card ">
                                <div class="card-header p-3" id="font">
                                    <h3 class="card-title">
                                        <div id="font">
                                            <h3 class="card-title">គ្រូបង្រៀន៖ <?= $row['teacher_name']; ?> | វេនសិក្សា៖ <?= $row['time_kh']; ?> | ឆ្នាំសិក្សា៖ <?= $row['acadyear']; ?></h3>
                                            <br><br>
                                        </div>
                                    <?php
                                        }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                    ?>
                                    </h3>
                                    <div class="card-tools">
                                        <a href="class.php"><button class="btn btn-danger " type="button">ថយក្រោយ</button></a>
                                        <a><button class="btn btn-primary " data-toggle="modal" data-target="#create_schedule_list" type="button"><i class="nav-icon fas fa-plus"></i> បញ្ចូលទិន្នន័យ</button></a>
                                    </div>
                                </div>

                                <!-- /.card-header -->

                                <div class="card-body p-3 ">
                                    <table id="font" class="table table-bordered table-hover">
                                        <thead>
                                            <tr style="font-size: 14px;">
                                                <th>ល.រ</th>
                                                <th>អត្តលេខ</th>
                                                <th>ឈ្មោះខ្មែរ</th>
                                                <th>ភេទ</th>
                                                <th>ថ្ងៃខែឆ្នាំកំណើត</th>
                                                <th>ឆ្នាំសិក្សា</th>
                                                <th>ឆមាស</th>
                                                <th>កម្រិត</th>
                                                <th>វេនសិក្សា</th>
                                                <th>លេខទូរស័ព្ទ</th>
                                                <th>ស្ថានភាព</th>
                                                <th>សកម្មភាព</th>
                                            </tr>
                                        </thead>
                                        <tbody id="font" style="font-size: 14px;">
                                            <?php
                                            if ($_GET['grade_id'] AND $_GET['time_id'] AND $_GET['acadyear_id']) {
                                                $grade_id = mysqli_real_escape_string($con,  $_GET['grade_id']);
                                                $time_id = mysqli_real_escape_string($con, $_GET['time_id']);
                                                $acadyear_id = mysqli_real_escape_string($con, $_GET['acadyear_id']);
                                                $query = "SELECT * FROM tbl_grade
                                                            INNER JOIN students on tbl_grade.id=students.grade
                                                            INNER JOIN tbl_gender on students.gender=tbl_gender.id
                                                            INNER JOIN tbl_semester on students.semester=tbl_semester.id
                                                            INNER JOIN tbl_time on students.time=tbl_time.id
                                                            INNER JOIN tbl_stu_status on students.status = tbl_stu_status.id
                                                            INNER JOIN tbl_acadyear on students.acadyear = tbl_acadyear.id
                                                            WHERE tbl_grade.id = $grade_id AND tbl_time.id = $time_id AND tbl_acadyear.id = $acadyear_id";
                                                $query_run = mysqli_query($con, $query);

                                                if (mysqli_num_rows($query_run) > 0) {
                                                    $row = mysqli_fetch_array($query_run);

                                                    if (mysqli_num_rows($query_run) > 0) {
                                                        foreach ($query_run as $row) {
                                            ?>
                                                            <tr>
                                                                <td><?= $row['stu_id']; ?></td>
                                                                <td><?= $row['student_id']; ?></td>
                                                                <td><?= $row['name_kh']; ?></td>
                                                                <td><?= $row['gender_kh']; ?></td>
                                                                <td><?= $row['dob']; ?></td>
                                                                <td><?= $row['acadyear']; ?></td>
                                                                <td><?= $row['semester_kh']; ?></td>
                                                                <td><?= $row['grade_kh']; ?></td>
                                                                <td><?= $row['time_kh']; ?></td>
                                                                <td><?= $row['guardian_phone']; ?></td>
                                                                <td><?= $row['stu_status_kh']; ?></td>
                                                                <td>
                                                                    <a href="view_class.php?id=<?= $row['id']; ?>" class="btn btn-info btn-sm text-white"><i class="fas fa-eye"></i></a>
                                                                    <a href="edit_employee.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm text-white"><i class="fas fa-edit"></i></a>
                                                                    <form action="delete.php" method="POST" class="d-inline">
                                                                        <button onclick="return confirm('Are you sure want to delete?')" type="submit " name="delete_employee" value="<?= $row['id']; ?>" class="btn btn-danger btn-sm text-white"><i class="fas fa-trash"></i></button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                            <?php
                                                        }
                                                    }
                                                }
                                            } else {
                                                echo "<h5> No Record Found </h5>";
                                            }
                                            ?>
                                            </td>
                                            </tr>
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

            <!-- --------------------------------------------------------------------------------------------------------------------- -->

        </div>
        <?php include("../modals/add_schedule.php") ?>
        <?php include('footer.php'); ?>