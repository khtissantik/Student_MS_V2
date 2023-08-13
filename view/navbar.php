

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-info" style="background-color: #0087B2;">
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


      
        <div class="nav-item dropdown " >
          <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action " id="font"><img src="../dist/img/pf.jpg" class="avatar" alt="Avatar"><?php echo $_SESSION['fullname']; ?><b class="caret"></b></a>
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
