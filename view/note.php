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
              <a href="teacher.php" class="nav-link">
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
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
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
                  <a href="note.php" class="nav-link active">
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
              <h1 class="m-0">កត់ចំណាំ </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">ទំព័រដើម</a></li>
                <li class="breadcrumb-item active">កត់ចំណាំ</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- -------------------------------------------------------------------------------------------------------------------- -->




      <!-- Main content -->
      <section class="content " id="font">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <!-- /.card-header -->

              <!-- /.card-body -->

              <!-- /.card -->

              <div class="card ">
              <div class="card-header" id="font">
                                    <h3 class="card-title">ផ្ទាំងជូនដំណឹង</h3>
                                    <div class="card-tools">
                                    <a><button class="btn btn-primary mr-2" data-toggle="modal" data-target="#create_subject" type="button"><i class="nav-icon fas fa-plus"></i> បង្កើតការជូនដំណឹង</button></a>
                                    </div>
                                </div>
                <!-- /.card-header -->

                <div class="card-body p-3 ">
                  <table id="example1" class="table table-bordered table-hover table-striped">
                    <thead id="font">
                      <tr style="font-size: 13px;">
                        <th>ល.រ</th>
                        <th>ចំណងជើង</th>
                        <th>លម្អិត</th>
                        <th>ថ្ងៃចាប់ផ្ដើម</th>
                        <th>ថ្ងៃបញ្ចប់</th>

                      </tr>
                    </thead>
                    <tbody style="font-size: 14px;" id="font">
                    <?php
                      include_once('../dbcon.php');
                      $sql = "SELECT * FROM schedule_list";

                      //use for MySQLi Procedure
                      $query = mysqli_query($con, $sql);
                     
                      while ($row = mysqli_fetch_assoc($query)) {

                      ?>
                        <tr id="font">
                            <td><b><?php echo $row['id']; ?></b></td>
                            <td><a href=""><?php echo $row['title']; ?></a></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['start_datetime']; ?></td>
                            <td><?php echo $row['end_datetime']; ?></td>
                        </tr>
                        
                        <?php
                    
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
    <?php include('footer.php'); ?>