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
                            <a href="class.php" class="nav-link">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    ថ្នាក់រៀន
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="schedule.php" class="nav-link active">
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
                            if (isset($_GET['id'])) {
                                $show = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM schedules
                                    INNER JOIN tbl_grade on schedules.sch_grade = tbl_grade.id
                                    INNER JOIN tbl_acadyear on schedules.sch_acadyear = tbl_acadyear.id
                                    INNER JOIN tbl_time on schedules.sch_time = tbl_time.id WHERE sch_id='$show'";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    $row = mysqli_fetch_array($query_run);
                            ?>
                                    <h1 class="m-0">កាលវិភាគ<?= $row['grade_kh']; ?></h1>
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
                                            <h3 class="card-title">វេនសិក្សា៖ <?= $row['time_kh']; ?> | ឆ្នាំសិក្សា៖ <?= $row['acadyear']; ?> | គ្រូបង្រៀន៖ <?= $row['sch_teacher']; ?> </h3>
                                            <br><br>
                                            <h3 class="card-title">កាលបរិច្ឆេទកំណត់៖ <?= $row['sch_date']; ?> | វេនសិក្សា៖ <?= $row['sch_expire']; ?> </h3>
                                        </div>
                                <?php
                                } else {
                                    echo "<h4> not success</h4>";
                                }
                            }
                                ?>
                                    </h3>
                                    <div class="card-tools">
                                        <a href="schedule.php"><button class="btn btn-danger " type="button">ថយក្រោយ</button></a>
                                        <a><button class="btn btn-primary " data-toggle="modal" data-target="#create_schedule_list" type="button"><i class="nav-icon fas fa-plus"></i> បញ្ចូលទិន្នន័យ</button></a>
                                    </div>
                                </div>

                                <!-- /.card-header -->

                                <div class="card-body p-3 ">
                                    <table id="font" class="table table-bordered table-hover">
                                        <thead>
                                            <tr style="font-size: 14px;">
                                                <th>ម៉ោងសិក្សា</th>
                                                <th>ចន្ទ</th>
                                                <th>អង្គារ</th>
                                                <th>ពុធ</th>
                                                <th>ព្រហស្បតិ៍</th>
                                                <th>សុក្រ</th>
                                                <th>សៅរ៍</th>
                                            </tr>
                                        </thead>
                                        <tbody id="font" style="font-size: 14px;">
                                            <?php
                                            if (isset($_GET['id'])) {
                                                $show = mysqli_real_escape_string($con, $_GET['id']);
                                                $query = "SELECT * FROM schedules
                                                    INNER JOIN tbl_grade on schedules.sch_grade = tbl_grade.id
                                                    INNER JOIN tbl_acadyear on schedules.sch_acadyear = tbl_acadyear.id
                                                    INNER JOIN tbl_time on schedules.sch_time = tbl_time.id WHERE sch_id='$show'";
                                                $query_run = mysqli_query($con, $query);
                
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    $row = mysqli_fetch_array($query_run);
                                            ?>
                                                <tr>
                                                    <td><?= $row['study_time']; ?></td>
                                                    <td><?= $row['sch_mon']; ?></td>
                                                    <td><?= $row['sch_tue']; ?></td>
                                                    <td><?= $row['sch_wed']; ?></td>
                                                    <td><?= $row['sch_thu']; ?></td>
                                                    <td><?= $row['sch_fri']; ?></td>
                                                    <td><?= $row['sch_sat']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?= $row['study_timei']; ?></td>
                                                    <td><?= $row['sch_moni']; ?></td>
                                                    <td><?= $row['sch_tuei']; ?></td>
                                                    <td><?= $row['sch_wedi']; ?></td>
                                                    <td><?= $row['sch_thui']; ?></td>
                                                    <td><?= $row['sch_frii']; ?></td>
                                                    <td><?= $row['sch_sati']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?= $row['study_timeii']; ?></td>
                                                    <td><?= $row['sch_monii']; ?></td>
                                                    <td><?= $row['sch_tueii']; ?></td>
                                                    <td><?= $row['sch_wedii']; ?></td>
                                                    <td><?= $row['sch_thuii']; ?></td>
                                                    <td><?= $row['sch_friii']; ?></td>
                                                    <td><?= $row['sch_satii']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?= $row['study_timeiii']; ?></td>
                                                    <td><?= $row['sch_moniii']; ?></td>
                                                    <td><?= $row['sch_tueiii']; ?></td>
                                                    <td><?= $row['sch_wediii']; ?></td>
                                                    <td><?= $row['sch_thuiii']; ?></td>
                                                    <td><?= $row['sch_friiii']; ?></td>
                                                    <td><?= $row['sch_satiii']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?= $row['study_timeiv']; ?></td>
                                                    <td><?= $row['sch_moniv']; ?></td>
                                                    <td><?= $row['sch_tueiv']; ?></td>
                                                    <td><?= $row['sch_wediv']; ?></td>
                                                    <td><?= $row['sch_thuiv']; ?></td>
                                                    <td><?= $row['sch_friiv']; ?></td>
                                                    <td><?= $row['sch_sativ']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?= $row['study_timev']; ?></td>
                                                    <td><?= $row['sch_monv']; ?></td>
                                                    <td><?= $row['sch_tuev']; ?></td>
                                                    <td><?= $row['sch_wedv']; ?></td>
                                                    <td><?= $row['sch_thuv']; ?></td>
                                                    <td><?= $row['sch_friv']; ?></td>
                                                    <td><?= $row['sch_satv']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?= $row['study_timevi']; ?></td>
                                                    <td><?= $row['sch_monvi']; ?></td>
                                                    <td><?= $row['sch_tuevi']; ?></td>
                                                    <td><?= $row['sch_wedvi']; ?></td>
                                                    <td><?= $row['sch_thuvi']; ?></td>
                                                    <td><?= $row['sch_frivi']; ?></td>
                                                    <td><?= $row['sch_satvi']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?= $row['study_timevii']; ?></td>
                                                    <td><?= $row['sch_monvii']; ?></td>
                                                    <td><?= $row['sch_tuevii']; ?></td>
                                                    <td><?= $row['sch_wedvii']; ?></td>
                                                    <td><?= $row['sch_thuvii']; ?></td>
                                                    <td><?= $row['sch_frivii']; ?></td>
                                                    <td><?= $row['sch_satvii']; ?></td>
                                                </tr>
                                            <?php
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