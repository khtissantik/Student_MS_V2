<?php 
session_start(); 
include('dbcon.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="dist/img/moey.png" type="image/x-icon" />
 
  <title>ចូលប្រព័ន្ធ</title>

  <style>
    .error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 100%;
   border-radius: 4px;
   margin: 20px auto;
}
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- khmer font -->
  <link href="https://fonts.cdnfonts.com/css/khmer" rel="stylesheet">
  <link href="view/stylesheets.css" rel="stylesheet">
                
</head>
<body class="hold-transition login-page" style="background-image:url(dist/img/bgs.jpg) ;">
<div id="bg-shadow" class="hold-transition login-page " ></div>
<div class="login-box shadow-sm " style="width: 450px; ">
  
  <!-- /.login-logo -->
  <div class="card ">
    <div class="card-body login-card-body " >
    <div class="login-logo">
    <img src="dist/img/m.png" alt="">
  </div>
      <p class="login-box-msg mb-0">សាលាបឋមសិក្សា ស្ទឹងថ្មី</p>
<hr class="mt-0">
      <?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
      <form action="login.php" method="post">
        <div class="email-title">ឈ្មោះអ្នកប្រើប្រាស់</div>
        <div class="input-group mb-3">
          <input type="text" name="user" autofocus  class="form-control" placeholder="បញ្ចូលឈ្មោះ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="password-title">ពាក្យសម្ងាត់​</div>
        <div class="input-group mb-3">
            
          <input type="password" name="pass"  class="form-control" placeholder="បញ្ចូលពាក្យសម្ងាត់">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                ចងចាំពាក្យសម្ងាត់  
              </label>
            </div>
          </div>

        </div>
        <div class="social-auth-links text-center mb-3">
       

      <button type="submit" class="btn btn-primary btn-block">ចូល</button>
        
      </div>
      <!-- /.social-auth-links -->
      </form>

      

      
    </div>
    <!-- /.login-card-body -->
  </div>

<!-- /.login-box -->
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
