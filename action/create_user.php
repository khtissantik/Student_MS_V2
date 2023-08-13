<?php
session_start();
include_once('../dbcon.php');

if (isset($_POST['create_user'])) {
    
  $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $status = mysqli_real_escape_string($con, $_POST['status']);
  $permission = mysqli_real_escape_string($con, $_POST['permission']);
  $modify_by = mysqli_real_escape_string($con, $_POST['modify_by']);


  $query = "INSERT INTO tbl_user (fullname, username, password, phone, status, permission, modify_by) VALUES 
 ('$fullname', '$username', '$password', '$phone', '$status', '$permission', '$modify_by')";
  $query_run = mysqli_query($con, $query);


  if($query_run){
    header("location:../view/permission.php");
  }
  else
  {
    echo("Input value Fail");
  }
}
?>