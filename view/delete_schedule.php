

<?php
session_start();
include_once('../dbcon.php');

if (isset($_GET['id'])) {
  $id = mysqli_real_escape_string($con, $_GET['id']);

  $sql = "DELETE FROM schedule_list WHERE id = '$id'";

  //use for MySQLi OOP
  // if ($conn->query($sql)) {
  //   $_SESSION['success'] = 'Member deleted successfully';
  // }
  ////////////////

  //use for MySQLi Procedural
  if (mysqli_query($con, $sql)) {
    $_SESSION['success'] = '<script>
    toastr.options = {
"closeButton": false,
"debug": false,
"newestOnTop": false,
"progressBar": false,
"positionClass": "toast-top-right",
"preventDuplicates": false,
"onclick": null,
"showDuration": "300",
"hideDuration": "1000",
"timeOut": "5000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut"
}
toastr["success"]("Delete successfully")

  </script>';
  }
  /////////////////

  else {
    $_SESSION['error'] = 'Something went wrong in deleting member';
  }
} else {
  $_SESSION['error'] = 'Select member to delete first';
}

header('location:index.php');


?>