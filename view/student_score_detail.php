<!-- include header -->
<?php include('header.php'); ?>

<body class="hold-transition sidebar-mini ">
    <div class="wrapper">

        <!-- Navbar and  Main Sidebar Container and brand logo-->


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-info" style="background-color: #0087B2; width: 2200px;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

                            <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li> -->

                <div class="nav-item dropdown ">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action "><img src="../dist/img/pf.jpg" class="avatar" alt="Avatar"><?php echo $_SESSION['fullname']; ?><b class="caret"></b></a>
                    <div class="dropdown-menu">
                        <a href="index.php" class="dropdown-item " id="font"><i class="fas fa-home"></i> ទំព័រដើម</a></a>
                        <div class="dropdown-divider"></div>
                        <a href="profile.php" class="dropdown-item" id="font"><i class="fa fa-user"></i> Profile</a></a>
                        <a href="#" class="dropdown-item" id="font"><i class="fa fa-calendar"></i> Calendar</a></a>
                        <a href="#" class="dropdown-item" id="font"><i class="fa fa-cog"></i> Settings</a></a>
                        <div class="dropdown-divider"></div>
                        <a href="../logout.php" class="dropdown-item" id="font" onclick="return confirm('Are you logout?')"><i class="fa-solid fa-right-from-bracket"></i>
                            Logout</a></a>
                    </div>

            </ul>
        </nav>
        <!-- /.navbar -->


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
                            <a href="class.php" class="nav-link">
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
                            <a href="student_score.php" class="nav-link active">
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
        <div class="content-wrapper" style="width: 2200px;">
            <!-- Content Header (Page header) -->
            <div class="content-header" id="font">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">មុខវិជ្ជា</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">ទំព័រដើម</a></li>
                                <li class="breadcrumb-item active">មុខវិជ្ជា</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- -------------------------------------------------------------------------------------------------------------------- -->




            <!-- Main content -->
            <section class="content">
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
                                            <select name="fetchval" id="fetchval" class="form-control" required>
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
                                <div class="row">
                                    <div class="col mt-2">
                                    <button type="button" class="btn btn-outline-info">Filter</button>   
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>  
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->

                            <div class="card ">

                                <div class="card-header p-3" id="font">
                                    <h3 class="card-title">ថ្នាក់រៀន</h3>
                                    <div class="card-tools">
                                        <a href="student_score.php"><button class="btn btn-danger " type="button">ថយក្រោយ</button></a>
                                        <a><button class="btn btn-primary " data-toggle="modal" data-target="#" type="button"><i class="nav-icon fas fa-plus"></i> បង្កើតមុខវិជ្ជា</button></a>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body p-3" id="font">
                                    <table id="example" class="table table-bordered table-hover">
                                        <thead style="font-size: 13px;">
                                            <tr>
                                                <th>ល.រ</th>
                                                <th>អត្តលេខ</th>
                                                <th>ឈ្មោះខ្មែរ</th>
                                                <th>ភេទ</th>
                                               
                                                <th style="writing-mode: vertical-rl;">រៀនអាន</th>
                                                <th style="writing-mode: vertical-rl;">តែងសេចក្ដី</th>
                                                <th style="writing-mode: vertical-rl;">សរសេរតាមអាន</th>
                                                <th style="writing-mode: vertical-rl;">មេសូត្រ</th>
                                                <th style="writing-mode: vertical-rl;">រឿងនិទាន</th>
                                                <th style="writing-mode: vertical-rl;">វេយ្យករណ៍</th>
                                                <th style="writing-mode: vertical-rl;">រៀនពាក្យ</th>
                                                <th style="writing-mode: vertical-rl;">អក្សរផ្ចង់</th>
                                                <th style="writing-mode: vertical-rl;">នព្វន្ត</th>
                                                <th style="writing-mode: vertical-rl;">មាត្រាប្រព័ន្ធ</th>
                                                <th style="writing-mode: vertical-rl;">ធរណីមាត្រ</th>
                                                <th style="writing-mode: vertical-rl;">វិទ្យាសាស្រ្ដអនុវត្ត</th>
                                                <th style="writing-mode: vertical-rl;">ប្រវត្តិវិទ្យា</th>
                                                <th style="writing-mode: vertical-rl;">ភូមិវិទ្យា</th>
                                                <th style="writing-mode: vertical-rl;">សុភាវធម៌-ពលរដ្ឋ</th>
                                                <th style="writing-mode: vertical-rl;">គំនូរ</th>
                                                <th style="writing-mode: vertical-rl;">ចម្រៀង-របាំ</th>
                                                <th style="writing-mode: vertical-rl;">អង់គ្លេស-បារាំង</th>
                                                <th style="writing-mode: vertical-rl;">ហត្ថកម្ម</th>
                                                <th style="writing-mode: vertical-rl;">អប់រំកាយ</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 13px;">
                                        <th>ល.រ</th>
                                                <th></th>
                                                <th>ខ្ទិស​ សន្ទិក</th>
                                             
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                <th><input type="number" class="form-control border-0"></th>
                                                
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
        <?php include("../modals/add_subject.php") ?>
        <!-- footer -->
        