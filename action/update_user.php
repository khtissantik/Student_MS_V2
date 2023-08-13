<?php

session_start();
include_once('../dbcon.php');


if (isset($_POST['user_id'])) {
  $id = htmlspecialchars($_POST['user_id']);
  $fullname = htmlspecialchars($_POST['fullname']);
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  $permission = htmlspecialchars($_POST['permission']);
  $dob = htmlspecialchars($_POST['dob']);
  $phone = htmlspecialchars($_POST['phone']);



  $sql = "UPDATE tbl_users SET fullname = '$fullname', username = '$username', password='$password',permission='$permission', dob='$dob' phone='$phone' WHERE id = '$user_id'";

  // //use for MySQLi OOP
  // if ($conn->query($sql)) {
  //   $_SESSION['success'] = 'Member updated successfully';
  // }
  // ///////////////

  //use for MySQLi Procedural
  if (mysqli_query($conn, $sql)) {
    $_SESSION['success'] = 'Member updated successfully';
  }
  ///////////////

  else {
    $_SESSION['error'] = 'Something went wrong in updating member';
  }
} else {
  $_SESSION['error'] = 'Select member to edit first';
}

header('location: set../view/permission.php');
